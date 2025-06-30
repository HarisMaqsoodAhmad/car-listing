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
        Schema::create('car_features', function (Blueprint $table) {
            $table->unsignedBigInteger('car_id')->primary();
            $table->tinyInteger('abs')->nullable()->default(0);
            $table->tinyInteger('air_conditioning')->nullable()->default(0);
            $table->tinyInteger('power_windows')->nullable()->default(0);
            $table->tinyInteger('power_door_locks')->nullable()->default(0);
            $table->tinyInteger('cruise_control')->nullable()->default(0);
            $table->tinyInteger('bluetooth_connectivity')->nullable()->default(0);
            $table->tinyInteger('remote_start')->nullable()->default(0);
            $table->tinyInteger('gps_navigation')->nullable()->default(0);
            $table->tinyInteger('heater_seats')->nullable()->default(0);
            $table->tinyInteger('climate_control')->nullable()->default(0);
            $table->tinyInteger('rear_parking_sensors')->nullable()->default(0);
            $table->tinyInteger('leather_seats')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_features');
    }
};
