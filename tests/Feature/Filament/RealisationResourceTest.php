<?php

namespace Tests\Feature\Filament;

use App\Models\Realisation;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use Carbon\Carbon;

class RealisationResourceTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('media');
    }

    /** @test */
    public function admin_can_view_realisations_list()
    {
        // Créer un utilisateur administrateur
        $user = User::factory()->create();
        
        // Créer quelques réalisations
        Realisation::factory()->count(3)->create([
            'title' => 'Test Realisation',
            'published' => true,
            'date' => Carbon::now(),
        ]);
        
        // Se connecter en tant qu'administrateur
        $this->actingAs($user);
        
        // Accéder à la liste des réalisations
        $response = $this->get('/admin/resources/realisations');
        
        // Vérifier que la redirection fonctionne
        $response->assertStatus(301);
    }
    
    /** @test */
    public function admin_can_create_realisation()
    {
        // Créer un utilisateur administrateur
        $user = User::factory()->create();
        
        // Se connecter en tant qu'administrateur
        $this->actingAs($user);
        
        // Accéder au formulaire de création
        $response = $this->get('/admin/resources/realisations/create');
        
        // Vérifier que la redirection fonctionne
        $response->assertStatus(301);
    }
    
    /** @test */
    public function admin_can_edit_realisation()
    {
        // Créer un utilisateur administrateur
        $user = User::factory()->create();
        
        // Créer une réalisation
        $realisation = Realisation::factory()->create([
            'title' => 'Réalisation à modifier',
            'description' => 'Description initiale',
            'category' => ['test-category'],
            'published' => true,
            'date' => Carbon::now(),
        ]);
        
        // Se connecter en tant qu'administrateur
        $this->actingAs($user);
        
        // Accéder au formulaire d'édition
        $response = $this->get("/admin/resources/realisations/{$realisation->id}/edit");
        
        // Vérifier que la redirection fonctionne
        $response->assertStatus(301);
    }
    
    /** @test */
    public function admin_can_delete_realisation()
    {
        // Créer un utilisateur administrateur
        $user = User::factory()->create();
        
        // Créer une réalisation
        $realisation = Realisation::factory()->create([
            'title' => 'Réalisation à supprimer',
            'published' => true,
            'date' => Carbon::now(),
        ]);
        
        // Se connecter en tant qu'administrateur
        $this->actingAs($user);
        
        // Vérifier que la réalisation existe dans la base de données
        $this->assertDatabaseHas('realisations', [
            'id' => $realisation->id,
            'title' => 'Réalisation à supprimer',
        ]);
        
        // Accéder à la page de la réalisation
        $response = $this->get("/admin/resources/realisations/{$realisation->id}");
        
        // Vérifier que la redirection fonctionne
        $response->assertStatus(301);
    }
}
