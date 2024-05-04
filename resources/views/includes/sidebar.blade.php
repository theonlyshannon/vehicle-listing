<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-shopping-basket"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Vehicle Listing</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @auth
        <li class="nav-item active">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
    @endauth


    <hr class="sidebar-divider my-0">

    {{-- @if ($showDashboard) --}}
    <!-- Divider -->
    {{-- <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="/pelanggan">
            <i class="fas fa-fw fa-users"></i>
            <span>Kategori</span></a>
    </li> --}}

    <!-- Divider-->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard - -->
    <li class="nav-item active">
        <a class="nav-link" href="/kendaraan">
            <i class="fas fa-fw fa-th-list"></i>
            <span>Vehicle</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard - -->
    {{-- <li class="nav-item active">
        <a class="nav-link" href="/transaksi">
            <i class="fas fa-fw fa-credit-card"></i>
            <span>Transaksi</span></a>
    </li>
    @endif --}}

</ul>
