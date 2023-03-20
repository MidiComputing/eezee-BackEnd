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
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('statut');
            $table->string('nom_entreprise', 200);
            $table->string('num_entreprise');
            $table->string('num_tvq');
            $table->string('num_rbq')->nullable();
            $table->string('type')->nullable();
            $table->string('num_tel')->nullable();
            $table->string('poste')->nullable();
            $table->string('consentement')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};
