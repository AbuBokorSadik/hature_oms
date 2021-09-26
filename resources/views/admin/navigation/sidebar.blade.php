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
      $imgpath = auth()->user()->avater ? '/storage/' . auth()->user()->avater : 'img/dummy-user.png';
      @endphp
      <div class="image">
        <img src="{{ asset($imgpath) }}" style="height: 45px; width: 45px;" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
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

        <!-- manage merchant -->
        <li class="nav-header">MANAGE MERCHANT</li>
        <li class="nav-item">
          <a href="{{ route('merchants.index') }}" class="nav-link">
            <i class="fas fa-user-tie"></i>
            <p>Merchant List</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('merchants.create') }}" class="nav-link">
            <i class="fas fa-user-plus"></i>
            <p>Add Merchant</p>
          </a>
        </li>

        <li class="nav-header">MANAGE AGENT</li>
        <li class="nav-item">
          <a href="{{ route('agents.index') }}" class="nav-link">
            <i class="fas fa-people-carry"></i>
            <p>Agent List</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('agents.create') }}" class="nav-link">
            <i class="fas fa-user-plus"></i>
            <p>Add Agent</p>
          </a>
        </li>

        <!-- category -->
        <li class="nav-header"> CATEGORY</li>
        <li class="nav-item">
          <a href="{{ route('categories.index') }}" class="nav-link">
            <i class="fas fa-list-alt"></i>
            <p>Category List</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('categories.create') }}" class="nav-link">
            <i class="fas fa-plus-circle"></i>
            <p>Add Category</p>
          </a>
        </li>

        <!-- product -->
        <li class="nav-header">PRODUCT</li>
        <li class="nav-item">
          <a href="{{ route('products.index') }}" class="nav-link">
            <i class="fas fa-boxes"></i>
            <p>Product List</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('products.create') }}" class="nav-link">
            <i class="fas fa-plus-circle"></i>
            <p>Add Product</p>
          </a>
        </li>

        <!-- order -->
        <li class="nav-header">ORDER</li>
        <li class="nav-item">
          <a href="{{ route('order.index') }}" class="nav-link">
          <i class="fas fa-shopping-cart"></i>
            <p>Order List</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('order.create') }}" class="nav-link">
          <i class="fas fa-cart-plus"></i>
            <p>Add Order</p>
          </a>
        </li>

        <!-- task -->
        <li class="nav-header">TASK</li>
        <li class="nav-item">
          <a href="{{ route('tasks.index') }}" class="nav-link">
          <i class="fas fa-tasks"></i>
            <p>Task List</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>