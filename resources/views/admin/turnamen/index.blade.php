@extends('admin.layouts.app')
@section('title-content')
    Data Turnamen
@endsection
@section('breadcrumbs')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/admin/data-turnamen">Crew</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data Turnamen</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Data Turnamen</h6>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-warning shadow-warning  border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Data Turnamen</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive pb-2 px-3">
                        <a href="data-turnamen-add" type="submit" id="btntambah"
                            class="btn btn-primary font-weight-bold text-xs">
                            <i class="material-icons opacity-10">add</i>
                            Tambah
                        </a>
                        <table id="example" class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        No</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Status</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Event</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Jadwal</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Pukul</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Foto</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jadwal as $j)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $j->status }}</td>
                                        <td class="text-center">{{ $j->name_event }}</td>
                                        <td class="text-center">{{ $j->jadwal }}</td>
                                        <td class="text-center">{{ $j->pukul }}</td>
                                        <td class=" text-center"><img
                                                src=" {{ asset('assets') }}/tournamen/{{ $j->foto }}"
                                                id="file-preview-poster" alt="{{ $j->name }}" width="20%"></td>
                                        <td class="text-center">
                                            <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#detail-modal{{ $j->id }}"
                                                class="btn btn-info font-weight-bold btn--edit text-sm rounded-circle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Detail">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <a href="{{ url('admin/data-turnamen/' . $j->id . '/edit') }}"
                                                class="btn btn-warning font-weight-bold text-sm rounded-circle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ url('admin/data-turnamen/' . $j->id . '/delete') }}"
                                                onclick="return confirm('Anda yakin akan menghapus data ini?')"
                                                class="btn btn-danger font-weight-bold text-sm rounded-circle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    {{-- modal detail --}}
                                    <div class="modal fade" id="detail-modal{{ $j->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog  modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary">
                                                    <h5 class="modal-title text-white" id="exampleModalLabel">Detail
                                                        Tournamen
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="foto">
                                                                <img src=" {{ asset('assets') }}/tournamen/{{ $j->foto }}"
                                                                    alt="{{ $j->foto }}" width="100%"
                                                                    height="auto">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <ul class="list-group">
                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <span class="float-start fw-bold">Status</span>
                                                                            <div class="float-end">:</div>
                                                                        </div>
                                                                        <div class="col-md-7">{{ $j->status }}</div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <span class="float-start fw-bold">Event</span>
                                                                            <div class="float-end">:</div>
                                                                        </div>
                                                                        <div class="col-md-7">{{ $j->name_event }}</div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <span class="float-start fw-bold">Jadwal</span>
                                                                            <div class="float-end">:</div>
                                                                        </div>
                                                                        <div class="col-md-7">{{ $j->jadwal }}</div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <span class="float-start fw-bold">Pukul</span>
                                                                            <div class="float-end">:</div>
                                                                        </div>
                                                                        <div class="col-md-7">{{ $j->pukul }}</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
