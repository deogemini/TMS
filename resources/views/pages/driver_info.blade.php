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
                        Driver Details for
                        <span style="font-weight: bold; font-size: 1.2em; color: #333;">
                            {{ $driver->first_name }}
                        </span>
                    </h3>

                                    </div>
                <div class="col-auto">
                        <a href="{{route('users.driver.index')}}" class="btn btn-primary">
                            <i class="mdi mdi-chevron-left"></i> <!-- Assuming you want a left chevron icon -->
                            Go back to List
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
                    <form id="registration_form" action="{{ route('trucks.vehicles.advanceDetailsStore') }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">First Name</label>
                                        <input type="text" class="form-control" name="make_model" value="{{$driver->first_name}}"  disabled>
                                        <input type="text" class="form-control" name="car_id" value="{{$driver->id}}"  hidden>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Last Name</label>
                                        <input type="" class="form-control" name="last_name" value="{{$driver->last_name}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">License Number</label>
                                        <input type="date" class="form-control" name="insurance_start_date" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">License Name</label>
                                        <input type="date" class="form-control" name="insurance_end_date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Latra Number</label>
                                        <input type="text" class="form-control" name="LATRA" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Road Licence Number</label>
                                        <input type="text" class="form-control" name="road_licence" placeholder="Enter Type name" required>
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

