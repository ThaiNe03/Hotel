<aside class="main-sidebar sidebar-dark-pr{{('backend/im')}}ary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend/images/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Hotel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/images/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item {{ (Request::segment(1) == 'admin' && Request::segment(2) == '') ? 'menu-is-opening menu-open' : ''}}">
            <a href="{{route('homeadmin')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản lý
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('homeadmin')}}" class="nav-link active">
                  <i class="far fa-circle fa-file"></i>
                  <p>Thống kê</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ (Request::segment(1) == 'admin' && Request::segment(2) == 'categories') ? 'menu-is-opening menu-open' : ''}}">
            <a href="{{route('categories.index')}}" class="nav-link active">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('categories.create')}}" class="nav-link active">
                  <i class="fa-solid fa-gears"></i>
                  <p>Create Room</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('categories.index')}}" class="nav-link active">
                  <i class="fa-solid fa-gears"></i>
                  <p>List Rooms</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ (Request::segment(1) == 'admin' && Request::segment(2) == 'details') ? 'menu-is-opening menu-open' : ''}}">
            <a href="{{route('details.index')}}" class="nav-link active">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Rooms (Detail)
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('details.create')}}" class="nav-link active">
                  <i class="fa-solid fa-gears"></i>
                  <p>Create Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('details.index')}}" class="nav-link active">
                  <i class="fa-solid fa-gears"></i>
                  <p>List Rooms (Detail)</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ (Request::segment(1) == 'admin' && Request::segment(2) == 'products') ? 'menu-is-opening menu-open' : ''}}">
            <a href="{{route('products.index')}}" class="nav-link active">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('products.create')}}" class="nav-link active">
                  <i class="fa-solid fa-gears"></i>
                  <p>Create Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('products.index')}}" class="nav-link active">
                  <i class="fa-solid fa-gears"></i>
                  <p>List Products</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>