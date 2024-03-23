<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class VehicleAdvanceDetails extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'insurance_number','insurance_start_date', 'insurance_end_date', 'LATRA', 'road_licence',];

    public function vehicle(): HasOne{
        return $this->hasOne(Vehicle::class);
    }
}
