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
        Schema::create('h_i_s_t_o_r_y_s', function (Blueprint $table) {
            $table->id();
            $table->string('Title')->nullable();
            $table->longText('founding_story')->nullable();
            $table->longText('journey_So_far')->nullable();
            $table->longText('achievements')->nullable();
            $table->string('image')->nullable();

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_i_s_t_o_r_y_s');
    }
};
