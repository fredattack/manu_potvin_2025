<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Services\EmailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    protected $emailSender;

    public function __construct(EmailSender $emailSender)
    {
        $this->emailSender = $emailSender;
    }


    public function index()
    {
        return view('Frontend.otherPages.contact');
    }

    public function sendForm(ContactFormRequest $request )
    {
        // Send an email
        $validated = $request->validated();
        ray($validated);
        try {
            $this->emailSender->send([
                'name' => $validated['name'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'message' => $validated['message'],
            ]);
            return redirect()->back();
        } catch (\Exception $e) {
            Log::warning($e->getMessage());
            return redirect('/')->with('error', 'Une erreur est survenue lors de l\'envoi de votre message.');
        }
    }
}
