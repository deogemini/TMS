<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

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

        $cars = Vehicle::all();
        $car_types =  VehicleType::all();
       return view('pages.truckspage', compact('cars','car_types'));
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
    public function register(Request $request)
    {
        $cars = VehicleType::all();

        return view('pages.register_vehicle',compact('cars'));
    }

    public function storeFile(Request $request){
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $folder = uniqid().'-'.now()->timestamp;
            $file->storeAs('avatars/tmp/'.$folder,$filename);

            TemporaryFile::create([
                'folder' => $folder,
                'filename' => $filename
            ]);

            return $folder;
        }

        return '';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehicle = Vehicle::create([

            'type_id' => $request->type_id,
            'make_model' => $request->make_model,
            'vehicle_name' => $request->vehicle_name,
            'engine_number' => $request->engine_number,
            'chasis_number' => $request->chasis_number,
            'year_manufacture' => $request->year_manufacture,
            'registration_number' => $request->registration_number,
            'fuel_type' => $request->fuel_type,
            'kilometres' => $request->kilometres,
        ]);

        // $temporaryFile = TemporaryFile::where('folder', $request->avatar)->first();
        // if($temporaryFile){

        //     $vehicle->addMedia(storage_path('app/public/avatars/tmp/'.$request->avatar.'/'.$temporaryFile->filename))->toMediaCollection('avatars');
        //     rmdir(storage_path('app/public/avatars/tmp/'.$request->avatar));
        //     $temporaryFile->delete();
        // }



        $car_types = VehicleType::all();
        $cars = Vehicle::all();



        return view('pages.truckspage',compact('cars', 'car_types'));



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
