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
                        <a href="{{ route('trucks.vehicles.register') }}" class="btn btn-primary">
                                <i class="mdi mdi-plus  "></i> Add New Vehicle
                        </a>
                    </div>
            </div>
            </div>


        <div class="card-body">

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



