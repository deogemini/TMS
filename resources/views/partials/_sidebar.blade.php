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
          <span class="font-weight-bold mb-2">Arnold Mashely</span>
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
        <i class="menu-arrow"></i>
      </a>

      <div class="collapse" id="vehicle-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('trucks.index') ? 'active' : '' }}" href="{{ route('trucks.index')}}">
                <span class="menu-title">Vehicle Types</span></a>
        </li>
          <li class="nav-item"> <a class="nav-link {{ request()->routeIs('trucks.vehicles.index') ? 'active' : '' }}" href="{{ route('trucks.vehicles.index')}}"> <span class="menu-title"> Vehicles List</span>  </a></li>
          <li class="nav-item"> <a class="nav-link {{ request()->routeIs('trucks.vehicles.register') ? 'active' : '' }}" href="{{ route('trucks.vehicles.register')}}"> <span class="menu-title"> Register Vehicles</span>  </a></li>

        </ul>
      </div>
    </li>
  </ul>
</nav>
