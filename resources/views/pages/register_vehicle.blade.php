@extends('welcome')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="card-title">Vehicles List</h3>
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
                    <form id="registration_form" action="{{ route('trucks.create') }}" method="post">
                        @csrf
                        <div class="row">
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
                                        <input type="text" class="form-control" name="name" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Make/Model</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Type name" required>
                                    </div>
                                </div></div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Registration Number</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Engine Number</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Chasis Number</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Type name" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Year of Manufacture</label>
                                        <select name="type_id"  id="type_id" class="form-select">
                                            <option value="" selected>Please Type Name</option>
                                            <option value="petrol">2000</option>
                                            <option value="disel">2001</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="description">Fuel Type</label>
                                <select name="type_id"  id="type_id" class="form-select">
                                    <option value="" selected>Please Type Name</option>
                                    <option value="petrol">Petrol</option>
                                    <option value="disel">Disel</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="description">Vehicle Images</label>
                                <input type="file" class="form-control" name="file" id="avatar" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="description">Kilometers</label>
                                <input type="number" class="form-control" name="name" placeholder="Enter Type name" required>
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

