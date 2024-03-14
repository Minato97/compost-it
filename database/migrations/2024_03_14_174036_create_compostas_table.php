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
        Schema::create('compostas', function (Blueprint $table) {
            $table->id();
            $table->decimal('CN')->nullable();
            $table->decimal('humedad')->nullable();
            $table->decimal('oxigeno')->nullable();
            $table->decimal('tamano_particula')->nullable();
            $table->decimal('materia_organica')->nullable();
            $table->decimal('nitrogeno_total')->nullable();
            $table->foreignId('id_etapas')
                ->nullable()
                ->constrained('etapas')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_users')
                ->nullable()
                ->constrained('users')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_categorias')
                ->nullable()
                ->constrained('categorias')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('id_prototipos')
                ->nullable()
                ->constrained('prototipos')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compostas');
    }
};
