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
            $table->boolean('abs')->default(0);
            $table->boolean('air_conditioning')->default(false);
            $table->boolean('power_windows')->default(false);
            $table->boolean('power_door_locks')->default(false);
            $table->boolean('cruise_control')->default(false);
            $table->boolean('bluetooth_conectivity')->default(false);
            $table->boolean('remote_start')->default(false);
            $table->boolean('gps_navigation')->default(false);
            $table->boolean('heated_seats')->default(false);
            $table->boolean('climate_control')->default(false);
            $table->boolean('rear_parking_sensors')->default(false);
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
