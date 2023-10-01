@extends('client-panel.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        {{-- @dd($dataUser[0]->id); --}}
        <form method="POST" action="{{ route('edit_formulir', $dataUser[0]->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-dark">Edit Formulir</h1>
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
                                            <input type="number"
                                                class="form-control form-control-sm @error('nomor_kk') is-invalid @enderror"
                                                id="nomor_kk" name="nomor_kk" placeholder="Nomor Kartu Keluarga"
                                                value="{{ old('nomor_kk', $data->nomor_kk) }}">
                                            @error('nomor_kk')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-2 col-form-label col-form-label-sm">NIK</label>
                                        <div class="col-sm-4">
                                            <input type="number"
                                                class="form-control form-control-sm @error('nik') is-invalid @enderror"
                                                id="nik" name="nik" placeholder="Nomor Induk Kependudukan"
                                                value="{{ old('nik', $data->nik) }}">
                                            @error('nik')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">NISN</label>
                                        <div class="col-sm-4">
                                            <input type="number"
                                                class="form-control form-control-sm @error('nisn') is-invalid @enderror"
                                                id="nisn" name="nisn" placeholder="Nomor Induk Siswa Nasional"
                                                value="{{ old('nisn', $data->nisn) }}">
                                            @error('nisn')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-2 col-form-label col-form-label-sm">Nama Lengkap</label>
                                        <div class="col-sm-6">
                                            <input type="text"
                                                class="form-control form-control-sm @error('nama') is-invalid @enderror"
                                                id="nama" name="nama" placeholder="Nama Lengkap"
                                                value="{{ old('nama', $data->nama) }}">
                                            @error('nama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-2 col-form-label col-form-label-sm">Jenis Kelamin</label>
                                        <div class="col-sm-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                    value="Perempuan"
                                                    {{ old('jenis_kelamin', $data->jenis_kelamin) == 'Perempuan' ? 'checked' : '' }}>
                                                <label class="form-check-label">Perempuan</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                    value="Laki-laki"
                                                    {{ old('jenis_kelamin', $data->jenis_kelamin) == 'Laki-laki' ? 'checked' : '' }}>
                                                <label class="form-check-label">Laki-Laki</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-2 col-form-label col-form-label-sm">Tempat Lahir</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Tempat Lahir" name="tempat_lahir"
                                                value="{{ old('tempat_lahir', $data->tempat_lahir) }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-2 col-form-label col-form-label-sm">Tanggal Lahir</label>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control form-control-sm" name="tanggal_lahir"
                                                value="{{ old('tanggal_lahir', $data->tanggal_lahir) }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-2 col-form-label col-form-label-sm">Umur</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control form-control-sm" name="umur"
                                                value="{{ old('umur', $data->umur) }}" required>
                                        </div>
                                    </div>
                                    <hr class="mt-3 mb-3" />
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-2 col-form-label col-form-label-sm">Anak ke</label>
                                        <div class="col-sm-1">
                                            <input type="number" min="0"
                                                class="form-control form-control-sm @error('anak_ke') is-invalid @enderror"
                                                id="anak_ke" name="anak_ke" placeholder="0"
                                                value="{{ old('anak_ke', $data->anak_ke) }}">
                                            @error('anak_ke')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-2 col-form-label col-form-label-sm">Tinggal
                                            Bersama</label>
                                        <div class="col-sm-4">
                                            <input type="text"
                                                class="form-control form-control-sm @error('tinggal_bersama') is-invalid @enderror"
                                                name="tinggal_bersama" id="tinggal_bersama" placeholder="Tinggal Bersama"
                                                value="{{ old('tinggal_bersama', $data->tinggal_bersama) }}">

                                            @error('tinggal_bersama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <hr class="mt-3 mb-3" />
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label col-form-label-sm">Provinsi</label>
                                        <div class="col-sm-4">
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                name="provinsi" id="provinsi">
                                                <option selected disabled>Pilih Provinsi</option>
                                                @foreach ($prov as $t)
                                                    <option value="{{ $t['nama'] }}" data-value="{{ $t['id'] }}"
                                                        @if (old('provinsi', $data->provinsi) == $t['nama']) {{ 'selected' }} @endif>{{ $t['nama'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-2 col-form-label col-form-label-sm">Kabupaten</label>
                                        <div class="col-sm-4">
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                name="kabupaten" id="kabupaten">
                                                <option selected disabled>Pilih Kabupaten</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-2 col-form-label col-form-label-sm">Kecamatan</label>
                                        <div class="col-sm-4">
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                                name="kecamatan" id="kecamatan">
                                                <option selected disabled>Pilih Kecamatan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-2 col-form-label col-form-label-sm">Jalan</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm" name="alamat"
                                                value="{{ old('alamat', $data->alamat) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-2 col-form-label col-form-label-sm">Kode
                                            Pos</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control form-control-sm" name="kode_pos"
                                                value="{{ old('kode_pos', $data->kode_pos) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mt-4">
                                        <label class="col-sm-2 col-form-label col-form-label-sm">No.
                                            Telp</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control form-control-sm" name="nomor_hp"
                                                value="{{ old('nomor_hp', $data->nomor_hp) }}">
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
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Nama Ayah
                                        Kandung</label>
                                    <div class="col-sm-4">
                                        <input name="nama_ayah" type="text" class="form-control form-control-sm"
                                            placeholder="Nama Ayah Kandung"
                                            value="{{ old('nama_ayah', $data->nama_ayah) }}">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Status Ayah
                                        Kandung</label>
                                    <div class="col-sm-4">
                                        <select name="status_ayah" class="form-select form-select-sm"
                                            aria-label=".form-select-sm example">
                                            <option selected disabled>Pilih Status Ayah</option>
                                            <option value="Hidup" @if (old('status_ayah', $data->status_ayah) == 'Hidup') {{ 'selected' }} @endif>Hidup</option>
                                            <option value="Meninggal" @if (old('status_ayah', $data->status_ayah) == 'Meninggal') {{ 'selected' }} @endif>Meninggal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">NIK
                                        Ayah Kandung</label>
                                    <div class="col-sm-4">
                                        <input name="nik_ayah" type="number" class="form-control form-control-sm"
                                            placeholder="NIK Ayah Kandung"
                                            value="{{ old('nik_ayah', $data->nik_ayah) }}">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Tanggal Lahir
                                        Ayah
                                        Kandung</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control form-control-sm" name="tanggal_lahir_ayah"
                                            id="tanggal_lahir_ayah"
                                            value="{{ old('tanggal_lahir_ayah', $data->tanggal_lahir_ayah) }}">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Pendidikan Ayah
                                        Kandung</label>
                                    <div class="col-sm-4">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            name="pendidikan_ayah">
                                            <option selected disabled>Pilih Pendidikan Terakhir</option>
                                            <option value="SD/MI/Sederajat" @if (old('pendidikan_ayah', $data->pendidikan_ayah) == 'SD/MI/Sederajat') {{ 'selected' }} @endif>SD/MI/Sederajat
                                            </option>
                                            <option value="SMP/MTs/Sederajat" @if (old('pendidikan_ayah', $data->pendidikan_ayah) == 'SMP/MTs/Sederajat') {{ 'selected' }} @endif>SMP/MTs/Sederajat
                                            </option>
                                            <option value="SMA/MA/Sederajat" @if (old('pendidikan_ayah', $data->pendidikan_ayah) == 'SMA/MA/Sederajat') {{ 'selected' }} @endif>SMA/MA/Sederajat
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Pekerjaan Ayah
                                        Kandung</label>
                                    <div class="col-sm-4">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            name="pekerjaan_ayah">
                                            <option selected disabled>Pilih Pekerjaan Ayah Kandung</option>
                                            <option value="Wiraswasta" @if (old('pekerjaan_ayah', $data->pekerjaan_ayah) == 'Wiraswasta') {{ 'selected' }} @endif>Wiraswasta
                                            </option>
                                            <option value="Wirausaha" @if (old('pekerjaan_ayah', $data->pekerjaan_ayah) == 'Wirausaha') {{ 'selected' }} @endif>Wirausaha
                                            </option>
                                            <option value="Petani" @if (old('pekerjaan_ayah', $data->pekerjaan_ayah) == 'Petani') {{ 'selected' }} @endif>Petani
                                            </option>
                                            <option value="Guru" @if (old('pekerjaan_ayah', $data->pekerjaan_ayah) == 'Guru') {{ 'selected' }} @endif>Guru
                                            </option>
                                            <option value="Pedagang" @if (old('pekerjaan_ayah', $data->pekerjaan_ayah) == 'Pedagang') {{ 'selected' }} @endif>Pedagang
                                            </option>
                                            <option value="Dll" @if (old('pekerjaan_ayah', $data->pekerjaan_ayah) == 'Dll') {{ 'selected' }} @endif>Dll
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Penghasilan Ayah Kandung</label>
                                    <div class="col-sm-4">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            name="penghasilan_ayah">
                                            <option selected disabled>Pilih Pekerjaan Ayah Kandung</option>
                                            <option value="< 500.000" @if (old('penghasilan_ayah', $data->penghasilan_ayah) == '< 500.000') {{ 'selected' }} @endif>< 500.000
                                            </option>
                                            <option value="> 500.000" @if (old('penghasilan_ayah', $data->penghasilan_ayah) == '> 500.000') {{ 'selected' }} @endif>> 500.000
                                            </option>
                                            <option value="> 1.000.000" @if (old('penghasilan_ayah', $data->penghasilan_ayah) == '> 1.000.000') {{ 'selected' }} @endif>> 1.000.000
                                            </option>
                                            <option value="> 2.000.000" @if (old('penghasilan_ayah', $data->penghasilan_ayah) == '> 2.000.000') {{ 'selected' }} @endif>> 2.000.000
                                            </option>
                                            <option value="> 5.000.000" @if (old('penghasilan_ayah', $data->penghasilan_ayah) == '> 5.000.000') {{ 'selected' }} @endif>> 5.000.000
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">No.
                                        Hp/Telp</label>
                                    <div class="col-sm-4">
                                        <input type="number" name="nomor_hp_ayah" class="form-control form-control-sm"
                                            placeholder="+62xxxxxxxxxxx"
                                            value="{{ old('nomor_hp_ayah', $data->nomor_hp_ayah) }}">
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
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Nama Ibu
                                        Kandung</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="nama_ibu" class="form-control form-control-sm"
                                            placeholder="Nama ibu Kandung"
                                            value="{{ old('nama_ibu', $data->nama_ibu) }}">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Status ibu
                                        Kandung</label>
                                    <div class="col-sm-4">
                                        <select name="status_ibu" class="form-select form-select-sm"
                                            aria-label=".form-select-sm example">
                                            <option selected disabled>Pilih Status ibu</option>
                                            <option value="Hidup" @if (old('status_ibu', $data->status_ibu) == 'Hidup') {{ 'selected' }} @endif>Hidup</option>
                                            <option value="Meninggal" @if (old('status_ibu', $data->status_ibu) == 'Meninggal') {{ 'selected' }} @endif>Meninggal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">NIK
                                        Ibu Kandung</label>
                                    <div class="col-sm-4">
                                        <input type="number" name="nik_ibu" class="form-control form-control-sm"
                                            placeholder="NIK ibu Kandung" value="{{ old('nik_ibu', $data->nik_ibu) }}">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Tanggal Lahir
                                        Ibu
                                        Kandung</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control form-control-sm" name="tanggal_lahir_ibu"
                                            id="tanggal_lahir_ibu"
                                            value="{{ old('tanggal_lahir_ibu', $data->tanggal_lahir_ibu) }}">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Pendidikan Ibu
                                        Kandung</label>
                                    <div class="col-sm-4">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            name="pendidikan_ibu">
                                            <option selected disabled>Pilih Pendidikan Terakhir</option>
                                            <option value="SD/MI/Sederajat" @if (old('pendidikan_ibu', $data->pendidikan_ibu) == 'SD/MI/Sederajat') {{ 'selected' }} @endif>SD/MI/Sederajat
                                            </option>
                                            <option value="SMP/MTs/Sederajat" @if (old('pendidikan_ibu', $data->pendidikan_ibu) == 'SMP/MTs/Sederajat') {{ 'selected' }} @endif>SMP/MTs/Sederajat
                                            </option>
                                            <option value="SMA/MA/Sederajat" @if (old('pendidikan_ibu', $data->pendidikan_ibu) == 'SMA/MA/Sederajat') {{ 'selected' }} @endif>SMA/MA/Sederajat
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Pekerjaan Ibu Kandung</label>
                                    <div class="col-sm-4">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            name="pekerjaan_ibu">
                                            <option selected disabled>Pilih Pekerjaan Ibu Kandung</option>
                                            <option value="Wiraswasta" @if (old('pekerjaan_ibu', $data->pekerjaan_ibu) == 'Wiraswasta') {{ 'selected' }} @endif>Wiraswasta
                                            </option>
                                            <option value="Wirausaha" @if (old('pekerjaan_ibu', $data->pekerjaan_ibu) == 'Wirausaha') {{ 'selected' }} @endif>Wirausaha
                                            </option>
                                            <option value="Petani" @if (old('pekerjaan_ibu', $data->pekerjaan_ibu) == 'Petani') {{ 'selected' }} @endif>Petani
                                            </option>
                                            <option value="Guru" @if (old('pekerjaan_ibu', $data->pekerjaan_ibu) == 'Guru') {{ 'selected' }} @endif>Guru
                                            </option>
                                            <option value="Pedagang" @if (old('pekerjaan_ibu', $data->pekerjaan_ibu) == 'Pedagang') {{ 'selected' }} @endif>Pedagang
                                            </option>
                                            <option value="Dll" @if (old('pekerjaan_ibu', $data->pekerjaan_ibu) == 'Dll') {{ 'selected' }} @endif>Dll
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Penghasilan Ibu Kandung</label>
                                    <div class="col-sm-4">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            name="penghasilan_ibu">
                                            <option selected disabled>Pilih Penghasilan Ibu Kandung</option>
                                            <option value="< 500.000" @if (old('penghasilan_ibu', $data->penghasilan_ibu) == '< 500.000') {{ 'selected' }} @endif>< 500.000
                                            </option>
                                            <option value="> 500.000" @if (old('penghasilan_ibu', $data->penghasilan_ibu) == '> 500.000') {{ 'selected' }} @endif>> 500.000
                                            </option>
                                            <option value="> 1.000.000" @if (old('penghasilan_ibu', $data->penghasilan_ibu) == '> 1.000.000') {{ 'selected' }} @endif>> 1.000.000
                                            </option>
                                            <option value="> 2.000.000" @if (old('penghasilan_ibu', $data->penghasilan_ibu) == '> 2.000.000') {{ 'selected' }} @endif>> 2.000.000
                                            </option>
                                            <option value="> 5.000.000" @if (old('penghasilan_ibu', $data->penghasilan_ibu) == '> 5.000.000') {{ 'selected' }} @endif>> 5.000.000
                                            </option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">No.
                                        Hp/Telp</label>
                                    <div class="col-sm-4">
                                        <input type="number" name="nomor_hp_ibu" class="form-control form-control-sm"
                                            placeholder="+62xxxxxxxxxxx"
                                            value="{{ old('nomor_hp_ibu', $data->nomor_hp_ibu) }}">
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
                                        Yang Bertanggung Jawab<span style="color: red">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" name="wali_yang_bertanggungjawab"
                                            class="form-control form-control-sm" placeholder="Wali Yang Bertanggung Jawab"
                                            value="{{ old('wali_yang_bertanggungjawab', $data->wali_yang_bertanggungjawab) }}" required>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Nama
                                        Wali<span style="color: red">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" name="nama_wali" class="form-control form-control-sm"
                                            value="{{ old('nama_wali', $data->nama_wali) }}" placeholder="Nama Wali" required>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm text-dark">No.
                                        Hp/Telp<span style="color: red">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="number" name="nomor_hp_wali" class="form-control form-control-sm"
                                            placeholder="+62xxxxxxxxxxx"
                                            value="{{ old('nomor_hp_wali', $data->nomor_hp_wali) }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dataPendidikan" role="tabpanel" aria-labelledby="dataPendidikan-tab">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Mondok</label>
                                    <div class="col-sm-6">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="mondok" value="Ya"
                                                {{ old('mondok', $data->mondok) == 'Ya' ? 'checked' : '' }}>
                                            <label class="form-check-label">Ya</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="mondok" value="Tidak"
                                                {{ old('mondok', $data->mondok) == 'Tidak' ? 'checked' : '' }}>
                                            <label class="form-check-label">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Jenis Pendaftaran</label>
                                    <div class="col-sm-3">
                                        <select class="form-select form-select-sm " aria-label=".form-select-sm example"
                                            name="jenis_pendaftaran">
                                            <option selected disabled>Pilih Jenis Pendaftaran</option>
                                            <option value="Baru" @if (old('jenis_pendaftaran', $data->jenis_pendaftaran) == 'Baru') {{ 'selected' }} @endif>Baru</option>
                                            <option value="Mutasi" @if (old('jenis_pendaftaran', $data->jenis_pendaftaran) == 'Mutasi') {{ 'selected' }} @endif>Mutasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Lembaga</label>
                                    <div class="col-sm-3">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            name="lembaga">
                                            <option selected disabled>Pilih Lembaga</option>
                                            <option value="SMP Walisongo Pacet" @if (old('lembaga', $data->lembaga) == 'SMP Walisongo Pacet') {{ 'selected' }} @endif>SMP Walisongo
                                                Pacet</option>
                                            <option value="SMKS Walisongo Pacet" @if (old('lembaga', $data->lembaga) == 'SMKS Walisongo Pacet') {{ 'selected' }} @endif>SMKS
                                                Walisongo
                                                Pacet</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Jurusan</label>
                                    <div class="col-sm-3">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            name="jurusan">
                                            <option selected disabled>Pilih Jurusan</option>
                                            <option value="Kehutanan" @if (old('jurusan', $data->jurusan) == 'Kehutanan') {{ 'selected' }} @endif>Prodi Kehutanan
                                            </option>
                                            <option value="Perbankan Syariah" @if (old('jurusan', $data->jurusan) == 'Perbankan Syariah') {{ 'selected' }} @endif>Prodi Perbankan
                                                Syariah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">Ukuran
                                        Seragam</label>
                                    <div class="col-sm-3">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                            name="ukuran_seragam">
                                            <option selected disabled>Pilih Ukuran</option>
                                            <option value="XXS" @if (old('ukuran_seragam', $data->ukuran_seragam) == 'XXS') {{ 'selected' }} @endif>XXS</option>
                                            <option value="XS" @if (old('ukuran_seragam', $data->ukuran_seragam) == 'XS') {{ 'selected' }} @endif>XS</option>
                                            <option value="S" @if (old('ukuran_seragam', $data->ukuran_seragam) == 'S') {{ 'selected' }} @endif>S</option>
                                            <option value="M" @if (old('ukuran_seragam', $data->ukuran_seragam) == 'M') {{ 'selected' }} @endif>M</option>
                                            <option value="L" @if (old('ukuran_seragam', $data->ukuran_seragam) == 'L') {{ 'selected' }} @endif>L</option>
                                            <option value="XL" @if (old('ukuran_seragam', $data->ukuran_seragam) == 'XL') {{ 'selected' }} @endif>XL</option>
                                            <option value="XXL" @if (old('ukuran_seragam', $data->ukuran_seragam) == 'XXL') {{ 'selected' }} @endif>XXL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-lg mt-5">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.container-fluid -->
@endsection

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#provinsi').on('change', function() {
            var id_provinsi = $(this).find(':selected').data('value');
            // console.log($(this).val());
            if (id_provinsi) {
                jQuery.ajax({
                    url: 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=' +
                        id_provinsi,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        // console.log(data);
                        jQuery('#kabupaten').empty();
                        jQuery.each(data['kota_kabupaten'], function(key, value) {
                            $('#kabupaten').append(
                                '<option value="' + value.nama +
                                '" data-value="' + value.id + '">' + value
                                .nama +
                                '</option>');
                        });
                    }
                });
            } else {
                $('#kabupaten').empty();
            }
        });
        jQuery('#kabupaten').on('change', function() {
            var id_kota = $(this).find(':selected').data('value');
            // console.log($(this).val());
            if (id_kota) {
                jQuery.ajax({
                    url: 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=' +
                        id_kota,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        jQuery('#kecamatan').empty();
                        jQuery.each(data['kecamatan'], function(key, value) {
                            $('#kecamatan').append(
                                '<option value="' + value.nama +
                                '" data-value="' + value.id + '">' + value
                                .nama +
                                '</option>');
                        });
                    }
                });
            } else {
                $('#kecamatan').empty();
            }
        });
    });
</script>
