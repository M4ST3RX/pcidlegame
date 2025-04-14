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
        Schema::create('components', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('component_type_id');
            $table->unsignedBigInteger('rarity_id');

            $table->unsignedBigInteger('socket_type_id')->nullable();
            $table->unsignedBigInteger('form_factor_id')->nullable();
            $table->unsignedBigInteger('case_layout_id')->nullable();
            $table->unsignedBigInteger('motherboard_layout_id')->nullable();

            $table->decimal('price', 12, 2)->default(0);

            $table->string('name');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('components');
    }
};
