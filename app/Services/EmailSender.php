<?php


namespace App\Services;

use App\Models\CustomerData;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class EmailSender
{
    public function send(array $data)
    {
        $customerData = CustomerData::first();
        Mail::to( 'fredmoras8@gmail.com' )->send( new ContactFormMail( $data ) );
    }
}
