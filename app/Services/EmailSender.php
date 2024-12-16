<?php


namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class EmailSender
{
public function send(array $data)
{
Mail::to('contact@example.com')->send(new ContactFormMail($data));
}
}
