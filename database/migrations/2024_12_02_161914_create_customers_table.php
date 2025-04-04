<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('customer_data', function (Blueprint $table) {
            $table->id(); // Identifiant unique
            $table->string('name'); // Nom du client
            $table->string('address'); // Adresse du client
            $table->string('email')->unique(); // Email du client
            $table->string('phone')->nullable(); // Téléphone du client
            $table->text('notes')->nullable(); // Notes supplémentaires
            $table->timestamps(); // Horodatage (created_at, updated_at)
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
