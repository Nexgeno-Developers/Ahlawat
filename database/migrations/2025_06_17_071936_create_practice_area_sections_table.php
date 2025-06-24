<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('practice_area_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('practice_area_id');
            $table->string('section_key'); // e.g. 'hero', 'intro', 'sectors'
            $table->json('section_data');  // all data (title, subtitle, etc.) as JSON
            $table->timestamps();

            $table->foreign('practice_area_id')->references('id')->on('practice_areas')->onDelete('cascade');
            $table->unique(['practice_area_id', 'section_key']); // optional, ensures one row per section per area
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practice_area_sections');
    }
};
