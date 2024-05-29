@extends('admin.layouts.app')
@section('title-content')
    Data Player
@endsection
@section('breadcrumbs')
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/admin/data-player">Player</a></li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Edit</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Data Player</h6>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-warning shadow-warning  border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Edit Data Player</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <form action="{{ url('admin/data-player-update/' . $player->id) }}" class="row g-3 py-1 px-4"
                        method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="col-md-6">
                            <label for="id_discord" class="form-label">ID Discord</label>
                            <div class="input-group">
                                <input type="text" onkeypress="return hanyaAngka(event)" name="id_discord"
                                    class="form-control rounded-3" required value="{{ $player->id_discord }}" disabled>
                            </div>
                            @if ($errors->has('id_discord'))
                                <span class="text-danger">{{ $errors->first('id_discord') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <input type="text" name="username" class="form-control rounded-3" required
                                    value="{{ $player->username }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <input type="email" name="email" class="form-control rounded-3" required
                                    value="{{ $player->email }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="tempatlahir" class="form-label">Saldo</label>
                            <div class="input-group">
                                <input type="text" name="tempatlahir" class="form-control rounded-3" required
                                    value="{{ $player->SaldoUser->nominal }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="nationaly" class="form-label">National</label>
                            <div class="input-group">
                                <input type="text" name="nationaly" class="form-control rounded-3" required
                                    value="{{ $player->nationaly }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="nationaly" class="form-label">Account Status</label>
                            <div class="input-group">
                                @if ($player->activated->activated == 1)
                                    <input type="text" class="form-control rounded-3" disabled value="Acount Enabled">
                                @else
                                    <input type="text" class="form-control rounded-3" disabled value="Acount Disabled">
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="col text-right">
                            <button type="submit" onclick="return confirm('Apakah anda yakin data sudah benar?')"
                                class="btn btn-primary ml-5 text-sm rounded-3" style="float:right;">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                            <a href="/admin/data-player" type="button" class="btn btn-danger text-sm rounded-3"
                                style="float: right; margin-right:10px"><i class="fa fa-arrow-left"></i> Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
