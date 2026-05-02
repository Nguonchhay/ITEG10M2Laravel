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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('profile', 255);
            $table->string('name', 35);
            $table->string('department', 35);
            $table->string('short_bio', 255);
            $table->string('specialist', 50);
            $table->tinyInteger('years_of_experience');
            $table->string('email', 100)->nullable()->unique();
            $table->string('phone', 30)->nullable()->unique();
            $table->string('linked_in', 255)->nullable()->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
