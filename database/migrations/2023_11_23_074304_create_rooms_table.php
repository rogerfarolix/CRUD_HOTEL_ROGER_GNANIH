<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name');
            $table->text('hotel_description')->nullable();
            $table->string('room_name');
            $table->decimal('price', 8, 2);
            $table->integer('num_beds');
            $table->integer('max_adults')->nullable();
            $table->integer('max_children')->nullable();
            $table->json('attributes')->nullable();
            $table->enum('status', ['Disponible', 'Non disponible']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
