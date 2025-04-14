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
        Schema::create('motherboard_layouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('component_id')->nullable();
            $table->unsignedBigInteger('motherboard_form_factor_id')->nullable();

            $table->unsignedInteger('socket_type_id')->nullable();
            $table->unsignedInteger('cpu_slots')->default(1);
            $table->unsignedInteger('gpu_slots')->default(1);
            $table->unsignedInteger('ram_slots')->default(2);
            $table->unsignedInteger('m2_slots')->default(0);
            $table->unsignedInteger('sata_slots')->default(2);
            $table->unsignedInteger('pci_slots')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motherboard_layouts');
    }
};
