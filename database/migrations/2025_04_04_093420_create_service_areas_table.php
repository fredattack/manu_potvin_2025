<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('service_areas', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom de la localité
            $table->string('postal_code')->nullable(); // Code postal
            $table->string('province')->default('Liège'); // Province
            $table->decimal('latitude', 10, 7)->nullable(); // Latitude pour la géolocalisation
            $table->decimal('longitude', 10, 7)->nullable(); // Longitude pour la géolocalisation
            $table->integer('radius')->default(15); // Rayon d'intervention en km
            $table->integer('priority')->default(5); // Priorité (1-10, 10 étant la plus haute)
            $table->boolean('is_primary')->default(false); // Zone principale ou secondaire
            $table->boolean('active')->default(true); // Statut actif
            $table->text('notes')->nullable(); // Notes éventuelles
            $table->timestamps();
        });
        
        // Insertion des zones d'intervention par défaut
        $this->seedDefaultServiceAreas();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_areas');
    }
    
    /**
     * Seed default service areas
     */
    private function seedDefaultServiceAreas(): void
    {
        $serviceAreas = [
            [
                'name' => 'Waremme',
                'postal_code' => '4300',
                'province' => 'Liège',
                'latitude' => 50.6951,
                'longitude' => 5.2579,
                'radius' => 15,
                'priority' => 10,
                'is_primary' => true,
                'active' => true,
                'notes' => 'Siège principal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hannut',
                'postal_code' => '4280',
                'province' => 'Liège',
                'latitude' => 50.6697,
                'longitude' => 5.0788,
                'radius' => 15,
                'priority' => 9,
                'is_primary' => true,
                'active' => true,
                'notes' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jodoigne',
                'postal_code' => '1370',
                'province' => 'Brabant wallon',
                'latitude' => 50.7236,
                'longitude' => 4.8661,
                'radius' => 15,
                'priority' => 8,
                'is_primary' => true,
                'active' => true,
                'notes' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Orp-Jauche',
                'postal_code' => '1350',
                'province' => 'Brabant wallon',
                'latitude' => 50.7125,
                'longitude' => 4.9833,
                'radius' => 15,
                'priority' => 7,
                'is_primary' => false,
                'active' => true,
                'notes' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Braives',
                'postal_code' => '4260',
                'province' => 'Liège',
                'latitude' => 50.6333,
                'longitude' => 5.1500,
                'radius' => 15,
                'priority' => 7,
                'is_primary' => false,
                'active' => true,
                'notes' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hélécine',
                'postal_code' => '1357',
                'province' => 'Brabant wallon',
                'latitude' => 50.7500,
                'longitude' => 5.0667,
                'radius' => 15,
                'priority' => 6,
                'is_primary' => false,
                'active' => true,
                'notes' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        
        DB::table('service_areas')->insert($serviceAreas);
    }
};
