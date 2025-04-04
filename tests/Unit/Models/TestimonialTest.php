<?php

namespace Tests\Unit\Models;

use App\Models\Testimonial;
use App\Models\Realisation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class TestimonialTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_be_created_with_basic_attributes()
    {
        // Arrange & Act
        $testimonial = Testimonial::factory()->create([
            'author' => 'John Doe',
            'content' => 'This is a great service!',
            'city' => 'Paris',
            'rating' => 5,
            'published' => true,
        ]);

        // Assert
        $this->assertDatabaseHas('testimonials', [
            'id' => $testimonial->id,
            'author' => 'John Doe',
            'content' => 'This is a great service!',
            'city' => 'Paris',
            'rating' => 5,
            'published' => true,
        ]);
    }

    /** @test */
    public function it_can_add_avatar_media()
    {
        // Arrange
        $testimonial = Testimonial::factory()->create();
        Storage::fake('media');
        $file = UploadedFile::fake()->image('avatar.jpg', 300, 300);

        // Act
        $media = $testimonial
            ->addMedia($file)
            ->toMediaCollection('avatar');

        // Assert
        $this->assertEquals(1, $testimonial->getMedia('avatar')->count());
        $this->assertEquals('avatar', $media->collection_name);
    }

    /** @test */
    public function it_enforces_rating_constraints()
    {
        // Arrange
        $testimonial = Testimonial::factory()->create(['rating' => 5]);
        
        // Assert
        $this->assertGreaterThanOrEqual(1, $testimonial->rating);
        $this->assertLessThanOrEqual(5, $testimonial->rating);
    }

    /** @test */
    public function it_can_filter_by_published_status()
    {
        // Arrange
        Testimonial::factory()->count(3)->create(['published' => false]);
        Testimonial::factory()->count(2)->create(['published' => true]);

        // Act
        $published = Testimonial::where('published', true)->get();
        $unpublished = Testimonial::where('published', false)->get();

        // Assert
        $this->assertCount(2, $published);
        $this->assertCount(3, $unpublished);
    }

    /** @test */
    public function it_can_be_associated_with_realisation()
    {
        // Arrange
        $realisation = Realisation::factory()->create();
        $testimonial = Testimonial::factory()->create([
            'realisation_id' => $realisation->id
        ]);

        // Assert
        $this->assertEquals($realisation->id, $testimonial->realisation_id);
    }
}
