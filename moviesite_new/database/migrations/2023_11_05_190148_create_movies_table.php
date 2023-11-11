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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movietype_id')->constrained()->onDelete('cascade');
            $table->foreignId('leadactor_id')->constrained()->onDelete('cascade');
            $table->foreignId('director_id')->constrained()->onDelete('cascade');
            $table->string('movie_name');
            $table->integer('movie_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
