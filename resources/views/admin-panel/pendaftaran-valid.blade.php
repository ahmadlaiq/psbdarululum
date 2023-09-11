@extends('admin-panel.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-dark">Pendaftaran Valid</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Unduh Bukti Pembayaran</a> --}}
        </div>
        <div class="card">
            <div class="card-header text-dark">
                <strong>Silahkan Kelola Pendaftaran Valid</strong>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr class="">
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Pendaftaran</th>
                            <th scope="col">Detail</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formmulir as $f)
                            <tr class="">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $f->nama }}</td>
                                <td>{{ $f->created_at }}</td>
                                <td>
                                    <div class="row">
                                        <a href="#bd-formulir-modal-lg{{ $f->id }}"
                                            class="btn btn-sm btn-primary mr-2" data-toggle="modal"
                                            data-target="">Formulir</a>
                                        <a href="#bd-berkas-modal-lg{{ $f->berkas->id }}"
                                            class="btn btn-sm btn-primary mr-2" data-toggle="modal"
                                            data-target="">Berkas</a>
                                        <a href="#pembayaranModal{{ $f->berkas->id }}" class="btn btn-sm btn-primary mr-2"
                                            data-toggle="modal" data-target="">Pembayaran</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" data-id="{{ $f->id }}" class="btn btn-danger btn-sm swal-confirm">
                                        <form action="{{ route('delete-produk', $f->id) }}" id="delete{{ $f->id }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                        </form>
                                        Hapus
                                    </a>
                                </td>
                            </tr>

                            <!--Pembayaran Modal -->
                            <div class="modal fade" id="pembayaranModal{{ $f->berkas->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="pembayaranModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><strong>Detail
                                                    Pembayaran</strong></h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            @if ($f->berkas->bukti_pembayaran)
                                                <img src="{{ asset('storage/' . $f->berkas->bukti_pembayaran) }}"
                                                    class="card-img-top" alt="Akta Kelahiran">
                                            @else
                                                <img src="{{ asset('assets/img/null.png') }}" class="card-img-top"
                                                    alt="Ijazah Terakhir">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Berkas Modal --}}
                            <div id="bd-berkas-modal-lg{{ $f->berkas->id }}" class="modal fade" tabindex="-1"
                                role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><strong>Detail Berkas</strong>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                                <div class="col">
                                                    <div class="card h-100 card border-success mb-3 text-center">
                                                        @if ($f->berkas->akta_kelahiran)
                                                            <img src="{{ asset('storage/' . $f->berkas->akta_kelahiran) }}"
                                                                class="card-img-top" alt="Akta Kelahiran">
                                                        @else
                                                            <img src="{{ asset('assets/img/null.png') }}"
                                                                class="card-img-top" alt="Ijazah Terakhir">
                                                        @endif
                                                        <div class="card-body">
                                                            <h5 class="card-title">Akta Kelahiran</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card h-100 card border-success mb-3 text-center">
                                                        @if ($f->berkas->kartu_keluarga)
                                                            <img src="{{ asset('storage/' . $f->berkas->kartu_keluarga) }}"
                                                                class="card-img-top" alt="Akta Kelahiran">
                                                        @else
                                                            <img src="{{ asset('assets/img/null.png') }}"
                                                                class="card-img-top" alt="Ijazah Terakhir">
                                                        @endif
                                                        <div class="card-body">
                                                            <h5 class="card-title">Kartu Keluarga (KK)</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card h-100 card border-success mb-3 text-center">
                                                        @if ($f->berkas->ktp)
                                                            <img src="{{ asset('storage/' . $f->berkas->ktp) }}"
                                                                class="card-img-top" alt="Akta Kelahiran">
                                                        @else
                                                            <img src="{{ asset('assets/img/null.png') }}"
                                                                class="card-img-top" alt="Ijazah Terakhir">
                                                        @endif
                                                        <div class="card-body">
                                                            <h5 class="card-title">KTP Orang Tua/Wali</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            {{-- Formulir Modal --}}
                            <div id="bd-formulir-modal-lg{{ $f->id }}" class="modal fade" tabindex="-1"
                                role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><strong>Detail
                                                    Formulir</strong></h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="dataSantri-tab" data-toggle="pill"
                                                        href="#dataSantri" role="tab" aria-controls="dataSantri"
                                                        aria-selected="true">Biodata Santri</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="dataAyah-tab" data-toggle="pill"
                                                        href="#dataAyah" role="tab" aria-controls="dataAyah"
                                                        aria-selected="false">Biodata Ayah</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="dataIbu-tab" data-toggle="pill"
                                                        href="#dataIbu" role="tab" aria-controls="dataIbu"
                                                        aria-selected="false">Biodata Ibu</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="dataWali-tab" data-toggle="pill"
                                                        href="#dataWali" role="tab" aria-controls="dataWali"
                                                        aria-selected="false">Biodata Wali</a>
                                                </li>
                                                
                                            </ul>

                                            <div class="container">
                                                <div class="tab-content" id="pills-tabContent">
                                                    <div class="tab-pane fade show active" id="dataSantri" role="tabpanel"
                                                        aria-labelledby="dataSantri-tab">
                                                        <div class="card">
                                                            <div class="card-header text-dark">
                                                                <strong>Biodata Calon Siswa</strong>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group row mt-2">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm">Nomor
                                                                        KK</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            id="colFormLabelSm" disabled
                                                                            value="{{ $f->nomor_kk }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm">NIK</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            id="colFormLabelSm" disabled
                                                                            value="{{ $f->nik }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">NISN</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            id="colFormLabelSm" disabled
                                                                            value="{{ $f->nisn }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm">Nama
                                                                        Lengkap</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            id="colFormLabelSm" disabled
                                                                            value="{{ $f->nama }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm">Jenis
                                                                        Kelamin</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            id="colFormLabelSm" disabled
                                                                            value="{{ $f->jenis_kelamin }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm">Tempat
                                                                        Lahir</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            id="colFormLabelSm" disabled
                                                                            value="{{ $f->tempat_lahir }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm">Tanggal
                                                                        Lahir</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            id="colFormLabelSm" disabled
                                                                            value="{{ $f->tanggal_lahir }}">
                                                                    </div>
                                                                </div>
                                                                <hr class="mt-3 mb-3" />
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm">Anak
                                                                        ke</label>
                                                                    <div class="col-sm-1">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            id="colFormLabelSm" disabled
                                                                            value="{{ $f->anak_ke }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label for="colFormLabelSm"
                                                                        class="col-sm-2 col-form-label col-form-label-sm">Tinggal
                                                                        Bersama</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            id="colFormLabelSm" disabled
                                                                            value="{{ $f->tinggal_bersama }}">
                                                                    </div>
                                                                </div>
                                                                
                                                                <hr class="mt-3 mb-3" />
                                                                <div class="form-group row">
                                                                    <label for="colFormLabelSm"
                                                                        class="col-sm-2 col-form-label col-form-label-sm">Provinsi</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            id="colFormLabelSm" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label for="colFormLabelSm"
                                                                        class="col-sm-2 col-form-label col-form-label-sm">Kabupaten</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            id="colFormLabelSm" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label for="colFormLabelSm"
                                                                        class="col-sm-2 col-form-label col-form-label-sm">Kecamatan</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            id="colFormLabelSm" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label for="colFormLabelSm"
                                                                        class="col-sm-2 col-form-label col-form-label-sm">Jalan</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            id="colFormLabelSm" disabled
                                                                            value="{{ $f->alamat }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label for="colFormLabelSm"
                                                                        class="col-sm-2 col-form-label col-form-label-sm">Kode
                                                                        Pos</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            id="colFormLabelSm" disabled
                                                                            value="{{ $f->kode_pos }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm">No.
                                                                        Telps</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $f->nomor_hp }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane fade" id="dataAyah" role="tabpanel"
                                                        aria-labelledby="dataAyah-tab">
                                                        <div class="card">
                                                            <div class="card-header mt-4 text-dark">
                                                                <strong>Biodata Ayah</strong>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">Nama
                                                                        Ayah Kandung</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $f->nama_ayah }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">Status
                                                                        Ayah Kandung</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $f->status_ayah }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">NIK
                                                                        Ayah Kandung</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $f->nik_ayah }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">Tanggal
                                                                        Lahir Ayah
                                                                        Kandung</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ date('d-m-Y', strtotime($f->tanggal_lahir_ayah)) }}"
                                                                            disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">Pendidikan
                                                                        Ayah
                                                                        Kandung</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $f->pendidikan_ayah }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">Pekerjaan
                                                                        Ayah
                                                                        Kandung</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $f->pekerjaan_ayah }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">Penghasilan
                                                                        Ayah
                                                                        Kandung</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $f->penghasilan_ayah }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">No.
                                                                        Hp/Telp</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $f->nomor_hp_ayah }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="dataIbu" role="tabpanel"
                                                        aria-labelledby="dataIbu-tab">
                                                        <div class="card">
                                                            <div class="card-header mt-4 text-dark">
                                                                <strong>Biodata Ibu Kandung</strong>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">Nama
                                                                        Ibu Kandung</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $f->nama_ibu }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">Status
                                                                        Ibu Kandung</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $f->status_ibu }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">NIK
                                                                        Ibu
                                                                        Kandung</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $f->nik_ibu }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">Tanggal
                                                                        Lahir Ibu Kandung</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ date('d-m-Y', strtotime($f->tanggal_lahir_ibu)) }}"
                                                                            disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">Pendidikan
                                                                        Ibu
                                                                        Kandung</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $f->pendidikan_ibu }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">Pekerjaan
                                                                        Ibu
                                                                        Kandung</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $f->pekerjaan_ibu }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">Penghasilan
                                                                        Ibu
                                                                        Kandung</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="number"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $f->penghasilan_ibu }}" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mt-4">
                                                                    <label
                                                                        class="col-sm-2 col-form-label col-form-label-sm text-dark">No.
                                                                        Hp/Telp</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            value="{{ $f->nomor_hp_ibu }}" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="dataWali" role="tabpanel"
                                                        aria-labelledby="dataWali-tab">
                                                        <div class="card-header mt-4 text-dark">
                                                            <strong>Biodata Wali</strong>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group row mt-4">
                                                                <label
                                                                    class="col-sm-2 col-form-label col-form-label-sm text-dark">Wali
                                                                    Yang Bertanggung Jawab</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control form-control-sm"
                                                                        value="{{ $f->wali_yang_bertanggungjawab }}"
                                                                        disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mt-4">
                                                                <label
                                                                    class="col-sm-2 col-form-label col-form-label-sm text-dark">Nama
                                                                    Wali</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control form-control-sm"
                                                                        value="{{ $f->nama_wali }}" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mt-4">
                                                                <label
                                                                    class="col-sm-2 col-form-label col-form-label-sm text-dark">No.
                                                                    Hp/Telp</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control form-control-sm"
                                                                        value="{{ $f->nomor_hp_wali }}" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="dataPendidikan" role="tabpanel"
                                                        aria-labelledby="dataPendidikan-tab">
                                                        
                                                        <div class="card-body">
                                                            <div class="form-group row mt-4">
                                                                <label for="colFormLabelSm"
                                                                    class="col-sm-2 col-form-label col-form-label-sm text-dark">Mondok</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control form-control-sm"
                                                                        id="colFormLabelSm" disabled
                                                                        value="{{ $f->mondok }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mt-4">
                                                                <label for="colFormLabelSm"
                                                                    class="col-sm-2 col-form-label col-form-label-sm text-dark">Jenis
                                                                    Pendaftaran</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control form-control-sm"
                                                                        id="colFormLabelSm" disabled
                                                                        value="{{ $f->jenis_pendaftaran }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mt-4">
                                                                <label for="colFormLabelSm"
                                                                    class="col-sm-2 col-form-label col-form-label-sm text-dark">Lembaga</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control form-control-sm"
                                                                        id="colFormLabelSm" disabled
                                                                        value="{{ $f->lembaga }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mt-4">
                                                                <label for="colFormLabelSm"
                                                                    class="col-sm-2 col-form-label col-form-label-sm text-dark">Jurusan</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control form-control-sm"
                                                                        id="colFormLabelSm" disabled
                                                                        value="{{ $f->jurusan }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mt-4">
                                                                <label for="colFormLabelSm"
                                                                    class="col-sm-2 col-form-label col-form-label-sm text-dark">Ukuran
                                                                    Seragam</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" class="form-control form-control-sm"
                                                                        id="colFormLabelSm" disabled
                                                                        value="{{ $f->ukuran_seragam }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
                {{-- Pagination --}}
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

@push('page-scripts')
    <script src="{{ asset('adminPage/vendor/sweetalert/sweetalert.min.js') }}"></script>
@endpush

@push('after-scripts')
    <script>
        $(".swal-confirm").click(function(e) {
            id = e.target.dataset.id;
            swal({
                    title: 'Apakah anda yakin?',
                    text: 'Data yang dihapus tidak dapat dikembalikan!',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal('Data berhasil dihapus!', {
                            icon: 'success',
                        });
                        $(`#delete${id}`).submit();
                    } else {
                        swal('File anda aman!');
                    }
                });
        });
    </script>
@endpush
