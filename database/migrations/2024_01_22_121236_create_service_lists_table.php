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
        Schema::create('service_lists', function (Blueprint $table) {
            $table->id();
            $table->string('sevice_name')->nullable();
            $table->longText('sevice_detail')->nullable();
            $table->string('sevice_created_by')->nullable();
            $table->string('user_id')->nullable();
            $table->string('categories_id')->nullable();

            $table->string('sevice_status')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_lists');
    }
};
