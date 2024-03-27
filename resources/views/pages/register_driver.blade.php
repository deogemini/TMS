@extends('welcome')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="card-title">Driver Details Registration</h3>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('users.driver.index') }}" class="btn btn-primary">
                                    <i class="mdi mdi-chevron-left"></i> <!-- Assuming you want a left chevron icon -->
                                    Go back to List
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="card-body form-steps">
                        <form id="registration_form" action="{{ route('trucks.driver.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">First Name</label>
                                        <input type="text" class="form-control" name="first_name"
                                            placeholder="Enter First name" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Last Name</label>
                                        <input type="text" class="form-control" name="last_name"
                                            placeholder="Enter Last name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Date of Birth</label>
                                        <input type="date" class="form-control" name="date_of_birth" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="phone_number">Phone Number</label>
                                        <input type="phone_number" class="form-control" name="phone_number"
                                            placeholder="Enter phone number" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Location Address</label>
                                        <input type="text" class="form-control" name="address"
                                            placeholder="Enter Address">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Location Region</label>
                                        <select name="region" id="region" class="form-select">
                                            <option value="" selected>Please Region</option>
                                            <option value="Dar es Salaam">Dar es Salaam</option>
                                            <option value="Arusha">Arusha</option>
                                            <option value="Kilimanjaro">Kilimanjaro</option>
                                            <option value="Tanga">Tanga</option>
                                            <option value="Dodoma">Dodoma</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Location Counry</label>
                                        <select name="country" id="country" class="form-select">
                                            <option value="" selected>Please Country</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="DRCongo">DRC CONGO</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Zambia">Zambia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">License Number</label>
                                        <input type="text" class="form-control" name="license_number"
                                            placeholder="Enter License Number" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="description">License Class</label>
                                    <select name="license_class" id="license_class" class="form-select">
                                        <option value="" selected>Please Select Class</option>
                                        <option value="A">A</option>
                                        <option value="C">C</option>
                                        <option value="B">B</option>
                                    </select>
                                </div>
                            </div>


                            <p style="margin-top: 15px;"><b>NOTE: Fields marked with <span id="required-field">*</span>
                                    are
                                    mandatory</b></p>
                            <div class="d-flex align-items-start gap-3 mt-4">
                                <button type="submit" class="btn btn-success btn-label right ms-auto">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
