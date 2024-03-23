@extends('welcome')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="card-title">Vehicles Advance Details Registration for fuso</h3>
                </div>
                <div class="col-auto">
                        <a href="{{route('trucks.vehicles.index')}}" class="btn btn-primary">
                            <i class="mdi mdi-chevron-left"></i> <!-- Assuming you want a left chevron icon -->
                            Go back to List
                        </a>
                </div>
            </div>
        </div>


                <div class="card-body form-steps">
                    <form id="registration_form" action="{{ route('trucks.vehicles.store') }}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Type Name</label>
                                        <select name="type_id"  id="type_id" class="form-select">
                                            <option value="" selected>Please Type Name</option>
                                            @foreach ($cars as $item)
                                                <option value="{{ $item->id }}">{{ $item->vehicle_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Insurance Number</label>
                                        <input type="text" class="form-control" name="vehicle_name" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Insurance Start Date</label>
                                        <input type="date" class="form-control" name="make_model" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Insurance End Date</label>
                                        <input type="date" class="form-control" name="registration_number" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Latra Number</label>
                                        <input type="text" class="form-control" name="engine_number" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Road Licence Number</label>
                                        <input type="text" class="form-control" name="chasis_number" placeholder="Enter Type name" required>
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

