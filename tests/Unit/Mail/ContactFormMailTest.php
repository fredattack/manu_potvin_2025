<?php

namespace Tests\Unit\Mail;

use App\Mail\ContactFormMail;
use Tests\TestCase;

class ContactFormMailTest extends TestCase
{
    /** @test */
    public function it_has_correct_envelope()
    {
        // Arrange
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '0123456789',
            'message' => 'This is a test message',
        ];
        
        // Act
        $mail = new ContactFormMail($data);
        $envelope = $mail->envelope();
        
        // Assert
        $this->assertEquals('Nouveau message de contact', $envelope->subject);
        $this->assertEquals(config('mail.from.address', 'noreply@manupotvin.be'), $envelope->from->address);
    }
    
    /** @test */
    public function it_has_correct_content()
    {
        // Arrange
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '0123456789',
            'message' => 'This is a test message',
        ];
        
        // Act
        $mail = new ContactFormMail($data);
        $content = $mail->content();
        
        // Assert
        $this->assertEquals('emails.contact-form', $content->markdown);
        $this->assertEquals($data, $content->with['data']);
    }
    
    /** @test */
    public function it_has_no_attachments()
    {
        // Arrange
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '0123456789',
            'message' => 'This is a test message',
        ];
        
        // Act
        $mail = new ContactFormMail($data);
        $attachments = $mail->attachments();
        
        // Assert
        $this->assertEmpty($attachments);
    }
    
    /** @test */
    public function it_builds_correctly()
    {
        // Arrange
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '0123456789',
            'message' => 'This is a test message',
        ];
        
        // Act
        $mail = new ContactFormMail($data);
        
        // Assert - Vérifier que le mail peut être construit sans erreur
        $this->assertInstanceOf(ContactFormMail::class, $mail);
        $this->assertEquals($data, $mail->data);
    }
}
