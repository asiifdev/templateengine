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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->json('roles');
            $table->unsignedBigInteger('icon_id');
            $table->foreign('icon_id')->references('id')->on('icons');
            $table->string('url');
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->string('pathClass')->nullable();
            $table->string('nameClass')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
