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



