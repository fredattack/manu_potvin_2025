<?php

namespace Tests\Unit\Media;

use App\Models\Partner;
use App\Models\Realisation;
use App\Models\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Tests\TestCase;

class MediaImplementationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        Storage::fake('media');
    }

    /** @test */
    public function realisation_model_implements_media_interfaces()
    {
        // Arrange
        $realisation = new Realisation();
        
        // Assert
        $this->assertInstanceOf(HasMedia::class, $realisation);
        $this->assertContains(InteractsWithMedia::class, class_uses_recursive($realisation));
    }

    /** @test */
    public function partner_model_implements_media_interfaces()
    {
        // Arrange
        $partner = new Partner();
        
        // Assert
        $this->assertInstanceOf(HasMedia::class, $partner);
        $this->assertContains(InteractsWithMedia::class, class_uses_recursive($partner));
    }

    /** @test */
    public function testimonial_model_implements_media_interfaces()
    {
        // Arrange
        $testimonial = new Testimonial();
        
        // Assert
        $this->assertInstanceOf(HasMedia::class, $testimonial);
        $this->assertContains(InteractsWithMedia::class, class_uses_recursive($testimonial));
    }

    /** @test */
    public function realisation_registers_expected_media_collections()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $illustrationFile = UploadedFile::fake()->image('illustration.jpg');
        $galleryFile = UploadedFile::fake()->image('gallery.jpg');
        
        // Act
        $realisation->addMedia($illustrationFile)->toMediaCollection('illustration');
        $realisation->addMedia($galleryFile)->toMediaCollection('gallery');
        
        // Assert
        $this->assertEquals(1, $realisation->getMedia('illustration')->count());
        $this->assertEquals(1, $realisation->getMedia('gallery')->count());
    }

    /** @test */
    public function partner_registers_expected_media_collections()
    {
        // Arrange
        $partner = Partner::factory()->create();
        $logoFile = UploadedFile::fake()->image('logo.png');
        
        // Act
        $partner->addMedia($logoFile)->toMediaCollection('logo');
        
        // Assert
        $this->assertEquals(1, $partner->getMedia('logo')->count());
    }

    /** @test */
    public function testimonial_registers_expected_media_collections()
    {
        // Arrange
        $testimonial = Testimonial::factory()->create();
        $avatarFile = UploadedFile::fake()->image('avatar.jpg');
        
        // Act
        $testimonial->addMedia($avatarFile)->toMediaCollection('avatar');
        
        // Assert
        $this->assertEquals(1, $testimonial->getMedia('avatar')->count());
    }

    /** @test */
    public function realisation_can_access_media_through_accessors()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $file = UploadedFile::fake()->image('test.jpg');
        $realisation->addMedia($file)->toMediaCollection('illustration');
        
        // Act & Assert
        $this->assertNotNull($realisation->image);
        $this->assertStringContainsString('<img', $realisation->image);
    }

    /** @test */
    public function realisation_returns_default_image_when_no_media()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        
        // Act & Assert
        $this->assertNotNull($realisation->image);
        $this->assertStringContainsString('default', $realisation->image);
    }

    /** @test */
    public function realisation_gallery_images_accessor_returns_expected_format()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $file1 = UploadedFile::fake()->image('gallery1.jpg');
        $file2 = UploadedFile::fake()->image('gallery2.jpg');
        
        // Act
        $realisation->addMedia($file1)->toMediaCollection('gallery');
        $realisation->addMedia($file2)->toMediaCollection('gallery');
        $galleryImages = $realisation->gallery_images;
        
        // Assert
        $this->assertIsArray($galleryImages);
        $this->assertCount(2, $galleryImages);
        $this->assertArrayHasKey('id', $galleryImages[0]);
        $this->assertArrayHasKey('html', $galleryImages[0]);
    }
}
