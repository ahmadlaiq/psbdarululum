@extends('client-panel.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-dark">Lihat Formulir</h1>
            <a href="{{ route('halaman_edit_formulir') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-edit fa-sm text-white-50"></i> Lengkapi Formulir</a>
        </div>

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="dataSantri-tab" data-toggle="pill" href="#dataSantri" role="tab"
                    aria-controls="dataSantri" aria-selected="true">Biodata Siswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="dataAyah-tab" data-toggle="pill" href="#dataAyah" role="tab"
                    aria-controls="dataAyah" aria-selected="false">Biodata Ayah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="dataIbu-tab" data-toggle="pill" href="#dataIbu" role="tab"
                    aria-controls="dataIbu" aria-selected="false">Biodata Ibu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="dataWali-tab" data-toggle="pill" href="#dataWali" role="tab"
                    aria-controls="dataWali" aria-selected="false">Biodata Wali</a>
            </li>
            
        </ul>
        <div class="container">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="dataSantri" role="tabpanel" aria-labelledby="dataSantri-tab">
                    <div class="card">
                        <div class="card-header text-dark">
                            <strong>Biodata Calon Santri</strong>
                        </div>
                        <div class="card-body">
                            @foreach ($dataUser as $data)
                                <div class="form-group row mt-2">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Nomor KK</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm"
                                            value="{{ $data->nomor_kk }}" disabled>
                                    </div>
                                </div>

                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">NIK</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm"
                                            value="{{ $data->nik }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">NISN</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control form-control-sm"
                                            value="{{ $data->nisn }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Nama Lengkap</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm" value="{{ $data->nama }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Jenis Kelamin</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $data->jenis_kelamin }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Tempat Lahir</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $data->tempat_lahir }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Tanggal Lahir</label>
                                    <div class="col-sm-4">
                                        {{-- <input type="text" class="form-control form-control-sm"
                                            value="{{ $data->tanggal_lahir }}" disabled> --}}
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ date('d-m-Y', strtotime($data->tanggal_lahir)) }}" disabled>
                                    </div>
                                </div>
                                <hr class="mt-3 mb-3" />
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Anak ke</label>
                                    <div class="col-sm-1">
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $data->anak_ke }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Tinggal
                                        Bersama</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $data->tinggal_bersama }}" disabled>
                                    </div>
                                </div>
                               
                                <hr class="mt-3 mb-3" />
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Provinsi</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $data->provinsi }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Kabupaten</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $data->kabupaten }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Kecamatan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $data->kecamatan }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Jalan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $data->alamat }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Kode
                                        Pos</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $data->kode_pos }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">No.
                                        Telp</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $data->nomor_hp }}" disabled>
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="dataAyah" role="tabpanel" aria-labelledby="dataAyah-tab">
                    <div class="card">
                        <div class="card-header text-dark">
                            <strong>Biodata Ayah Kandung</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Nama
                                    Ayah Kandung</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->nama_ayah }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Status
                                    Ayah Kandung</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->status_ayah }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">NIK
                                    Ayah Kandung</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->nik_ayah }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Tanggal
                                    Lahir Ayah
                                    Kandung</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ date('d-m-Y', strtotime($data->tanggal_lahir_ayah)) }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Pendidikan Ayah
                                    Kandung</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->pendidikan_ayah }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Pekerjaan Ayah
                                    Kandung</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->pekerjaan_ayah }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Penghasilan Ayah
                                    Kandung</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->penghasilan_ayah }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">No.
                                    Hp/Telp</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->nomor_hp_ayah }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="dataIbu" role="tabpanel" aria-labelledby="dataIbu-tab">
                    <div class="card">
                        <div class="card-header text-dark">
                            <strong>Biodata Ibu Kandung</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Nama
                                    Ibu Kandung</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->nama_ibu }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Status
                                    Ibu Kandung</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->status_ibu }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">NIK Ibu
                                    Kandung</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm" value="{{ $data->nik_ibu }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Tanggal
                                    Lahir Ibu Kandung</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ date('d-m-Y', strtotime($data->tanggal_lahir_ibu)) }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Pendidikan Ibu
                                    Kandung</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->pendidikan_ibu }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Pekerjaan Ibu
                                    Kandung</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->pekerjaan_ibu }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Penghasilan Ibu
                                    Kandung</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control form-control-sm"
                                        value="{{ $data->penghasilan_ibu }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">No.
                                    Hp/Telp</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->nomor_hp_ibu }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="dataWali" role="tabpanel" aria-labelledby="dataWali-tab">
                    <div class="card">

                        <div class="card-header text-dark">
                            <strong>Biodata Wali</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Wali
                                    Yang Bertanggung Jawab</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->wali_yang_bertanggungjawab }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Nama
                                    Wali</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->nama_wali }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">No.
                                    Hp/Telp</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->nomor_hp_wali }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="dataPendidikan" role="tabpanel" aria-labelledby="dataPendidikan-tab">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Mondok</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm" value="{{ $data->mondok }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Jenis
                                    Pendaftaran</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->jenis_pendaftaran }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Lembaga</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm" value="{{ $data->lembaga }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Jurusan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm" value="{{ $data->jurusan }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Ukuran
                                    Seragam</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm"
                                        value="{{ $data->ukuran_seragam }}" disabled>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
