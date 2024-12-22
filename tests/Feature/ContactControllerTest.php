<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testSendFormFunctionality()
    {
        Mail::fake();

        $response = $this->post( route( 'contact.send-form' ), [
            'name' => 'John Doe',
            'phone' => '1234567890',
            'email' => 'john@example.com',
            'message' => 'Hello there!',
        ] );

        $response->assertRedirect();
        $response->assertSessionHas( 'success', 'Votre message a été envoyé avec succès!' );

        Mail::assertSent( ContactFormMail::class, function($mail) {
            return $mail->hasTo( 'contact@example.com' ) &&
                $mail->data['name'] === 'John Doe' &&
                $mail->data['email'] === 'john@example.com';
        } );
    }
}
