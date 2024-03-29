@extends('welcome')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="card-title">
                        Trip Entry Registration
                    </h3>

                                    </div>
                <div class="col-auto">
                        <a href="{{route('trucks.vehicles.index')}}" class="btn btn-primary">
                            <i class="mdi mdi-chevron-left"></i> <!-- Assuming you want a left chevron icon -->
                            Go back to Trip List
                        </a>
                </div>

                <div class="col-auto">
                    <a href="{{route('trucks.vehicles.index')}}" class="btn btn-secondary">
                        <i class="mdi mdi-download"></i> <!-- Assuming you want a left chevron icon -->
                        Download PDF
                    </a>
            </div>
            </div>
        </div>


                <div class="card-body form-steps">
                    <form id="registration_form" action="{{ route('trip.registration') }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Trip Number</label>
                                        <input type="text" class="form-control" name="trip_number" value="" placeholder="Please Enter Trip Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description"> Trip Date</label>
                                        <input type="date" class="form-control" name="date_trip" placeholder="Enter Insurance Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Truck</label>
                                        <select name="truck_id"  id="region" class="form-select">
                                            <option value="" selected>Please  Select Truck</option>
                                            @foreach ($trucks as $truck )
                                            <option value="{{$truck->id}}">{{$truck->vehicle_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Driver</label>
                                        <select name="driver_id"  id="region" class="form-select">
                                            <option value="" selected>Please  Select Driver</option>
                                            @foreach ($drivers as $driver )
                                            <option value="{{$driver->id}}">{{$driver->first_name .' '. $driver->last_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Customer</label>
                                        <select name="customer_id"  id="region" class="form-select">
                                            <option value="" selected>Please  Select Customer</option>
                                            @foreach ($customers as $customer )
                                            <option value="{{$customer->id}}">{{$customer->full_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Location Start</label>
                                        <input type="text" class="form-control" name="start_location" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Location Destination</label>
                                        <input type="text" class="form-control" name="destination_location" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Item Name</label>
                                        <input type="name" class="form-control" name="item_name" placeholder="Enter Type name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Weight in Tons</label>
                                        <input type="number" class="form-control" name="weight_in_tons" placeholder="Enter weight value">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Number of Packages</label>
                                        <input type="number" class="form-control" name="package_amount" placeholder="Enter number of package">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Status On Pay</label>
                                        <select name="status_pay"  id="region" class="form-select">
                                            <option value="" selected>Please select payment option</option>
                                                <option value="Dar es Salaam">Full Paid</option>
                                                <option value="Arusha">Partial Paid</option>
                                                <option value="Kilimanjaro">Not Paid</option>
                                         </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Remark</label>
                                        <input type="text" class="form-control" name="remarks" placeholder="Enter Type name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Amount to Pay in TZS</label>
                                        <input type="number" class="form-control" name="amount_to_pay" placeholder="Enter Type name">
                                    </div>
                                </div>
                            </div>
                            <p style="margin-top: 15px;"><b>NOTE: Fields marked with <span id="required-field">*</span> are mandatory</b></p>
                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button type="submit" class="btn btn-success btn-label right ms-auto">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>







@endsection

