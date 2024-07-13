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
            $table->text('description')->nullable();
            $table->string('thumb', 255)->nullable();
            $table->string('price', 255)->nullable();
            $table->string('series', 255)->nullable();
            $table->date('sale_date')->nullable();
            $table->string('type', 255)->nullable();
            $table->json('artists', 255)->nullable();
            $table->json('writers', 255)->nullable();

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
