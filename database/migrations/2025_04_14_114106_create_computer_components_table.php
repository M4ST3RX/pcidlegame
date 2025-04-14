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
        Schema::create('computer_components', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('computer_id');
            $table->unsignedBigInteger('user_component_id');
            $table->unsignedBigInteger('component_type_id')->nullable();

            $table->unsignedInteger('slot_index')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computer_components');
    }
};
