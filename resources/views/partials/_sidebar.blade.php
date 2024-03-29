<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="{{ asset('assets/images/faces/face1.jpg')}}" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">Nordin Kamal</span>
          <span class="text-secondary text-small">Project Manager</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('dashboard.index') ? 'active' : '' }}" href="{{ route('dashboard.index')}}">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#vehicle-pages" aria-expanded="false" aria-controls="vehicle-pages">
        <span class="menu-title">Vehicles Management</span>
        <i class="mdi mdi-truck menu-icon"></i>
      </a>

      <div class="collapse" id="vehicle-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('trucks.index') ? 'active' : '' }}" href="{{ route('trucks.index')}}">
                <span class="menu-title">Vehicle Types</span></a>
        </li>
          <li class="nav-item"> <a class="nav-link {{ request()->routeIs('trucks.vehicles.index') ? 'active' : '' }}" href="{{ route('trucks.vehicles.index')}}"> <span class="menu-title"> Vehicles List</span>  </a></li>
          <li class="nav-item"> <a class="nav-link {{ request()->routeIs('trucks.vehicles.register') ? 'active' : '' }}" href="{{ route('trucks.vehicles.register')}}"> <span class="menu-title"> Register Vehicles</span>  </a></li>
          <li class="nav-item"> <a class="nav-link {{ request()->routeIs('trucks.vehicles.advanceDetailsforAll') ? 'active' : '' }}" href="{{ route('trucks.vehicles.advanceDetailsforAll')}}"> <span class="menu-title"> Register Advance Details</span>  </a></li>

        </ul>
      </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#trip-pages" aria-expanded="false" aria-controls="trip-pages">
        <span class="menu-title">Trip Management</span>
        <i class="mdi mdi-highway menu-icon"></i>
      </a>

      <div class="collapse" id="trip-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('trip.index') ? 'active' : '' }}" href="{{ route('trip.index')}}">
                <span class="menu-title">Trip Entry</span></a>
        </li>
          <li class="nav-item"> <a class="nav-link {{ request()->routeIs('trucks.vehicles.index') ? 'active' : '' }}" href="{{ route('trucks.vehicles.index')}}"> <span class="menu-title"> All Trip</span>  </a></li>
          <li class="nav-item"> <a class="nav-link {{ request()->routeIs('trucks.vehicles.register') ? 'active' : '' }}" href="{{ route('trucks.vehicles.register')}}"> <span class="menu-title"> Ledgers</span>  </a></li>

        </ul>
      </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#trip-pages" aria-expanded="false" aria-controls="trip-pages">
        <span class="menu-title">Users Management</span>
        <i class="mdi mdi-account-group menu-icon"></i>
      </a>

      <div class="collapse" id="trip-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('users.driver.add') ? 'active' : '' }}" href="{{ route('users.driver.add')}}">
                <span class="menu-title">Add Drivers</span></a>
        </li>
          <li class="nav-item"> <a class="nav-link {{ request()->routeIs('users.driver.index') ? 'active' : '' }}" href="{{ route('users.driver.index')}}"> <span class="menu-title"> Driver List</span>  </a></li>
          {{-- <li class="nav-item"> <a class="nav-link {{ request()->routeIs('') ? 'active' : '' }}" href="{{ route('')}}"> <span class="menu-title"> Add Vendors</span>  </a></li> --}}
          {{-- <li class="nav-item"> <a class="nav-link {{ request()->routeIs('') ? 'active' : '' }}" href="{{ route('')}}"> <span class="menu-title"> Vendor List</span>  </a></li> --}}

        </ul>
      </div>
    </li>


    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#settings-pages" aria-expanded="false" aria-controls="settings-pages">
        <span class="menu-title">System Settings</span>
        <span class="mdi mdi-cog menu-icon"></span>
    </a>

      <div class="collapse" id="settings-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('trucks.index') ? 'active' : '' }}" href="{{ route('trucks.index')}}">
                <span class="menu-title">Roles Entry </span></a>
        </li>
          <li class="nav-item"> <a class="nav-link {{ request()->routeIs('trucks.vehicles.index') ? 'active' : '' }}" href="{{ route('trucks.vehicles.index')}}"> <span class="menu-title"> Role List</span>  </a></li>
          <li class="nav-item"> <a class="nav-link {{ request()->routeIs('trucks.vehicles.register') ? 'active' : '' }}" href="{{ route('trucks.vehicles.register')}}"> <span class="menu-title"> Licence Classes</span>  </a></li>

        </ul>
      </div>
    </li>
  </ul>
</nav>
