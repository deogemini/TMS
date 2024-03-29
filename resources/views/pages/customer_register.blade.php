@extends('welcome')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="card-title">Customer Details Registration</h3>
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
                        <form id="registration_form" action="{{ route('customer.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Full Name</label>
                                        <input type="text" class="form-control" name="full_name"
                                            placeholder="Enter Full name" required>

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
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="phone_number">Phone Number</label>
                                        <input type="phone_number" class="form-control" name="phone_number"
                                            placeholder="Enter phone number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Location Address</label>
                                        <input type="text" class="form-control" name="address"
                                            placeholder="Enter Address">
                                    </div>
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
