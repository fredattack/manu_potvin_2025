<?php

namespace Tests\Feature;

use App\Models\Realisation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use Carbon\Carbon;

class RealisationControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('media');
    }

    /** @test */
    public function it_displays_realisation_details()
    {
        // Arrange
        $realisation = Realisation::factory()->create([
            'title' => 'Test Realisation',
            'description' => 'This is a test description',
            'category' => ['test-category'],
            'published' => true,
            'place' => 'Test Place',
            'customer' => 'Test Customer',
            'date' => Carbon::now(),
        ]);
        
        // Ajouter une image principale
        $realisation->addMedia(
            UploadedFile::fake()->image('main.jpg', 1000, 1000)
        )->toMediaCollection('illustration');
        
        // Ajouter des images de galerie
        $realisation->addMedia(
            UploadedFile::fake()->image('gallery1.jpg', 1000, 1000)
        )->toMediaCollection('gallery');
        $realisation->addMedia(
            UploadedFile::fake()->image('gallery2.jpg', 1000, 1000)
        )->toMediaCollection('gallery');
        
        // Act
        $response = $this->followingRedirects()->get(route('pages.details', ['realisation' => $realisation]));
        
        // Assert
        $response->assertStatus(200);
        $response->assertSee('Test Realisation');
        $response->assertSee('This is a test description');
        $response->assertSee('Test Place');
        $response->assertSee('Test Customer');
    }

    /** @test */
    public function it_returns_404_for_nonexistent_realisation()
    {
        // Act
        $response = $this->get(route('pages.details', ['realisation' => 999]));
        
        // Assert
        $response->assertStatus(404);
    }

    /** @test */
    public function it_returns_404_for_unpublished_realisation()
    {
        // Arrange
        $realisation = Realisation::factory()->create([
            'published' => false,
        ]);
        
        // Act
        $response = $this->get(route('pages.details', ['realisation' => $realisation]));
        
        // Assert
        $response->assertStatus(404);
    }

    /** @test */
    public function it_displays_gallery_images()
    {
        // Arrange
        $realisation = Realisation::factory()->create([
            'title' => 'Gallery Test',
            'published' => true,
            'date' => Carbon::now(),
        ]);
        
        // Ajouter une image principale
        $realisation->addMedia(
            UploadedFile::fake()->image('main.jpg', 1000, 1000)
        )->toMediaCollection('illustration');
        
        // Ajouter plusieurs images de galerie
        for ($i = 1; $i <= 5; $i++) {
            $realisation->addMedia(
                UploadedFile::fake()->image("gallery{$i}.jpg", 1000, 1000)
            )->toMediaCollection('gallery');
        }
        
        // Act
        $response = $this->followingRedirects()->get(route('pages.details', ['realisation' => $realisation]));
        
        // Assert
        $response->assertStatus(200);
        
        // Vérifier que le nombre d'images de galerie est correct
        $this->assertEquals(5, $realisation->getMedia('gallery')->count());
        
        // Vérifier que les images de la galerie sont chargées dans la vue
        $response->assertSee('gallery-container');
    }

    /** @test */
    public function it_displays_related_realisations()
    {
        // Arrange
        // Créer la réalisation principale
        $mainRealisation = Realisation::factory()->create([
            'title' => 'Main Realisation',
            'category' => ['category1', 'category2'],
            'published' => true,
            'date' => Carbon::now(),
        ]);
        
        // Ajouter une image principale
        $mainRealisation->addMedia(
            UploadedFile::fake()->image('main.jpg', 1000, 1000)
        )->toMediaCollection('illustration');
        
        // Créer des réalisations liées par catégorie
        $relatedRealisation1 = Realisation::factory()->create([
            'title' => 'Related 1',
            'category' => ['category1', 'other'],
            'published' => true,
            'date' => Carbon::now(),
        ]);
        $relatedRealisation1->addMedia(
            UploadedFile::fake()->image('related1.jpg', 1000, 1000)
        )->toMediaCollection('illustration');
        
        $relatedRealisation2 = Realisation::factory()->create([
            'title' => 'Related 2',
            'category' => ['category2', 'different'],
            'published' => true,
            'date' => Carbon::now(),
        ]);
        $relatedRealisation2->addMedia(
            UploadedFile::fake()->image('related2.jpg', 1000, 1000)
        )->toMediaCollection('illustration');
        
        // Créer une réalisation non liée
        $unrelatedRealisation = Realisation::factory()->create([
            'title' => 'Unrelated',
            'category' => ['different'],
            'published' => true,
            'date' => Carbon::now(),
        ]);
        $unrelatedRealisation->addMedia(
            UploadedFile::fake()->image('unrelated.jpg', 1000, 1000)
        )->toMediaCollection('illustration');
        
        // Act
        $response = $this->followingRedirects()->get(route('pages.details', ['realisation' => $mainRealisation]));
        
        // Assert
        $response->assertStatus(200);
        $response->assertSee('Main Realisation');
        
        // Vérifier que les réalisations liées sont présentes
        $response->assertSee('Related 1');
        $response->assertSee('Related 2');
    }

    /** @test */
    public function it_displays_metadata_correctly()
    {
        // Arrange
        $realisation = Realisation::factory()->create([
            'title' => 'SEO Test Realisation',
            'description' => 'This is a test description for SEO purposes',
            'category' => ['seo-category'],
            'published' => true,
            'date' => Carbon::now(),
        ]);
        
        // Ajouter une image principale
        $media = $realisation->addMedia(
            UploadedFile::fake()->image('seo.jpg', 1000, 1000)
        )->toMediaCollection('illustration');
        
        // Act
        $response = $this->followingRedirects()->get(route('pages.details', ['realisation' => $realisation]));
        
        // Assert
        $response->assertStatus(200);
        
        // Vérifier les métadonnées SEO
        $response->assertSee('SEO Test Realisation');
        $response->assertSee('This is a test description for SEO purposes');
    }
    
    /** @test */
    public function it_loads_customer_data_with_realisation()
    {
        // Arrange
        $realisation = Realisation::factory()->create([
            'title' => 'Customer Data Test',
            'published' => true,
            'date' => Carbon::now(),
        ]);
        
        // Créer des données client
        $customerData = \App\Models\CustomerData::factory()->create([
            'name' => 'Manu Potvin',
            'email' => 'contact@example.com',
            'phone' => '0123456789',
        ]);
        
        // Act
        $response = $this->followingRedirects()->get(route('pages.details', ['realisation' => $realisation]));
        
        // Assert
        $response->assertStatus(200);
        
        // Vérifier que les données client sont chargées
        $response->assertSee('Manu Potvin');
    }
    
    /** @test */
    public function it_loads_media_with_realisation()
    {
        // Arrange
        $realisation = Realisation::factory()->create([
            'title' => 'Media Loading Test',
            'published' => true,
            'date' => Carbon::now(),
        ]);
        
        // Ajouter une image principale
        $realisation->addMedia(
            UploadedFile::fake()->image('main.jpg', 1000, 1000)
        )->toMediaCollection('illustration');
        
        // Act
        $response = $this->followingRedirects()->get(route('pages.details', ['realisation' => $realisation]));
        
        // Assert
        $response->assertStatus(200);
        
        // Vérifier que les médias sont correctement chargés
        $this->assertEquals(1, $realisation->getMedia('illustration')->count());
        $this->assertNotNull($realisation->getFirstMediaUrl('illustration'));
    }
}
