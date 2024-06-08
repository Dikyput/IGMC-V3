@extends('admin.layouts.app')
@section('title-content')
    Data Player IGMC
@endsection
@section('breadcrumbs')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/admin/data-playerigmc">Data Player</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tambah</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Data Player IGMC</h6>
@endsection
@section('script')
    <script>
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }

        function showPreviewposter(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-preview-poster");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-warning shadow-warning  border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Tambah Data Player IGMC</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <form action="data-playerigmc-insert" class="row g-3 py-1 px-4" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <label class="form-label">Name</label>
                            <div class="input-group">
                                <label class="form-label">Masukkan Name</label>
                                <input type="text" name="name" class="form-control rounded-3" id="name" required
                                    value="{{ old('name') }}" {{ $errors->has('name') ? 'autofocus="true"' : '' }}>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Name Team</label>
                            <div class="input-group">
                                <label class="form-label">Masukkan Name Team</label>
                                <input type="text" name="name_team" class="form-control rounded-3" id="name_team"
                                    required value="{{ old('name_team') }}"
                                    {{ $errors->has('name_team') ? 'autofocus="true"' : '' }}>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="formFile" class="form-label">Logo Team Ukuran 44 x 50</label>
                            <input class="form-control rounded-3 text-sm" name="logo_team" type="file"
                                id="file-input-poster1" accept="image/*" onchange="showPreviewposter1(event);"
                                value="{{ old('logo_team') }}" {{ $errors->has('logo_team') ? 'autofocus="true"' : '' }}>
                        </div>
                        <div class="col-md-6">
                            <label for="formFile" class="form-label">Foto Ukuran 243 x 434</label>
                            <input class="form-control rounded-3 text-sm" name="foto" type="file"
                                id="file-input-poster" accept="image/*" onchange="showPreviewposter(event);"
                                value="{{ old('foto') }}" {{ $errors->has('foto') ? 'autofocus="true"' : '' }}>
                            <img src=" {{ asset('assets') }}/playerigmc/thumbnail.png" id="file-preview-poster"
                                alt="..." class="img-thumbnail mt-2" width="50%">
                        </div>
                        <div class="col text-right">
                            <button type="submit" onclick="return confirm('Apakah anda yakin data sudah benar?')"
                                class="btn btn-primary ml-5 text-sm rounded-3" style="float:right; ">
                                <i class="fa fa-save"></i>
                                Save
                            </button>
                            <a href="data-pegawai" type="button" class="btn btn-danger text-sm rounded-3"
                                style="float: right;margin-right:10px"><i class="fa fa-arrow-left"></i>
                                Back
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- footer --}}
