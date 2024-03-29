<?php

namespace App\Http\Controllers;

use App\Models\TripEntry;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $trip = new TripEntry();
        $trip->driver_id = $request->driver_id;
        $trip->truck_id = $request->truck_id;
        $trip->customer_id = $request->customer_id;
        $trip->item_name = $request->item_name;
        $trip->remarks = $request->remarks;
        $trip->amount_to_pay = $request->amount_to_pay;
        $trip->weight_in_tons = $request->weight_in_tons;
        $trip->package_amount = $request->package_amount;
        $trip->date_trip = $request->date_trip;
        $trip->start_location = $request->start_location;
        $trip->remarks = $request->remarks;
        $trip->status_pay = $request->status_pay;
        $trip->destination_location = $request->destination_location;

        $lasttrip_number = TripEntry::max('trip_number');
                // Set the initial reference number to 1002 if there are no previous entries
        $trip_number = ($lasttrip_number !== null) ? $lasttrip_number + 1 : 1000;

        $trip->trip_number = $trip_number;
        $trip->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
