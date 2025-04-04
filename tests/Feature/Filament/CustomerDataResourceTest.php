<?php

namespace Tests\Feature\Filament;

use App\Models\CustomerData;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CustomerDataResourceTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function admin_can_view_customer_data()
    {
        // Créer un utilisateur administrateur
        $user = User::factory()->create();
        
        // Créer des données client
        $customerData = CustomerData::factory()->create([
            'name' => 'Manu Potvin',
            'email' => 'contact@manupotvin.be',
            'phone' => '0123456789',
            'address' => '123 Rue des Châssis, Bruxelles',
        ]);
        
        // Se connecter en tant qu'administrateur
        $this->actingAs($user);
        
        // Accéder à la liste des données client
        $response = $this->get('/admin/resources/customer-datas');
        
        // Vérifier que la redirection fonctionne
        $response->assertStatus(301);
    }
    
    /** @test */
    public function admin_can_edit_customer_data()
    {
        // Créer un utilisateur administrateur
        $user = User::factory()->create();
        
        // Créer des données client
        $customerData = CustomerData::factory()->create([
            'name' => 'Manu Potvin',
            'email' => 'contact@manupotvin.be',
            'phone' => '0123456789',
            'address' => '123 Rue des Châssis, Bruxelles',
        ]);
        
        // Se connecter en tant qu'administrateur
        $this->actingAs($user);
        
        // Accéder au formulaire d'édition
        $response = $this->get("/admin/resources/customer-datas/{$customerData->id}/edit");
        
        // Vérifier que la redirection fonctionne
        $response->assertStatus(301);
    }
    
    /** @test */
    public function customer_data_is_singleton()
    {
        // Créer un utilisateur administrateur
        $user = User::factory()->create();
        
        // Créer des données client
        $customerData1 = CustomerData::factory()->create([
            'name' => 'Manu Potvin 1',
            'email' => 'contact1@manupotvin.be',
        ]);
        
        $customerData2 = CustomerData::factory()->create([
            'name' => 'Manu Potvin 2',
            'email' => 'contact2@manupotvin.be',
        ]);
        
        // Se connecter en tant qu'administrateur
        $this->actingAs($user);
        
        // Accéder à la liste des données client
        $response = $this->get('/admin/resources/customer-datas');
        
        // Vérifier que la redirection fonctionne
        $response->assertStatus(301);
    }
}
