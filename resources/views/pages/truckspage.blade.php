@extends('welcome')
@section('content')
<di class="main-panel">
    <div class="content-wrapper">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Vehicles List</h3>

            </div>
      <div class="card-body">
        <div class="row">
            <div class="col"></div>
            <div class="col-auto">
                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" data-bs-target="#showModal" >
                                <i class="ri-add-line align-bottom me-1"></i> Add New Vehicle
                            </button>
            </div>
        </div>

        <table class="table table-striped">
          <thead>
            <tr>
              <th>SN</th>
              <th> Type Name </th>
              <th> Make/Model</th>
              <th> Registration Number</th>
              <th> Engine Number</th>
              <th> Chasis number</th>
              <th> Year of Manufacture</th>
              <th> Fuel Type</th>
              <th> Vehicle Image</th>
              <th> Kilometers</th>
              <th> Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cars as $car )
            <tr>
                <td>{{$car->id}}</td>
                <td>{{$car->name}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
    </div>
</div>



@endsection
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3">
                    <h5 class="modal-title" id="exampleModalLabel">Register Vehicle </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
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
                                <input type="text" class="form-control" name="name" placeholder="Enter Type name" required>
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
