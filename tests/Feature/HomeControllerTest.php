<?php

namespace Tests\Feature;

use App\Models\CustomerData;
use App\Models\Realisation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('media');

        // Créer les données client nécessaires
        CustomerData::factory()->create();
    }

    /** @test */
    public function home_page_loads_successfully()
    {
        // Act - Suivre les redirections
        $response = $this->followingRedirects()->get(route('home'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewIs('home');
        $response->assertViewHas(['themeColor', 'customerData', 'favoritesRealisations', 'serviceRealisations']);
    }

    /** @test */
    public function home_page_displays_favorite_realisations()
    {
        // Arrange
        $favoriteRealisations = Realisation::factory()->count(3)->create([
            'favorite' => true,
            'published' => true,
        ]);

        // Ajouter des médias aux réalisations
        foreach ($favoriteRealisations as $realisation) {
            $realisation->addMedia(
                UploadedFile::fake()->image('test.jpg', 1000, 1000)
            )->toMediaCollection('illustration');
        }

        // Act - Suivre les redirections
        $response = $this->followingRedirects()->get(route('home'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewHas('favoritesRealisations', function ($viewRealisations) use ($favoriteRealisations) {
            return $viewRealisations->count() === $favoriteRealisations->count() &&
                   $viewRealisations->pluck('id')->sort()->values()->toArray() ===
                   $favoriteRealisations->pluck('id')->sort()->values()->toArray();
        });
    }

    /** @test */
    public function home_page_groups_service_realisations_by_category()
    {
        // Arrange
        // Créer des réalisations avec différentes catégories
        $realisation1 = Realisation::factory()->create([
            'category' => ['category1', 'other'],
            'published' => true,
        ]);
        $realisation2 = Realisation::factory()->create([
            'category' => ['category2', 'other'],
            'published' => true,
        ]);
        $realisation3 = Realisation::factory()->create([
            'category' => ['category1', 'different'],
            'published' => true,
        ]);

        // Ajouter des médias aux réalisations
        $realisation1->addMedia(
            UploadedFile::fake()->image('test1.jpg', 1000, 1000)
        )->toMediaCollection('illustration');
        $realisation2->addMedia(
            UploadedFile::fake()->image('test2.jpg', 1000, 1000)
        )->toMediaCollection('illustration');
        $realisation3->addMedia(
            UploadedFile::fake()->image('test3.jpg', 1000, 1000)
        )->toMediaCollection('illustration');

        // Act - Suivre les redirections
        $response = $this->followingRedirects()->get(route('home'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewHas('serviceRealisations', function ($serviceRealisations) {
            // Vérifier que les réalisations sont bien groupées par catégorie
            return $serviceRealisations->has('category1') &&
                   $serviceRealisations->has('category2');
        });
    }

    /** @test */
    public function home_page_displays_customer_data()
    {
        // Arrange - Supprimer les données existantes et en créer de nouvelles
        CustomerData::query()->delete();
        $customerData = CustomerData::factory()->create([
            'name' => 'Manu Potvin',
            'email' => 'contact@example.com',
            'phone' => '123456789',
        ]);

        // Act - Suivre les redirections
        $response = $this->followingRedirects()->get(route('home'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewHas('customerData', function ($viewCustomerData) use ($customerData) {
            return $viewCustomerData->id === $customerData->id;
        });

        // Vérifier que les données sont présentes dans le HTML
        $response->assertSee('Manu Potvin');
        $response->assertSee('contact@example.com');
    }

    /** @test */
    public function home_page_uses_correct_theme_color()
    {
        // Act - Suivre les redirections
        $response = $this->followingRedirects()->get(route('home'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewHas('themeColor', 'manu-potvin-color');
    }

    /** @test */
    public function home_page_loads_with_empty_realisations()
    {
        // Act - Suivre les redirections
        $response = $this->followingRedirects()->get(route('home'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewHas('favoritesRealisations', function ($favoritesRealisations) {
            return $favoritesRealisations->isEmpty();
        });
    }
}
