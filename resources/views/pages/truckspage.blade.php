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
              <th> Vehicle Name </th>
              <th> Vehicle Type </th>
              <th> Make/Model</th>
              <th> Registration Number</th>
              <th> Engine Number</th>
              <th> Chasis number</th>
              <th> Year of Manufacture</th>
              <th> Fuel Type</th>
              {{-- <th> Vehicle Image</th> --}}
              <th> Kilometers</th>
              <th> Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cars as $car )
            <tr>
                <td>{{$car->id}}</td>
                <td>{{$car->vehicle_name}}</td>
                <td>{{ $car_types->where('id',$car->type_id)->pluck('name')->first() }}</td>
                <td>{{$car->make_model}}</td>
                <td>{{$car->registration_number}}</td>
                <td>{{$car->engine_number}}</td>
                <td>{{$car->chasis_number}}</td>
                <td>{{$car->year_manufacture}}</td>
                <td>{{$car->fuel_type}}</td>
                {{-- <td>''</td> --}}
                <td>{{$car->kilometres}}</td>
                <td>{{$car->status}}</td>
                <td>
                    <!-- Add button with tooltip -->
                    <a href="{{route('trucks.vehicles.advanceDetails',['id'=>$car->id])}}">
                    <span class="mdi mdi-plus-box" title="Add advance details"></span>
                    </a>

                    <!-- Update button with tooltip -->
                    <a href="/add-advance-details">
                    <span class="mdi mdi-pencil" title="Update vehicle details"></span>
                    </a>
                    <a href="{{route('trucks.vehicles.info',['id'=>$car->id])}}">
                    <span class="mdi mdi-file-document-edit" title="View vehicle details"></span>
                    </a>
                </td>

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



