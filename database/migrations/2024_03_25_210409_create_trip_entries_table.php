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
        Schema::create('trip_entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('truck_id');
            $table->unsignedBigInteger('driver_id');
            $table->integer('trip_number');
            $table->date('date_trip');
            $table->string('from');
            $table->string('to');
            $table->string('weight_in_tons')->nullable();
            $table->string('package_amount')->nullable();
            $table->string('status_pay');
            $table->string('item_name');
            $table->string('remarks');
            $table->string('amount_to_pay');
            $table->timestamps();

            $table->foreign('truck_id')->references('id')->on('vehicles');
            $table->foreign('driver_id')->references('id')->on('drivers');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip_entries');
    }
};
