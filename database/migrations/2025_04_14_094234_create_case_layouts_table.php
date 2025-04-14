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
        Schema::create('case_layouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('component_id')->nullable();
            $table->unsignedBigInteger('motherboard_form_factor_id')->nullable();

            $table->unsignedInteger('front_fans')->default(0);
            $table->unsignedInteger('top_fans')->default(0);
            $table->unsignedInteger('bottom_fans')->default(0);
            $table->unsignedInteger('side_fans')->default(0);
            $table->unsignedInteger('rear_fans')->default(0);
            $table->unsignedInteger('max_cooler_height')->default(0);
            $table->unsignedInteger('max_gpu_length')->default(0);
            $table->unsignedInteger('max_psu_length')->default(0);
            $table->unsignedInteger('max_radiator_length')->default(0);
            $table->unsignedInteger('max_hdd_slots')->default(0);
            $table->unsignedInteger('max_ssd_slots')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_layouts');
    }
};
