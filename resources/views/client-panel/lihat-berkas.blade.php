@extends('client-panel.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-dark">Lihat Berkas</h1>
            <a href="edit-berkas" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-edit fa-sm text-white-50"></i> Lengkapi Berkas</a>
        </div>
        @foreach ($berkas as $data)
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 card border-success mb-3 text-center">
                        <div style="max-height:250px;overflow:hidden">
                            @if ($data->akta_kelahiran != null)
                                <img src="{{ asset('storage/' . $data->akta_kelahiran) }}" class="card-img-top"
                                    alt="Akta Kelahiran">
                            @else
                                <img src="{{ asset('assets/img/null.png') }}" class="card-img-top" alt="Ijazah Terakhir">
                            @endif
                        </div>
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold">Akta Kelahiran</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card border-success mb-3 text-center">
                        <div style="max-height:250px;overflow:hidden">
                            @if ($data->kartu_keluarga != null)
                                <img src="{{ asset('storage/' . $data->kartu_keluarga) }}" class="card-img-top"
                                    alt="Kartu Keluarga (KK)">
                            @else
                                <img src="{{ asset('assets/img/null.png') }}" class="card-img-top"
                                    alt="Ijazah Terakhir">
                            @endif
                        </div>
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold">Kartu Keluarga (KK)</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card border-success mb-3 text-center">
                        <div style="max-height:250px;overflow:hidden">
                            @if ($data->ijazah)
                                <img src="{{ asset('storage/' . $data->ijazah) }}" class="card-img-top"
                                    alt="Ijazah Terakhir">
                            @else
                                <img src="{{ asset('assets/img/null.png') }}" class="card-img-top"
                                    alt="Ijazah Terakhir">
                            @endif
                        </div>
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold">Ijazah Terakhir</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card border-success mb-3 text-center">
                        <div style="max-height:250px;overflow:hidden">
                            @if ($data->shun)
                                <img src="{{ asset('storage/' . $data->shun) }}" class="card-img-top"
                                    alt="SHUN Terakhir">
                            @else
                                <img src="{{ asset('assets/img/null.png') }}" class="card-img-top"
                                    alt="Ijazah Terakhir">
                            @endif
                        </div>
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold">SHUN Terakhir</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card border-success mb-3 text-center">
                        <div style="max-height:250px;overflow:hidden">
                            @if ($data->nisn)
                                <img src="{{ asset('storage/' . $data->nisn) }}" class="card-img-top"
                                    alt="NISN Terakhir">
                            @else
                                <img src="{{ asset('assets/img/null.png') }}" class="card-img-top"
                                    alt="Ijazah Terakhir">
                            @endif
                        </div>
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold">NISN Terakhir</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card border-success mb-3 text-center">
                        <div style="max-height:250px;overflow:hidden">
                            @if ($data->ktp)
                                <img src="{{ asset('storage/' . $data->ktp) }}" class="card-img-top"
                                    alt="KTP Orang Tua/Wali">
                            @else
                                <img src="{{ asset('assets/img/null.png') }}" class="card-img-top"
                                    alt="Ijazah Terakhir">
                            @endif
                        </div>
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold">KTP Orang Tua/Wali</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card border-success mb-3 text-center">
                        <div style="max-height:250px;overflow:hidden">
                            @if ($data->bukti_pembayaran)
                                <img src="{{ asset('storage/' . $data->bukti_pembayaran) }}" class="card-img-top"
                                    alt="Bukti Pembayaran">
                            @else
                                <img src="{{ asset('assets/img/null.png') }}" class="card-img-top"
                                    alt="Ijazah Terakhir">
                            @endif
                        </div>
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold">Bukti Pembayaran</h6>
                        </div>
                    </div>
                </div>
        @endforeach

    </div>
    <!-- /.container-fluid -->
@endsection
