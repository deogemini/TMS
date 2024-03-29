@extends('welcome')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="card-title">Vehicles Basic Details Registration</h3>
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
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Type Name</label>
                                        <select name="type_id"  id="type_id" class="form-select">
                                            <option value="" selected>Please Type Name</option>
                                            @foreach ($cars as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Vehicle Name</label>
                                        <input type="text" class="form-control" name="vehicle_name" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Make/Model</label>
                                        <input type="text" class="form-control" name="make_model" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Registration Number</label>
                                        <input type="text" class="form-control" name="registration_number" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Engine Number</label>
                                        <input type="text" class="form-control" name="engine_number" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Chasis Number</label>
                                        <input type="text" class="form-control" name="chasis_number" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Year of Manufacture</label>
                                        <select name="year_manufacture"   class="form-select">
                                            <option value="" selected>Please Select Year</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                        </select>
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="description">Fuel Type</label>
                                    <select name="fuel_type"  class="form-select">
                                        <option value="" selected>Please Select Type</option>
                                        <option value="petrol">Petrol</option>
                                        <option value="disel">Disel</option>
                                        <option value="hybridpetrol">Hybrid Petrol</option>
                                        <option value="lpg">LPG</option>
                                        <option value="electrical">Electrical</option>
                                        <option value="cng">CNG</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="description">Kilometers</label>
                                    <input type="number" class="form-control" name="kilometres" placeholder="Enter Type name" required>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label" for="description">Vehicle Images</label>
                                    <input type="file" class="form-control" name="avatar" id="avatar">
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

