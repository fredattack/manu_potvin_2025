<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\CustomerData;
use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_contact_page()
    {
        // Créer des données client pour le test
        $customerData = CustomerData::factory()->create();
        
        // Faire une requête GET vers la page de contact avec suivi des redirections
        $response = $this->followingRedirects()->get(route('contactPage'));
        
        // Vérifier que la page s'affiche correctement
        $response->assertStatus(200);
        $response->assertViewIs('Pages.contact');
    }

    /** @test */
    public function it_can_subscribe_to_newsletter()
    {
        // Désactiver temporairement le middleware recaptcha pour ce test
        $this->withoutMiddleware();
        
        // Simuler une requête POST vers la route newsletter
        $response = $this->post(route('contact.newsletter'), [
            'email' => 'subscriber@example.com',
        ]);
        
        // Vérifier que la redirection fonctionne
        $response->assertRedirect();
        
        // Vérifier que l'email a été enregistré dans la base de données
        $this->assertDatabaseHas('customers', [
            'email' => 'subscriber@example.com',
            'newsletter' => true,
        ]);
    }
}
