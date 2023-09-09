@extends('client-panel.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-dark">Lengkapi Formulir</h1>
        </div>

        <form action="{{ route('lengkapi_formulir') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header text-dark">
                    <strong>Biodata Calon Santri</strong>
                </div>
                <div class="card-body">
                    <div class="form-group row mt-2">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Pendidikan Non-Formal
                            Terakhir</label>
                        <div class="col-sm-4">
                            <select name="pendidikan_nonformal" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option selected disabled>Pilih Pendidikan Terakhir</option>
                                <option value="TPQ">TPQ</option>
                                <option value="MADIN">MADIN</option>
                                <option value="Pesantren">Pesantren</option>
                                <option value="Tidak Ada">Tidak ada</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Nama Lembaga Pendidikan</label>
                        <div class="col-sm-4">
                            <input type="text" name="nama_lembaga" class="form-control form-control-sm"
                                placeholder="Nama Lembaga Pendidikan">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Alamat Lembaga Pendidikan</label>
                        <div class="col-sm-4">
                            <input type="text" name="alamat_lembaga" class="form-control form-control-sm"
                                placeholder="Alamat Lembaga Pendidikan">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Tahun Lulus</label>
                        <div class="col-sm-4">
                            <input type="text" name="tahun_lulus" class="form-control form-control-sm"
                                placeholder="Tahun Lulus">
                        </div>
                    </div>
                    <hr class="mt-3 mb-3" />
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Tanggal, Bulan Tahun Masuk
                            pesantren</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control form-control-sm" name="tanggal_masuk_pesantren"
                                id="tanggal_masuk_pesantren">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Jenis Pendidikan Tambahan</label>
                        <div class="col-sm-4">
                            <select class="form-select form-select-sm" name="pendidikan_tambahan"
                                aria-label=".form-select-sm example">
                                <option selected disabled>Pilih Pendidikan Tambahan</option>
                                <option value="Menghafal Al-Qur'an">Menghafal Al-Qur'an</option>
                                <option value="Abdi Ndalem">Abdi Ndalem</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Pendidikan Formal</label>
                        <div class="col-sm-4">
                            <select class="form-select form-select-sm" name="pendidikan_formal"
                                aria-label=".form-select-sm example">
                                <option selected disabled>Pilih Status Santri</option>
                                <option value="Pelajar SMP">Pelajar SMP</option>
                                <option value="Pelajar SMK">Pelajar SMK</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                                <option value="Tidak Sekolah">Tidak Sekolah</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Kelas Pendidikan Formal</label>
                        <div class="col-sm-4">
                            <select class="form-select form-select-sm" name="kelas_pendidikan_formal"
                                aria-label=".form-select-sm example">
                                <option selected disabled>Pilih Kelas</option>
                                <option value="VII">VII</option>
                                <option value="VIII">VIII</option>
                                <option value="IX">IX</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Pendidikan Diniyyah</label>
                        <div class="col-sm-4">
                            <select class="form-select form-select-sm" name="diniyyah" aria-label=".form-select-sm example">
                                <option selected disabled>Pilih Jenis Diniyyah</option>
                                <option value="ULA">ULA</option>
                                <option value="WUSTHO">WUSTHO</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Kelas Pendidikan Diniyyah</label>
                        <div class="col-sm-4">
                            <select class="form-select form-select-sm" name="kelas_diniyyah"
                                aria-label=".form-select-sm example">
                                <option selected disabled>Pilih Kelas</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                            </select>
                        </div>
                    </div>
                    <hr class="mt-3 mb-3" />
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Nama Kepala Keluarga</label>
                        <div class="col-sm-4">
                            <input type="text" name="nama_kepala_keluarga" class="form-control form-control-sm"
                                placeholder="Nama Kepala Keluarga">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Status Kepala Keluarga</label>
                        <div class="col-sm-4">
                            <select class="form-select form-select-sm" name="status_kepala_keluarga"
                                aria-label=".form-select-sm example">
                                <option selected disabled>Pilih Status</option>
                                <option value="Ayah">Ayah</option>
                                <option value="Ibu">Ibu</option>
                                <option value="Kakak">Kakak</option>
                                <option value="Paman">Paman</option>
                                <option value="Kakek">Kakek</option>
                                <option value="Nenek">Nenek</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-header mt-4 text-dark">
                    <strong>Biodata Ayah</strong>
                </div>
                <div class="card-body">
                    <div class="form-group row mt-4">
                        <label name="nama_ayah" class="col-sm-2 col-form-label col-form-label-sm text-dark">Nama Ayah
                            Kandung</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" placeholder="Nama Ayah Kandung">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Status Ayah Kandung</label>
                        <div class="col-sm-4">
                            <select class="form-select form-select-sm" name="status_ayah"
                                aria-label=".form-select-sm example">
                                <option selected disabled>Pilih Status Ayah</option>
                                <option value="Hidup">Hidup</option>
                                <option value="Meninggal">Meninggal</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">NIK Ayah Kandung</label>
                        <div class="col-sm-4">
                            <input type="number" name="nik_ayah" class="form-control form-control-sm"
                                placeholder="NIK Ayah Kandung">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Tanggal Lahir Ayah
                            Kandung</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control form-control-sm" name="tanggal_lahir_ayah"
                                id="tanggal_lahir_ayah">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Pendidikan Ayah Kandung</label>
                        <div class="col-sm-4">
                            <select name="pendidikan_ayah" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option selected disabled>Pilih Pendidikan Terakhir</option>
                                <option value="SD/MI/Sederajat">SD/MI/Sederajat</option>
                                <option value="SMP/MTs/Sederajat">SMP/MTs/Sederajat</option>
                                <option value="SMA/MA/Sederajat">SMA/MA/Sederajat</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Pekerjaan Ayah Kandung</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" name="pekerjaan_ayah"
                                placeholder="Pekerjaan Ayah Kandung">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Penghasilan Ayah Kandung</label>
                        <div class="col-sm-4">
                            <input type="number" name="penghasilan_ayah" class="form-control form-control-sm"
                                placeholder="Penghasilan Ayah Kandung">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">No. Hp/Telp</label>
                        <div class="col-sm-4">
                            <input type="number" min="0" name="nomor_hp_ayah" class="form-control form-control-sm"
                                placeholder="08xxxxxxxxxx">
                        </div>
                    </div>
                </div>
                <div class="card-header mt-4 text-dark">
                    <strong>Biodata Ibu</strong>
                </div>
                <div class="card-body">
                    <div class="form-group row mt-4">
                        <label name="nama_ibu" class="col-sm-2 col-form-label col-form-label-sm text-dark">Nama Ibu
                            Kandung</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" placeholder="Nama Ibu Kandung">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Status Ibu Kandung</label>
                        <div class="col-sm-4">
                            <select class="form-select form-select-sm" name="status_ibu"
                                aria-label=".form-select-sm example">
                                <option selected disabled>Pilih Status Ibu</option>
                                <option value="Hidup">Hidup</option>
                                <option value="Meninggal">Meninggal</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">NIK Ibu Kandung</label>
                        <div class="col-sm-4">
                            <input type="number" name="nik_ibu" class="form-control form-control-sm"
                                placeholder="NIK Ibu Kandung">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Tanggal Lahir Ibu
                            Kandung</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control form-control-sm" name="tanggal_lahir_ibu"
                                id="tanggal_lahir_ibu">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Pendidikan Ibu Kandung</label>
                        <div class="col-sm-4">
                            <select name="pendidikan_ibu" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option selected disabled>Pilih Pendidikan Terakhir</option>
                                <option value="SD/MI/Sederajat">SD/MI/Sederajat</option>
                                <option value="SMP/MTs/Sederajat">SMP/MTs/Sederajat</option>
                                <option value="SMA/MA/Sederajat">SMA/MA/Sederajat</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Pekerjaan Ibu Kandung</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" name="pekerjaan_ibu"
                                placeholder="Pekerjaan Ibu Kandung">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Penghasilan Ibu Kandung</label>
                        <div class="col-sm-4">
                            <input type="number" name="penghasilan_ibu" class="form-control form-control-sm"
                                placeholder="Penghasilan Ibu Kandung">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">No. Hp/Telp</label>
                        <div class="col-sm-4">
                            <input type="number" min="0" name="nomor_hp_ibu" class="form-control form-control-sm"
                                placeholder="08xxxxxxxxxx">
                        </div>
                    </div>
                </div>
                <div class="card-header mt-4 text-dark">
                    <strong>Biodata Wali</strong>
                </div>
                <div class="card-body">
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Wali Yang Bertanggung
                            Jawab</label>
                        <div class="col-sm-4">
                            <input type="text" name="wali_yang_bertanggungjawab" class="form-control form-control-sm"
                                placeholder="Wali Yang Bertanggung Jawab">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">Nama Wali</label>
                        <div class="col-sm-4">
                            <input type="text" name="nama_wali" class="form-control form-control-sm"
                                placeholder="Nama Wali">
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-sm-2 col-form-label col-form-label-sm text-dark">No. Hp/Telp</label>
                        <div class="col-sm-4">
                            <input type="text" name="nomor_hp_wali" class="form-control form-control-sm"
                                placeholder="+62xxxxxxxxxxx">
                        </div>
                    </div>
                </div>
                {{-- <a href="#" class="btn btn-success btn-lg mt-5">Submit</a> --}}
                <button type="submit" class="btn btn-success btn-lg mt-5">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
    <!-- /.container-fluid -->
@endsection
