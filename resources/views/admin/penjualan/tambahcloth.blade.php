@extends('admin.layouts.app')
@section('title-content')
    Data Item Cloth
@endsection
@section('breadcrumbs')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/admin/data-cloth">Cloth</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tambah</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Data Item Cloth</h6>
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
                        <h6 class="text-white text-capitalize ps-3">Tambah Data Item Cloth</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <form action="data-cloth-insert" class="row g-3 py-1 px-4" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-3">
                            <label class="form-label">ID Cloth</label>
                            <div class="input-group">
                                <label class="form-label">Masukkan ID Cloth</label>
                                <input type="text" name="id_cloth" class="form-control rounded-3" id="id_cloth" required
                                    value="{{ old('id_cloth') }}" {{ $errors->has('id_cloth') ? 'autofocus="true"' : '' }}>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Name</label>
                            <div class="input-group">
                                <label class="form-label">Masukkan Name</label>
                                <input type="text" name="name" class="form-control rounded-3" id="name" required
                                    value="{{ old('name') }}" {{ $errors->has('name') ? 'autofocus="true"' : '' }}>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="form-label">Image</label>
                            <div class="input-group">
                                <label class="form-label">Masukkan URL Img</label>
                                <input type="text" name="img" class="form-control rounded-3" id="img" required
                                    value="{{ old('img') }}" {{ $errors->has('img') ? 'autofocus="true"' : '' }}>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label">Texture</label>
                            <div class="input-group">
                                <label class="form-label">Masukkan Nilai Texture</label>
                                <input type="text" name="texture" class="form-control rounded-3" id="texture" required
                                    value="{{ old('texture') }}" {{ $errors->has('texture') ? 'autofocus="true"' : '' }}>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Tipe</label>
                            <div class="input-group">
                                <label class="form-label">Masukkan Nilai Tipe</label>
                                <select class="form-select" id="tipe" name="tipe" required>
                                    <option selected>Choose...</option>
                                    <option value="hat">Hat</option>
                                    <option value="top">Shirt</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Drawable</label>
                            <div class="input-group">
                                <label class="form-label">Masukkan Nilai Drawable</label>
                                <input type="text" name="drawable" class="form-control rounded-3" id="drawable" required
                                    value="{{ old('drawable') }}" {{ $errors->has('drawable') ? 'autofocus="true"' : '' }}>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Tier</label>
                            <div class="input-group">
                                <label class="form-label">Masukkan Nilai Tier</label>
                                <select class="form-select" id="tier" name="tier" required>
                                    <option selected value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
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
