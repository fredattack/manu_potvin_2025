<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Customer;
use App\Models\CustomerData;
use App\Services\EmailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{

    public function __construct(protected EmailSender $emailSender)
    {
    }


    public function index()
    {
        return view('Pages.contact', [
            "customerData" => CustomerData::first()
        ]);
    }

    public function sendForm(ContactFormRequest $request)
    {
        // Send an email
        $validated = $request->validated();

        try {
            $this->emailSender->send([
                'name' => $validated['name'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'message' => $validated['message'],
            ]);

            if ($request->newsletter) {
                Customer::updateOrCreate(
                    [
                        'email' => $validated['email'],
                    ],
                    [
                        'nom' => $validated['name'],
                        'phone' => $validated['phone'],
                        'newsletter' => true,
                    ]
                );
            }

            return redirect()->back()->with(
                'success',
                'Votre message a été envoyé avec succès. Merci de nous avoir contactés !'
            );
        } catch (\Exception $e) {
            Log::warning($e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'envoi de votre message.');
        }
    }

    public function newsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:customers,email',
        ]);

        Customer::create([
            'email' => $request->email,
            'newsletter' => true,
        ]);

        return redirect()->back()->with('success', 'Votre adresse email a été enregistrer avec succès. Merci');
    }
}
