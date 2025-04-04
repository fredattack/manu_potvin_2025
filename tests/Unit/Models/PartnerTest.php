<?php

namespace Tests\Unit\Models;

use App\Models\Partner;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PartnerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_be_created_with_basic_attributes()
    {
        // Arrange & Act
        $partner = Partner::factory()->create([
            'name' => 'Test Partner',
        ]);

        // Assert
        $this->assertDatabaseHas('partners', [
            'id' => $partner->id,
            'name' => 'Test Partner',
        ]);
    }

    /** @test */
    public function it_can_add_logo_media()
    {
        // Arrange
        $partner = Partner::factory()->create();
        Storage::fake('media');
        $file = UploadedFile::fake()->image('logo.png', 500, 500);

        // Act
        $media = $partner
            ->addMedia($file)
            ->toMediaCollection('logo');

        // Assert
        $this->assertEquals(1, $partner->getMedia('logo')->count());
        $this->assertEquals('logo', $media->collection_name);
    }

    /** @test */
    public function it_can_be_soft_deleted()
    {
        // Arrange
        $partner = Partner::factory()->create();
        
        // Act
        $partner->delete();
        
        // Assert
        $this->assertSoftDeleted('partners', [
            'id' => $partner->id
        ]);
    }
}
