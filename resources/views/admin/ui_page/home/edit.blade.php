@extends('admin.layouts.app')
@section('title-content')
    Data UI Home
@endsection
@section('breadcrumbs')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/admin/data-uipagehome">UI Home</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Data UI Home</h6>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-warning shadow-warning  border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Edit Data UI Home</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    @if ($h1->type == 1)
                        <form action="{{ url('admin/data-uipagehome-update/' . $h1->id) }}" class="row g-3 py-1 px-4"
                            method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-6">
                                <label for="id_discord" class="form-label">Text 1</label>
                                <div class="input-group">
                                    <input type="text" name="text1" class="form-control rounded-3" required
                                        value="{{ $h1->text1 }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="id_discord" class="form-label">Text 2</label>
                                <div class="input-group">
                                    <input type="text" name="text2" class="form-control rounded-3" required
                                        value="{{ $h1->text2 }}">
                                </div>
                            </div>
                            <br>
                            <div class="col text-right">
                                <button type="submit" onclick="return confirm('Apakah anda yakin data sudah benar?')"
                                    class="btn btn-primary ml-5 text-sm rounded-3" style="float:right;">
                                    <i class="fa fa-save"></i> Simpan
                                </button>
                                <a href="/admin/data-uipagehome" type="button" class="btn btn-danger text-sm rounded-3"
                                    style="float: right; margin-right:10px"><i class="fa fa-arrow-left"></i> Kembali</a>
                            </div>
                        </form>
                    @elseif ($h1->type == 2)
                        <form action="{{ url('admin/data-uipagehome-update/' . $h1->id) }}" class="row g-3 py-1 px-4"
                            method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-6">
                                <label for="id_discord" class="form-label">Text 1</label>
                                <div class="input-group">
                                    <input type="text" name="text1" class="form-control rounded-3" required
                                        value="{{ $h1->text1 }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="id_discord" class="form-label">Text 2</label>
                                <div class="input-group">
                                    <input type="text" name="text2" class="form-control rounded-3" required
                                        value="{{ $h1->text2 }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="formFile" class="form-label">Foto 1</label>
                                <input class="form-control rounded-3 text-sm" name="foto1" type="file"
                                    id="file-input-poster" accept="image/*" onchange="showPreviewposter(event);"
                                    value="{{ $h1->foto1 }}" {{ $errors->has('foto1') ? 'autofocus="true"' : '' }}>
                            </div>
                            <br>
                            <div class="col text-right">
                                <button type="submit" onclick="return confirm('Apakah anda yakin data sudah benar?')"
                                    class="btn btn-primary ml-5 text-sm rounded-3" style="float:right;">
                                    <i class="fa fa-save"></i> Simpan
                                </button>
                                <a href="/admin/data-uipagehome" type="button" class="btn btn-danger text-sm rounded-3"
                                    style="float: right; margin-right:10px"><i class="fa fa-arrow-left"></i> Kembali</a>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
