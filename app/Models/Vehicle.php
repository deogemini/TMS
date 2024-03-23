<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vehicle extends Model
{
    use HasFactory;



    protected $fillable = ['type_id', 'vehicle_name','make_model', 'registration_number', 'engine_number', 'chasis_number', 'year_manufacture','fuel_type', 'kilometres'];

    public function vehicleTypes(): BelongsTo{
        return $this->belongsTo(VehicleType::class);
    }

    public function vehicleAdvanceDetails(): HasOne{
        return $this->hasOne(VehicleAdvanceDetails::class);
    }
}
