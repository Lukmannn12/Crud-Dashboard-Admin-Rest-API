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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('imagePath', 2048)->nullable();
            $table->text('overview')->nullable();
            $table->text('tipografi')->nullable();
            $table->text('content')->nullable();
            $table->text('color')->nullable();
            $table->integer('id_service')->nullable();
            $table->string('date')->nullable();
            $table->string('client')->nullable();
            $table->string('url')->nullable();
            $table->string('tag')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
