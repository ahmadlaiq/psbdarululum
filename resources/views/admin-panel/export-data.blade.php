@extends('admin-panel.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Export Data</h1>
        </div>

        <!-- Jika dinyatakan lolos pendaftaran -->
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header text-center py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Silahkan Export Data Berikut</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="{{ asset('adminPage/img/undraw_posting_photo.svg') }}" alt="...">
                    </div>
                    {{-- <p class="text-center">Selamat <strong>{{ Auth::user()->formulir->nama }}</strong> Dinyatakan <span
                            class="text-success">Lulus</span> Sebagai Calon Santri Baru <strong>Pondok Pesantren Fatchul
                            Ulum Pacet</strong> <br>Silahkan Cetak Bukti Pendaftaran Berikut.</p> --}}
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('formulirexport') }}" class="btn btn-lg btn-success"><i class="fas fa-upload text-white-50 mr-2"></i>Export Data
                        Formulir</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
