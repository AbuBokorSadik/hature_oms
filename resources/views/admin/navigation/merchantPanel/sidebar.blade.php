<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="{{ asset('img/hature.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Hature</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      @php
      $imgpath = auth()->user()->avatar ? '/storage/' . auth()->user()->avatar : 'img/dummy-user.png';
      @endphp
      <div class="image">
        <img src="{{ asset($imgpath) }}" style="height: 45px; width: 45px;" class="img-circle elevation-2" alt="Avatar not found.">
      </div>
      <div class="info">
        <a href="" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link {{ $dashboard_active ?? '' }}">
            <i class="fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <span class="badge badge-info right"></span>
            </p>
          </a>
        </li>
        <li class="nav-header">MANAGE ORDER</li>
        <li class="nav-item">
          <a href="{{ route('orders.index') }}" class="nav-link {{ $order_list_active ?? '' }}">
          <i class="fas fa-shopping-cart"></i>
            <p>Order List</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('orders.create') }}" class="nav-link {{ $order_create_active ?? '' }}">
          <i class="fas fa-cart-plus"></i>
            <p>Add Order</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>