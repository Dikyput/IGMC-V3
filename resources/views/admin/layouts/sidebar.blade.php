<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" /dashboard">
            <div class="text-white w-auto ">
                <i class="material-icons opacity-10" style="font-size:35px"></i> <span
                    class="ms-1 font-weight-bold text-white" style="font-size:23px">IGMC V3 ADMIN</span>
            </div>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ $title == 'Dashboard' ? 'bg-gradient-primary ' : '' }} "
                    href="/admin/dashboard">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $title == 'Data Player' ? 'bg-gradient-primary ' : '' }}"
                    href="/admin/data-player">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">groups</i>
                    </div>
                    <span class="nav-link-text ms-1">Data Player</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $title == 'Data Crew' ? 'bg-gradient-primary ' : '' }} "
                    href="/admin/data-crew">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">groups</i>
                    </div>
                    <span class="nav-link-text ms-1">Data Crew</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $title == 'Data Penjualan' ? 'bg-gradient-primary ' : '' }}"
                    href="/admin/data-penjualan">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">groups</i>
                    </div>
                    <span class="nav-link-text ms-1">Data Penjualan</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn bg-gradient-warning mt-4 w-100 font-weight-bold"
                onclick="return confirm('Apakah anda yakin akan keluar?')" href="/keluaradmin" type="button"><i
                    class="fa fa-sign-out"></i> Keluar</a>
        </div>
    </div>
</aside>
