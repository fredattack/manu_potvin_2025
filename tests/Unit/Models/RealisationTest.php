<?php

namespace Tests\Unit\Models;

use App\Models\Realisation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Tests\TestCase;

class RealisationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_be_created_with_basic_attributes()
    {
        // Arrange & Act
        $realisation = Realisation::factory()->create([
            'title' => 'Test Realisation',
            'description' => 'This is a test description',
            'category' => ['test-category'],
            'published' => true,
        ]);

        // Assert
        $this->assertDatabaseHas('realisations', [
            'id' => $realisation->id,
            'title' => 'Test Realisation',
            'published' => true,
        ]);
        $this->assertEquals(['test-category'], $realisation->category);
    }

    /** @test */
    public function it_has_main_category_attribute()
    {
        // Arrange
        $realisation = Realisation::factory()->create([
            'category' => ['primary-category', 'secondary-category'],
        ]);

        // Act & Assert
        $this->assertEquals('primary-category', $realisation->main_category);
    }

    /** @test */
    public function it_returns_null_for_main_category_when_category_is_empty()
    {
        // Arrange
        $realisation = Realisation::factory()->create([
            'category' => [],
        ]);

        // Act & Assert
        $this->assertNull($realisation->main_category);
    }

    /** @test */
    public function it_has_default_values_for_nullable_fields()
    {
        // Arrange
        $realisation = Realisation::factory()->create([
            'date' => null,
            'customer' => null,
            'place' => null,
        ]);

        // Act & Assert
        $this->assertEquals($realisation->created_at, $realisation->date);
        $this->assertEquals('anonyme', $realisation->customer);
        $this->assertEquals('privé', $realisation->place);
    }

    /** @test */
    public function it_can_add_media_to_illustration_collection()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $file = UploadedFile::fake()->image('test-image.jpg', 1000, 1000);

        // Act
        $media = $realisation
            ->addMedia($file)
            ->toMediaCollection('illustration');

        // Assert
        $this->assertInstanceOf(Media::class, $media);
        $this->assertEquals(1, $realisation->getMedia('illustration')->count());
        $this->assertEquals('illustration', $media->collection_name);
    }

    /** @test */
    public function it_can_add_media_to_gallery_collection()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $file1 = UploadedFile::fake()->image('gallery-1.jpg', 1000, 1000);
        $file2 = UploadedFile::fake()->image('gallery-2.jpg', 1000, 1000);

        // Act
        $realisation->addMedia($file1)->toMediaCollection('gallery');
        $realisation->addMedia($file2)->toMediaCollection('gallery');

        // Assert
        $this->assertEquals(2, $realisation->getMedia('gallery')->count());
    }

    /** @test */
    public function it_generates_thumb_conversion()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $file = UploadedFile::fake()->image('test-image.jpg', 1000, 1000);

        // Act
        $media = $realisation
            ->addMedia($file)
            ->toMediaCollection('illustration');

        // Assert
        $this->assertTrue(file_exists($media->getPath('thumb')));
    }

    /** @test */
    public function it_returns_gallery_images_attribute()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $file = UploadedFile::fake()->image('gallery-image.jpg', 1000, 1000);
        $media = $realisation->addMedia($file)->toMediaCollection('gallery');

        // Act
        $galleryImages = $realisation->gallery_images;

        // Assert
        $this->assertIsArray($galleryImages);
        $this->assertCount(1, $galleryImages);
        $this->assertEquals($media->id, $galleryImages[0]['id']);
    }

    /** @test */
    public function it_returns_default_image_when_no_illustration()
    {
        // Arrange
        $realisation = Realisation::factory()->create();

        // Act & Assert
        $this->assertStringContainsString('default/portfolio_banner.jpeg', $realisation->image);
    }

    /** @test */
    public function it_returns_image_html_when_illustration_exists()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $realisation->addMedia(
            UploadedFile::fake()->image('test.jpg', 1000, 1000)
        )->toMediaCollection('illustration');

        // Act & Assert
        $this->assertStringContainsString('<img', $realisation->image);
    }

    /** @test */
    public function it_scopes_favorites()
    {
        // Arrange
        Realisation::factory()->count(3)->create(['favorite' => false]);
        Realisation::factory()->count(2)->create(['favorite' => true]);

        // Act
        $favorites = Realisation::favorites()->get();

        // Assert
        $this->assertCount(2, $favorites);
        $this->assertTrue($favorites->every(fn ($item) => $item->favorite === 1));
    }

    /** @test */
    public function it_scopes_favorites_with_blacklist()
    {
        // Arrange
        $nonFavorite = Realisation::factory()->create(['favorite' => false]);
        $favorite1 = Realisation::factory()->create(['favorite' => true]);
        $favorite2 = Realisation::factory()->create(['favorite' => true]);

        // Act
        $favorites = Realisation::favorites([$favorite1->id])->get();

        // Assert
        $this->assertCount(1, $favorites);
        $this->assertEquals($favorite2->id, $favorites->first()->id);
    }
}
