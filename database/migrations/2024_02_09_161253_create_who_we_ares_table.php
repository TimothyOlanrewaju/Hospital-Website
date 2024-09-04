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
        Schema::create('who_we_ares', function (Blueprint $table) {
            $table->id();
            $table->string('banner_image');
            $table->string('who_we_are_title');
            $table->longText('who_we_are_message');
            $table->string('vision');
            $table->string('mission');
            $table->string('who_we_are_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('who_we_ares');
    }
};
