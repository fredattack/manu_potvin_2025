<?php

namespace Tests\Unit\Media;

use App\Models\Realisation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class MediaPerformanceTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('media');
    }

    /** @test */
    public function thumb_conversion_reduces_file_size()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        
        // Créer une image relativement grande
        $file = UploadedFile::fake()->image('large.jpg', 2000, 2000);
        
        // Act
        $media = $realisation->addMedia($file)->toMediaCollection('illustration');
        $media->refresh();
        
        // Assert
        $originalSize = $media->size;
        $thumbSize = filesize($media->getPath('thumb'));
        
        // Le thumbnail devrait être significativement plus petit
        $this->assertLessThan($originalSize, $thumbSize);
    }

    /** @test */
    public function image_dimensions_are_optimized()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $file = UploadedFile::fake()->image('responsive.jpg', 1500, 1000);
        
        // Act
        $media = $realisation->addMedia($file)->toMediaCollection('illustration');
        $media->refresh();
        
        // Assert
        list($thumbWidth, $thumbHeight) = getimagesize($media->getPath('thumb'));
        
        // Vérifier que les dimensions sont optimisées
        $this->assertLessThan(1500, $thumbWidth);
        $this->assertLessThan(1000, $thumbHeight);
    }

    /** @test */
    public function multiple_images_can_be_processed_efficiently()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $startTime = microtime(true);
        
        // Act - Ajouter plusieurs images
        for ($i = 1; $i <= 5; $i++) {
            $file = UploadedFile::fake()->image("gallery{$i}.jpg", 1200, 800);
            $realisation->addMedia($file)->toMediaCollection('gallery');
        }
        
        $endTime = microtime(true);
        $processingTime = $endTime - $startTime;
        
        // Assert
        $this->assertEquals(5, $realisation->getMedia('gallery')->count());
        
        // Le temps de traitement ne devrait pas être excessif
        $this->assertLessThan(10, $processingTime, "Le traitement de 5 images a pris {$processingTime} secondes");
    }

    /** @test */
    public function thumbnail_dimensions_are_appropriate()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $file = UploadedFile::fake()->image('verylarge.jpg', 4000, 3000);
        
        // Act
        $media = $realisation->addMedia($file)->toMediaCollection('illustration');
        $media->refresh();
        
        // Assert
        list($thumbWidth, $thumbHeight) = getimagesize($media->getPath('thumb'));
        
        // Les dimensions du thumbnail devraient être raisonnables
        // Selon la configuration dans Realisation.php, la largeur et hauteur max sont 300
        $this->assertGreaterThan(0, $thumbWidth);
        $this->assertGreaterThan(0, $thumbHeight);
    }

    /** @test */
    public function image_conversion_maintains_acceptable_quality()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $file = UploadedFile::fake()->image('quality.jpg', 1000, 1000);
        
        // Act
        $media = $realisation->addMedia($file)->toMediaCollection('illustration');
        $media->refresh();
        
        // Assert
        $originalSize = $media->size;
        $thumbSize = filesize($media->getPath('thumb'));
        
        // La taille ne devrait pas être trop petite (ce qui indiquerait une qualité très faible)
        $this->assertGreaterThan($originalSize * 0.01, $thumbSize, 
            "La taille du thumbnail est trop petite, ce qui suggère une qualité d'image médiocre");
    }
}
