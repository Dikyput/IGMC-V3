@extends('admin.layouts.main')

<div class="min-height-300 bg-primary position-absolute w-100"></div>

@section('container')
    <!-- Card Menu -->
    <div class="container-fluid py-4">
        <div class="row">

            <!-- Data User -->
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a class="text-sm mb-0 text-uppercase font-weight-bold" style="color: inherit;"
                                        href="{{ url('/data_user') }}">Data User</a>
                                    <h5 class="font-weight-bolder">
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <a href="{{ url('/data_user') }}"><i class="fas fa-users text-lg opacity-10"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Karyawan -->
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a class="text-sm mb-0 text-uppercase font-weight-bold" style="color: inherit;"
                                        href="{{ url('/data_karyawan') }}">Data Karyawan</a>
                                    <h5 class="font-weight-bolder">
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <a href="{{ url('/data_karyawan') }}"><i class="fas fa-id-badge text-lg opacity-10"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Produk -->
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a class="text-sm mb-0 text-uppercase font-weight-bold" style="color: inherit;"
                                        href="{{ url('/data_produk') }}">Data Produk</a>
                                    <h5 class="font-weight-bolder">
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                                    <a href="{{ url('/data_produk') }}"><i class="fas fa-toolbox text-lg opacity-10"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delivery Service Online -->
            <div class="col-xl-3 col-sm-5">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a class="text-sm mb-0 text-uppercase font-weight-bold" style="color: inherit;"
                                        href="{{ url('/delivery') }}">Delivery Service</a>
                                    <h5 class="">
                                        <span class="font-weight-bolder">
                                        </span>
                                        <small class="wont-weight-normal"
                                            style="font-size: 12px;">{{ '(' . date('M') . ', ' . date('Y') . ')' }}</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <a href="{{ url('/delivery') }}"><i class="fas fa-tools text-lg opacity-10"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pesanan Diterima -->
            <div class="col-xl-3 col-sm-5">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a class="text-sm mb-0 text-uppercase font-weight-bold" style="color: inherit;"
                                        href="{{ url('/orders') }}">Pesanan Diterima</a>
                                    <h5 class="">
                                        <span class="font-weight-bolder">
                                        </span>
                                        <small class="wont-weight-normal"
                                            style="font-size: 12px;">{{ '(' . date('M') . ', ' . date('Y') . ')' }}</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-info shadow-info text-center rounded-circle">
                                    <a href="{{ url('/delivery') }}"><i class="fas fa-box text-lg opacity-10"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transaksi Service -->
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a class="text-sm mb-0 text-uppercase font-weight-bold" style="color: inherit;"
                                        href="{{ url('/transaksi') }}">Transaksi Service</a>
                                    <h5 class="">
                                        <span class="font-weight-bolder">
                                        </span>
                                        <small class="wont-weight-normal"
                                            style="font-size: 12px;">{{ '(' . date('M') . ', ' . date('Y') . ')' }}</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-dark shadow-dark text-center rounded-circle">
                                    <a href="{{ url('/transaksi') }}"><i class="fas fa-user-cog text-lg opacity-10"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Service -->
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a class="text-sm mb-0 text-uppercase font-weight-bold" style="color: inherit;"
                                        href="{{ url('/data_service') }}">Data Service</a>
                                    <h5 class="">
                                        <span class="font-weight-bolder">
                                        </span>
                                        <small class="wont-weight-normal"
                                            style="font-size: 12px;">{{ '(' . date('M') . ', ' . date('Y') . ')' }}</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <a href="{{ url('/data_service') }}"><i class="fas fa-database text-lg opacity-10"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profil -->
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a class="text-sm mb-0 text-uppercase font-weight-bold" style="color: inherit;"
                                        href="{{ url('/profil') }}">Profil</a>
                                    <h5 class="font-weight-bolder">
                                        <small>ADMIN</small>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-secondary shadow-secondary text-center rounded-circle">
                                    <a href="{{ url('/profil') }}"><i class="fas fa-user-circle text-lg opacity-10"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grafik -->
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">Grafik Perkembangan</h6>
                        <p class="text-sm mb-0">
                            <i class="fa fa-arrow-up text-success"></i>
                            <span class="font-weight-bold">4% more</span> in 2021
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
