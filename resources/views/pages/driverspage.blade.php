@extends('welcome')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="card-title">Drivers List</h3>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('trucks.driver.register') }}" class="btn btn-primary">
                                <i class="mdi mdi-plus  "></i> Add New Drivers
                        </a>
                    </div>
            </div>
            </div>


        <div class="card-body">

        <table class="table table-striped">
          <thead>
            <tr>
              <th>SN</th>
              <th> Full Name</th>
              <th> Years </th>
              <th> Email</th>
              <th> Phone Number</th>
              <th> Home Address</th>
              <th> Region</th>
              <th> Country</th>
              <th> License Number</th>
              <th> License Class</th>
              <th> Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($drivers as $driver )
            <tr>
                <td>{{$driver->id}}</td>
                <td>{{$driver->first_name .' '. $driver->last_name}}</td>
                <td>{{$driver->date_of_birth}}</td>
                <td>{{$driver->email}}</td>
                <td>{{$driver->phone_number}}</td>
                <td>{{$driver->address}}</td>
                <td>{{$driver->country}}</td>
                <td>{{$driver->license_number}}</td>
                <td>{{$driver->license_class}}</td>
                <td>{{$driver->status}}</td>
                <td>

                    <!-- Update button with tooltip -->
                    <a href="/add-advance-details">
                    <span class="mdi mdi-pencil" title="Update Driver details"></span>
                    </a>
                    <a href="{{route('trucks.vehicles.info',['id'=>$car->id])}}">
                    <span class="mdi mdi-file-document-edit" title="View Driver details"></span>
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



