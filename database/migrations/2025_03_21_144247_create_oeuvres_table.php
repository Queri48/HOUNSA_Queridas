<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('oeuvres', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 255);
            $table->string('artiste', 255);
            $table->string('annee_fabrication',10);
            $table->string('date_acquisition',10);
            $table->double('prix', 10, 2);
            $table->longText('description');
            $table->string('photo',255)->nullable();
            $table->foreignId('categorie_id')->nullable()->constrained('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oeuvres');
    }
};
