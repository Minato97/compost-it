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
        Schema::create('prototipos', function (Blueprint $table) {
            $table->id();
            $table->string('prototipo');
            $table->text('descripcion');
            $table->text('instrucciones');
            $table->text('recursos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prototipos');
    }
};
