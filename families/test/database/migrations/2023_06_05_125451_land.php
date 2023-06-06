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
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('production_quantity');
            
            $table->unsignedBigInteger('families_id');
            $table->foreign('families_id')->nullable()->references('id')->on('families')->onDelete('cascade');

            $table->unsignedBigInteger('plants_id');
            $table->foreign('plants_id')->nullable()->references('id')->on('plants')->onDelete('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lands');
    }
};
