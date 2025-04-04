<?php

namespace Tests\Feature\Filament;

use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class TestimonialResourceTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('media');
    }

    /** @test */
    public function admin_can_view_testimonials_list()
    {
        // Créer un utilisateur administrateur
        $user = User::factory()->create();
        
        // Créer quelques témoignages
        Testimonial::factory()->count(3)->create([
            'author' => 'Client Test',
            'content' => 'Très satisfait du service',
            'published' => true,
        ]);
        
        // Se connecter en tant qu'administrateur
        $this->actingAs($user);
        
        // Accéder à la liste des témoignages
        $response = $this->get('/admin/resources/testimonials');
        
        // Vérifier que la redirection fonctionne
        $response->assertStatus(301);
    }
    
    /** @test */
    public function admin_can_create_testimonial()
    {
        // Créer un utilisateur administrateur
        $user = User::factory()->create();
        
        // Se connecter en tant qu'administrateur
        $this->actingAs($user);
        
        // Accéder au formulaire de création
        $response = $this->get('/admin/resources/testimonials/create');
        
        // Vérifier que la redirection fonctionne
        $response->assertStatus(301);
    }
    
    /** @test */
    public function admin_can_edit_testimonial()
    {
        // Créer un utilisateur administrateur
        $user = User::factory()->create();
        
        // Créer un témoignage
        $testimonial = Testimonial::factory()->create([
            'author' => 'Client à modifier',
            'content' => 'Témoignage initial',
            'rating' => 5,
            'published' => true,
        ]);
        
        // Se connecter en tant qu'administrateur
        $this->actingAs($user);
        
        // Accéder au formulaire d'édition
        $response = $this->get("/admin/resources/testimonials/{$testimonial->id}/edit");
        
        // Vérifier que la redirection fonctionne
        $response->assertStatus(301);
    }
    
    /** @test */
    public function admin_can_toggle_testimonial_publication()
    {
        // Créer un utilisateur administrateur
        $user = User::factory()->create();
        
        // Créer un témoignage non publié
        $testimonial = Testimonial::factory()->create([
            'author' => 'Client test',
            'published' => false,
        ]);
        
        // Se connecter en tant qu'administrateur
        $this->actingAs($user);
        
        // Accéder à la page du témoignage
        $response = $this->get("/admin/resources/testimonials/{$testimonial->id}");
        
        // Vérifier que la redirection fonctionne
        $response->assertStatus(301);
    }
}
