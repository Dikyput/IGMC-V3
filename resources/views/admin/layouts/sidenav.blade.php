<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" {{ url('/dashboard') }} ">
            <img src="{{ asset('assets/img/logo_bengkol.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <!-- <span class="ms-1 font-weight-bold">Bengkel Online</span> -->
        </a>
    </div>

    <hr class="horizontal dark mt-0 mb-0">

    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ $title === 'Dashboard' ? 'active' : '' }}" href="{{ url('/dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-desktop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title === 'Data User' ? 'active' : '' }}" href="{{ url('/data_user') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-users text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data User</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title === 'Data Karyawan' ? 'active' : '' }}" href="{{ url('/data_karyawan') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-id-badge text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Karyawan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title === 'Data Produk' ? 'active' : '' }}" href="{{ url('/data_produk') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-toolbox text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Produk</span>
                </a>
            </li>

            <hr class="horizontal dark mt-0 mb-0">
            <li class="nav-item">
                <a class="nav-link {{ $title === 'Delivery Service Online' ? 'active' : '' }}"
                    href="{{ url('/delivery') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-tools text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Delivery Service Online</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title === 'Manajemen Transaksi' ? 'active' : '' }}"
                    href="{{ url('/orders') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-box text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Manajemen Transaksi</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title === 'Transaksi Service' ? 'active' : '' }}"
                    href="{{ url('/transaksi') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-cog text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Transaksi Service</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title === 'Data Service' ? 'active' : '' }}" href="{{ url('/data_service') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-database text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Service</span>
                </a>
            </li>

            <hr class="horizontal dark mt-0 mb-0">

            <li class="nav-item">
                <a class="nav-link {{ $title === 'Profil' ? 'active' : '' }}" href="{{ url('/profil') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-circle text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profil</span>
                </a>
            </li>
        </ul>
    </div>
    <form action="{{ url('keluaradmin') }}" method="POST" class="mx-2">
        @csrf
        <div class="d-flex align-items-center">
            <button type="submit" class="btn btn-primary btn-sl btn-sl w-100 mt-3 mb-0"> <i
                    class="fas fa-power-off text-white text-sm opacity-10"></i> Logout</button>
        </div>
    </form>
</aside>
