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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            $table->string('make_model');
            $table->string('vehicle_name');
            $table->string('registration_number');
            $table->string('engine_number');
            $table->string('chasis_number');
            $table->integer('year_manufacture');
            $table->string('fuel_type');
            $table->integer('kilometres');
            $table->string('status')->default('active');
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('vehicle_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
