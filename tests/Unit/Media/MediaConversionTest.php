<?php

namespace Tests\Unit\Media;

use App\Models\Realisation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class MediaConversionTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('media');
    }

    /** @test */
    public function it_generates_thumb_conversion_for_images()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $file = UploadedFile::fake()->image('test.jpg', 1000, 1000);

        // Act
        $media = $realisation->addMedia($file)->toMediaCollection('illustration');
        
        // Forcer la génération des conversions
        $media->refresh();

        // Assert
        $this->assertFileExists($media->getPath('thumb'));
    }

    /** @test */
    public function it_optimizes_image_size_with_conversions()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $file = UploadedFile::fake()->image('test.jpg', 2000, 2000);
        
        // Act
        $media = $realisation->addMedia($file)->toMediaCollection('illustration');
        
        // Forcer la génération des conversions
        $media->refresh();
        
        // Assert
        $originalSize = $media->size;
        $thumbSize = filesize($media->getPath('thumb'));
        
        // Le thumbnail devrait être plus petit que l'image originale
        $this->assertLessThan($originalSize, $thumbSize);
    }

    /** @test */
    public function it_preserves_aspect_ratio_in_conversions()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $file = UploadedFile::fake()->image('test.jpg', 1000, 500); // 2:1 ratio
        
        // Act
        $media = $realisation->addMedia($file)->toMediaCollection('illustration');
        
        // Forcer la génération des conversions
        $media->refresh();
        
        // Assert - Vérifier que le ratio est préservé dans la conversion
        list($thumbWidth, $thumbHeight) = getimagesize($media->getPath('thumb'));
        
        // Vérifier que le ratio est approximativement préservé
        $originalRatio = 1000 / 500; // 2.0
        $thumbRatio = $thumbWidth / $thumbHeight;
        
        // Le ratio devrait être approximativement le même (avec une marge d'erreur)
        $this->assertEqualsWithDelta($originalRatio, $thumbRatio, 0.3);
    }

    /** @test */
    public function it_can_generate_html_for_images()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $file = UploadedFile::fake()->image('test.jpg', 1000, 1000);
        $media = $realisation->addMedia($file)->toMediaCollection('illustration');
        
        // Act
        $html = $media->img();
        
        // Assert
        $this->assertStringContainsString('<img', $html);
        $this->assertStringContainsString('src', $html);
    }

    /** @test */
    public function it_can_handle_multiple_conversions_for_gallery()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        
        // Ajouter plusieurs images à la galerie
        $files = [
            UploadedFile::fake()->image('gallery1.jpg', 800, 600),
            UploadedFile::fake()->image('gallery2.jpg', 900, 700),
            UploadedFile::fake()->image('gallery3.jpg', 1200, 800)
        ];
        
        // Act
        foreach ($files as $file) {
            $realisation->addMedia($file)->toMediaCollection('gallery');
        }
        
        // Assert
        $galleryMedia = $realisation->getMedia('gallery');
        $this->assertCount(3, $galleryMedia);
        
        // Vérifier que chaque image a un chemin de conversion thumbnail
        foreach ($galleryMedia as $media) {
            $media->refresh();
            $this->assertFileExists($media->getPath('thumb'));
        }
    }

    /** @test */
    public function it_handles_non_image_files_gracefully()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $file = UploadedFile::fake()->create('document.pdf', 1000, 'application/pdf');
        
        // Act
        $media = $realisation->addMedia($file)->toMediaCollection('documents');
        
        // Assert - Ne devrait pas générer d'erreur pour les fichiers non-image
        $this->assertEquals('documents', $media->collection_name);
    }

    /** @test */
    public function it_uses_correct_dimensions_for_thumb_conversion()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $file = UploadedFile::fake()->image('test.jpg', 1000, 1000);
        
        // Act
        $media = $realisation->addMedia($file)->toMediaCollection('illustration');
        
        // Forcer la génération des conversions
        $media->refresh();
        
        // Assert
        list($thumbWidth, $thumbHeight) = getimagesize($media->getPath('thumb'));
        
        // Les dimensions du thumbnail devraient être de 300x300 maximum
        $this->assertLessThanOrEqual(300, $thumbWidth);
        $this->assertLessThanOrEqual(300, $thumbHeight);
    }
}
