<?php

namespace Tests\Unit\Services;

use App\Mail\ContactFormMail;
use App\Models\CustomerData;
use App\Services\EmailSender;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class EmailSenderTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_sends_email_to_customer_email()
    {
        // Arrange
        Mail::fake();
        
        $customerData = CustomerData::factory()->create([
            'email' => 'contact@example.com',
            'name' => 'Manu Potvin',
        ]);
        
        $formData = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '0123456789',
            'message' => 'This is a test message',
        ];
        
        $emailSender = new EmailSender();
        
        // Act
        $emailSender->send($formData);
        
        // Assert
        Mail::assertSent(ContactFormMail::class, function ($mail) use ($customerData, $formData) {
            return $mail->hasTo($customerData->email) &&
                   $mail->data === $formData;
        });
    }
    
    /** @test */
    public function it_loads_customer_data_from_database()
    {
        // Arrange
        Mail::fake();
        
        // Créer plusieurs entrées CustomerData pour s'assurer que first() est utilisé
        $oldCustomerData = CustomerData::factory()->create([
            'email' => 'old@example.com',
            'name' => 'Old Contact',
        ]);
        
        $customerData = CustomerData::factory()->create([
            'email' => 'contact@example.com',
            'name' => 'Manu Potvin',
        ]);
        
        $formData = [
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '9876543210',
            'message' => 'Another test message',
        ];
        
        $emailSender = new EmailSender();
        
        // Act
        $emailSender->send($formData);
        
        // Assert
        Mail::assertSent(ContactFormMail::class, function ($mail) use ($formData) {
            // Vérifie que l'email est envoyé à la première entrée CustomerData
            $firstCustomerData = CustomerData::first();
            return $mail->hasTo($firstCustomerData->email) &&
                   $mail->data === $formData;
        });
    }
    
    /** @test */
    public function it_handles_empty_customer_data()
    {
        // Arrange
        Mail::fake();
        
        // Ne pas créer de CustomerData pour tester le cas où aucune donnée n'existe
        
        $formData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '1122334455',
            'message' => 'Test message for empty customer data',
        ];
        
        $emailSender = new EmailSender();
        
        // Act & Assert
        // L'exception devrait être capturée dans un environnement de production,
        // mais pour les tests, nous voulons qu'elle soit levée pour la détecter
        $this->expectException(\ErrorException::class);
        
        $emailSender->send($formData);
    }
    
    /** @test */
    public function it_creates_contact_form_mail_with_correct_data()
    {
        // Arrange
        Mail::fake();
        
        $customerData = CustomerData::factory()->create([
            'email' => 'contact@example.com',
        ]);
        
        $formData = [
            'name' => 'Test Contact',
            'email' => 'test.contact@example.com',
            'phone' => '5544332211',
            'message' => 'Message for testing mail content',
        ];
        
        $emailSender = new EmailSender();
        
        // Act
        $emailSender->send($formData);
        
        // Assert
        Mail::assertSent(ContactFormMail::class, function ($mail) use ($formData) {
            // Vérifier que le mail contient les bonnes données
            return $mail->data['name'] === $formData['name'] &&
                   $mail->data['email'] === $formData['email'] &&
                   $mail->data['phone'] === $formData['phone'] &&
                   $mail->data['message'] === $formData['message'];
        });
    }
}
