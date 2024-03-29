<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Drivers;
use App\Models\TemporaryFile;
use App\Models\TripEntry;
use App\Models\Vehicle;
use App\Models\VehicleAdvanceDetails;
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
    public function indexTrip()
    {
        $drivers = Drivers::all();
        $trucks = Vehicle::all();
        $customers = Customer::all();
       return view('pages.tripentry', compact('drivers', 'trucks','customers'));
    }

    public function tripEntry(Request $request){

        $newTrip = new TripEntry();
        $newTrip->driver_id = $request->driver_id;
        $newTrip->truck_id = $request->truck_id;
        $newTrip->trip_number = $request->trip_number;
        $newTrip->date_trip = $request->date_trip;
        $newTrip->start_location = $request->start_location;
        $newTrip->destination_location = $request->destination_location;
        $newTrip->weight_in_tons = $request->weight_in_tons;
        $newTrip->package_amount = $request->package_amount;
        $newTrip->status_pay = $request->status_pay;
        $newTrip->item_name = $request->item_name;
        $newTrip->remarks = $request->remarks;
        $newTrip->amount_to_pay = $request->amount_to_pay;
        $newTrip->save();


        $drivers = Drivers::all();
        $trucks = Vehicle::all();
        $customers = Customer::all();
        return view('pages.tripentry', compact('drivers', 'trucks','customers'));

    }

    public function indexDrivers()
    {

       $drivers = Drivers::all();
       return view('pages.driverspage', compact('drivers'));
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
    public function driverRoute(Request $request)
    {
        return view('pages.register_driver');
    }
    public function customerRoute(Request $request)
    {
        $customers = new Customer();
        return view('pages.customer',compact('customers'));
    }
    public function customerRegisterRoute(Request $request)
    {
        return view('pages.customer_register');
    }
    public function driverInfo($id)
    {
        $driver = Drivers::where('id', $id)->first();

        return view('pages.driver_info', compact('driver'));
    }
    public function driverStore(Request $request)
    {
        $driver = new Drivers();
        $driver->first_name = $request->first_name;
        $driver->last_name = $request->last_name;
        $driver->date_of_birth = $request->date_of_birth;
        $driver->email = $request->email;
        $driver->phone_number = $request->phone_number;
        $driver->address = $request->address;
        $driver->region = $request->region;
        $driver->country = $request->country;
        $driver->license_number = $request->license_number;
        $driver->license_class = $request->license_class;
        $driver->save();


        $drivers = Drivers::all();
       return view('pages.driverspage', compact('drivers'));
    }
    public function customerStore(Request $request)
    {
        $customer = new Customer();
        $customer->full_name = $request->full_name;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->save();


        $customers = new Customer();
        return view('pages.customer',compact('customers'));
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

    public function routetoAdvanceDetails($id)
    {
        $cartoadddetails = Vehicle::where('id',$id)->first();

        return view('pages.register_advance_details_vehicle',compact('cartoadddetails'));
    }
    public function routetoVehicleDetails($id)
    {
        $cartoadddetails = Vehicle::where('id',$id)->first();

        return view('pages.trucksinfo',compact('cartoadddetails'));
    }
    public function registerAdvanceDetails(Request $request)
    {
        $vehicle_id = Vehicle::where('id', $request->car_id)->first();
        $vehicleAdvanceDetails = new VehicleAdvanceDetails();
        $vehicleAdvanceDetails->car_id = $request->car_id;
        $vehicleAdvanceDetails->insurance_number = $request->insurance_number;
        $vehicleAdvanceDetails->insurance_start_date = $request->insurance_start_date;
        $vehicleAdvanceDetails->insurance_end_date = $request->insurance_end_date;
        $vehicleAdvanceDetails->LATRA = $request->LATRA;
        $vehicleAdvanceDetails->road_licence = $request->road_licence;

        $vehicleAdvanceDetails->save();

        $car_types = VehicleType::all();
        $cars = Vehicle::all();

        return view('pages.truckspage',compact('cars', 'car_types'));
    }
    public function registerAdvanceDetailsforAll(Request $request)
    {
        $cars = Vehicle::all();

        return view('pages.register_advance_details_vehicle_for_all',compact('cars'));
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
