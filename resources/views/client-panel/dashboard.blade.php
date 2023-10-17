@extends('client-panel.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        @if ($dashboard[0]->status_pendaftaran == 'proses')
            <!-- Jika masih proses Konfirmasi -->
            <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header text-center py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Informasi Pendaftaran</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                src="{{ asset('assets/img/a.jpg') }}" alt="...">
                        </div>
                        <p class="text-center">Silahkan transfer ke nomor rekening berikut untuk mencetak bukti pendaftaran: <br>
                        <strong>{{ $home->nama_rekening }} <br>{{ $home->no_rekening }}</strong> 
                        </p>
                    </div>
                </div>
            </div>
        @elseif($dashboard[0]->status_pendaftaran == 'lulus')
            <!-- Jika dinyatakan lolos pendaftaran -->
            <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header text-center py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Informasi Pendaftaran</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                src="{{ asset('adminPage/img/success.svg') }}" alt="...">
                        </div>
                        <p class="text-center">Selamat <strong>{{ Auth::user()->formulir->nama }}</strong>
                            Dinyatakan <span class="text-success">Lulus</span> Sebagai Calon Santri Baru <strong>PPS
                                Fatchul
                                Ulum Pacet</strong> <br>Silahkan Cetak Bukti Pendaftaran Berikut.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('cetak') }}" class="btn btn-success"><i
                                class="fas fa-download fa-sm text-white-50 mr-2"></i>Cetak Bukti
                            Pendaftaran</a>
                    </div>
                </div>
            </div>
        @else
            <!-- Jika dinyatakan tidak lolos pendaftaran -->
            <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header text-center py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Informasi Pendaftaran</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                src="{{ asset('adminPage/img/fail.svg') }}" alt="...">
                        </div>
                        <p class="text-center">Mohon Maaf, <strong>{{ Auth::user()->formulir->nama }}</strong>
                            Dinyatakan
                            <span class="text-danger">Tidak Lulus</span> Sebagai Calon Santri Baru <strong>PPS
                                Fatchul Ulum Pacet</strong> <br>Silahkan Melakukan Pendaftaran Kembali.
                        </p>
                    </div>
                    {{-- <div class="card-footer text-center">
                    <a href="" class="btn btn-success"><i
                        class="fas fa-download fa-sm text-white-50 mr-2"></i>Cetak Bukti Pendaftaran</a>
                </div> --}}
                </div>
            </div>
        @endif
    </div>
    <!-- /.container-fluid -->
@endsection
