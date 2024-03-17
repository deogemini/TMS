<?php

namespace App\Http\Controllers;

use App\Models\VehicleType;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cars = VehicleType::all();
       return view('pages.vehicleType', compact('cars'));
    }

    public function indexVehicles()
    {

        $cars = VehicleType::all();
       return view('pages.truckspage', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createVehicleType(Request $request)
    {
        $request->validate([
            'name'=>'required|string'
        ]);

        VehicleType::create($request->all());

        return redirect()->back();
    }

    public function storeFile(Request $request){
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $folder = uniqid().'-'.now()->timestamp;
            $file->storeAs('avatars/'.$folder,$filename);

            return $folder;
        }

        return '';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
