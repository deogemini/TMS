<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripEntry extends Model
{
    use HasFactory;

    protected $fillable = ['truck_id','driver_id', 'trip_number', 'date_trip', 'start_location', 'destination_location', 'weight_in_tons', 'package_amount', 'status_pay','item_name', 'remarks', 'amount_to_pay', 'customer_id'];
}
