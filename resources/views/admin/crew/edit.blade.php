@extends('admin.layouts.app')
@section('title-content')
    Data Crew
@endsection
@section('breadcrumbs')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/admin/data-crew">Crew</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Data Crew</h6>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-warning shadow-warning  border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Edit Data Crew</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <form action="{{ url('admin/data-crew-update/' . $crew->id) }}" class="row g-3 py-1 px-4" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="col-md-6">
                            <label for="id_discord" class="form-label">Name</label>
                            <div class="input-group">
                                <input type="text" name="name" class="form-control rounded-3" required
                                    value="{{ $crew->name }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="roles" class="form-label">Roles</label>
                            <div class="input-group">
                                <input type="text" name="roles" class="form-control rounded-3" required
                                    value="{{ $crew->roles }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="formFile" class="form-label">Foto</label>
                            <input class="form-control rounded-3 text-sm" name="foto" type="file"
                                id="file-input-poster" accept="image/*" onchange="showPreviewposter(event);"
                                value="{{ $crew->foto }}" {{ $errors->has('foto') ? 'autofocus="true"' : '' }}>
                            <img src=" {{ asset('assets') }}/crew/{{ $crew->foto }}" id="file-preview-poster"
                                alt="..." class="img-thumbnail mt-2" width="50%">
                        </div>
                        <br>
                        <div class="col text-right">
                            <button type="submit" onclick="return confirm('Apakah anda yakin data sudah benar?')"
                                class="btn btn-primary ml-5 text-sm rounded-3" style="float:right;">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                            <a href="/admin/data-crew" type="button" class="btn btn-danger text-sm rounded-3"
                                style="float: right; margin-right:10px"><i class="fa fa-arrow-left"></i> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
