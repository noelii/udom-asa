<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('assets/dist/img/talk.png' )}}" alt="semaLogo" class="brand-image img-circle elevation-3" style="opacity: 1">
      <span class="brand-text font-weight-light">semaApp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('home')}}" class="nav-link">
              <i class="fas fa-home"></i>
              <p>
                Home
                
              </p>
            </a>
            
          </li>
  @if ( Auth::user()->role == 'Admin')
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fas fa-users"></i>
                <p>
                  User Management
                  <i class="fas fa-angle-left right"></i>
                </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('individual.index')}}" class="nav-link">
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-user"></i>
                  <p>Individual Target</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('ruser.index')}}" class="nav-link">
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-user"></i>
                  <p>Registered User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.index')}}" class="nav-link">
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-user"></i>
                  <p>Admin</p>
                </a>
              </li>        
        </ul>
        </li>

        <li class="nav-item ">
            <a href="{{ route('p_issue.index')}}" class="nav-link">
            <i class="fas fa-bug"></i>
              <p>
                Pre-defined Issues
                
              </p>
            </a>
            </li>


  @endif

  <li class="nav-item ">
            <a href="{{ route('change')}}" class="nav-link">
              <i class="fas fa-key"></i>
              <p>
                Change Password
                
              </p>
            </a>
            </li>
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                {{ __('Logout') }}
              </p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
             </form>
          </li> 
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
