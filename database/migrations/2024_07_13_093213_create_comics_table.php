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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            // tutti gli altri campi possono essere nullable all'inizio
            $table->string('author', 255)->nullable();
            $table->string('publisher', 255)->nullable();
            $table->string('language', 255)->nullable();
            $table->tinyInteger('page_count')->nullable();
            $table->string('genre', 255)->nullable();
            $table->date('publication_date')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
