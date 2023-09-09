@extends('client-panel.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-dark">Pengaturan Akun</h1>
        </div>
        {{-- @dd($data->id) --}}
        <form action="{{ route('edit-pengaturan-user', $user->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="card">
                <div class="card-header text-dark">
                    <strong>Silahkan Ubah Informasi Akun Anda.</strong>
                </div>
                <div class="card-body">
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Email</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm"
                                value="{{ old('email', $user->email) }}">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Password Lama</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control form-control-sm" name="password"
                                placeholder="Masukkan Password Lama">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Password Baru</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control form-control-sm" name="password_baru"
                                placeholder="Masukkan Password Baru">
                        </div>
                    </div>
                    {{-- <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">No.
                            Telp</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" placeholder="08xxxxxxxxx">
                        </div>
                    </div> --}}

                </div>
                <button type="submit" class="btn btn-success btn-lg mt-3">
                    Daftar
                </button>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->
@endsection
