<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('animales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('especie', 100);
            $table->string('raza', 100);
            $table->unsignedSmallInteger('edad');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('animales');
    }
};
