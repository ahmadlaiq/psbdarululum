<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pendaftaran Santri Baru - Fatchul Ulum Pacet</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- =======================================================
  * Template Name: Bootslander - v4.7.1
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h4><a href="/"><img src="assets/img/hero-img.png" alt=""><span>PSB Fatchul Ulum Pacet</span></a></h4>
                <!-- Uncomment below if you prefer to use an image logo -->
            </div>

            {{-- <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/register">Daftar</a></li>
          <li><a class="nav-link scrollto" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar --> --}}

        </div>
    </header><!-- End Header -->

    <main id="main">


        <section id="contact" class="contact" style="margin-top: 70px">
            <div class="container">
                <div class="section-title3 aos-init aos-animate" data-aos="fade-up">
                    <p>Silahkan Masukkan Data Diri</p>
                </div>
                <form action="{{ route('pendaftaran_santri') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <strong>Biodata Calon Santri</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group row mt-2">
                                <label class="col-sm-2 col-form-label col-form-label-sm">Nomor KK<span style="color: red">*</span></label>
                                <div class="col-sm-4">
                                    <input type="number"
                                        class="form-control form-control-sm @error('nomor_kk') is-invalid @enderror"
                                        id="nomor_kk" name="nomor_kk" placeholder="Nomor Kartu Keluarga"
                                        value="{{ old('nomor_kk') }}" required minlength="16">
                                    @error('nomor_kk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm">NIK<span style="color: red">*</span></label>
                                <div class="col-sm-4">
                                    <input type="number"
                                        class="form-control form-control-sm @error('nik') is-invalid @enderror" id="nik"
                                        name="nik" placeholder="Nomor Induk Kependudukan" value="{{ old('nik') }}" required minlength="16">
                                    @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm text-dark">NISN<span style="color: red">*</span></label>
                                <div class="col-sm-4">
                                    <input type="number"
                                        class="form-control form-control-sm @error('nisn') is-invalid @enderror"
                                        id="nisn" name="nisn" placeholder="Nomor Induk Siswa Nasional"
                                        value="{{ old('nisn') }}" required minlength="10">
                                    @error('nisn')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm">Nama Lengkap<span style="color: red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text"
                                        class="form-control form-control-sm @error('nama') is-invalid @enderror"
                                        id="nama" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}" required>
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
                                            {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }} required>
                                        <label class="form-check-label">Perempuan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            value="Laki-laki"
                                            {{ old('jenis_kelamin') == 'Laki-laki' ? 'checked' : '' }}>
                                        <label class="form-check-label">Laki-Laki</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm">Tempat Lahir<span style="color: red">*</span><span style="color: red">*</span></label>
                                <div class="col-sm-4">
                                    <input type="text"
                                        class="form-control form-control-sm @error('tempat_lahir') is-invalid @enderror"
                                        placeholder="Tempat Lahir" name="tempat_lahir"
                                        value="{{ old('tempat_lahir') }}" required>
                                    @error('tempat_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm">Tanggal Lahir<span style="color: red">*</span></label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control form-control-sm" name="tanggal_lahir"
                                        value="{{ old('tanggal_lahir') }}" required>
                                </div>
                            </div>
                            <hr class="mt-3 mb-3" />
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm">Anak ke</label>
                                <div class="col-sm-1">
                                    <input type="number" min="0"
                                        class="form-control form-control-sm @error('anak_ke') is-invalid @enderror"
                                        id="anak_ke" name="anak_ke" placeholder="0" value="{{ old('anak_ke') }}">
                                    @error('anak_ke')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tinggal
                                    Bersama</label>
                                <div class="col-sm-4">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                        name="tinggal_bersama">
                                        <option selected disabled>Tinggal Bersama</option>
                                        <option value="Bersama Orang Tua" @if (old('tinggal_bersama') == 'Bersama Orang Tua') {{ 'selected' }} @endif>Bersama Orang Tua
                                        </option>
                                        <option value="Bersama Saudara" @if (old('tinggal_bersama') == 'Bersama Saudara') {{ 'selected' }} @endif>Bersama Saudara
                                        </option>
                                        <option value="Lainnya" @if (old('tinggal_bersama') == 'Lainnya') {{ 'selected' }} @endif>Lainnya
                                        </option>
                                    </select>

                                    @error('tinggal_bersama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label for="colFormLabelSm"
                                    class="col-sm-2 col-form-label col-form-label-sm text-dark">Pendidikan Formal
                                    Terakhir</label>
                                <div class="col-sm-4">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                        name="pendidikan_terakhir">
                                        <option selected disabled>Pilih Pendidikan Terakhir</option>
                                        <option value="SD/MI/Sederajat" @if (old('pendidikan_terakhir') == 'SD/MI/Sederajat') {{ 'selected' }} @endif>SD/MI/Sederajat
                                        </option>
                                        <option value="SMP/MTs/Sederajat" @if (old('pendidikan_terakhir') == 'SMP/MTs/Sederajat') {{ 'selected' }} @endif>SMP/MTs/Sederajat
                                        </option>
                                        <option value="SMA/MA/Sederajat" @if (old('pendidikan_terakhir') == 'SMA/MA/Sederajat') {{ 'selected' }} @endif>SMA/MA/Sederajat
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <hr class="mt-3 mb-3" />
                            <div class="form-group row">
                                <label for="colFormLabelSm"
                                    class="col-sm-2 col-form-label col-form-label-sm">Provinsi<span style="color: red">*</span></label>
                                <div class="col-sm-4">
                                    <select id="provinsi" name="provinsi" class="form-select form-select-sm" required
                                        aria-label=".form-select-sm example">
                                        <option selected disabled>Pilih Provinsi</option>
                                        @foreach ($prov as $t)
                                            <option value="{{ $t['nama'] }}" data-value="{{ $t['id'] }}">
                                                {{ $t['nama'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label for="colFormLabelSm"
                                    class="col-sm-2 col-form-label col-form-label-sm">Kabupaten<span style="color: red">*</span></label>
                                <div class="col-sm-4">
                                    <select id="kabupaten" name="kabupaten" class="form-select form-select-sm" required
                                        aria-label=".form-select-sm example">
                                        <option selected disabled>Pilih Kabupaten</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label for="colFormLabelSm"
                                    class="col-sm-2 col-form-label col-form-label-sm">Kecamatan<span style="color: red">*</span></label>
                                <div class="col-sm-4">
                                    <select id="kecamatan" name="kecamatan" class="form-select form-select-sm" required
                                        aria-label=".form-select-sm example">
                                        <option selected disabled>Pilih Kecamatan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label for="colFormLabelSm"
                                    class="col-sm-2 col-form-label col-form-label-sm">Jalan<span style="color: red">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text"
                                        class="form-control form-control-sm @error('alamat') is-invalid @enderror"
                                        name="alamat" value="{{ old('alamat') }}"
                                        placeholder="Jalan atau Detail Alamat" required>
                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Kode
                                    Pos</label>
                                <div class="col-sm-4">
                                    <input type="text"
                                        class="form-control form-control-sm @error('kode_pos') is-invalid @enderror"
                                        placeholder="Kode Pos" value="{{ old('kode_pos') }}" name="kode_pos">
                                    @error('kode_pos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-header mt-4">
                            <strong>Rencana Pendidikan</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm">Mondok</label>
                                <div class="col-sm-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="mondok" value="Ya"
                                            {{ old('mondok') == 'Ya' ? 'checked' : '' }}>
                                        <label class="form-check-label">Ya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="mondok" value="Tidak"
                                            {{ old('mondok') == 'Tidak' ? 'checked' : '' }}>
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
                                        <option value="Baru" @if (old('jenis_pendaftaran') == 'Baru') {{ 'selected' }} @endif>Baru</option>
                                        <option value="Mutasi" @if (old('jenis_pendaftaran') == 'Mutasi') {{ 'selected' }} @endif>Mutasi</option>
                                        <option value="Tidak Sekolah / Ngabdi" @if (old('jenis_pendaftaran') == 'Tidak Sekolah / Ngabdi') {{ 'selected' }} @endif>Tidak Sekolah / Ngabdi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm">Lembaga</label>
                                <div class="col-sm-3">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                        name="lembaga">
                                        <option selected disabled>Pilih Lembaga</option>
                                        <option value="SMP Walisongo Pacet" @if (old('lembaga') == 'SMP Walisongo Pacet') {{ 'selected' }} @endif>SMP Walisongo Pacet
                                        </option>
                                        <option value="SMKS Walisongo Pacet" @if (old('lembaga') == 'SMKS Walisongo Pacet') {{ 'selected' }} @endif>SMKS Walisongo
                                            Pacet</option>
                                        <option value="Universitas" @if (old('lembaga') == 'Universitas') {{ 'selected' }} @endif>Universitas
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label class="col-sm-2 col-form-label col-form-label-sm">Jurusan</label>
                                <div class="col-sm-3">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                        name="jurusan">
                                        <option selected disabled>Pilih Jurusan</option>
                                        <option value="Tidak Ada" @if (old('jurusan') == 'Tidak Ada') {{ 'selected' }} @endif>Tidak Ada</option>
                                        <option value="Kehutanan" @if (old('jurusan') == 'Kehutanan') {{ 'selected' }} @endif>Prodi Kehutanan</option>
                                        <option value="Perbankan Syariah" @if (old('jurusan') == 'Perbankan Syariah') {{ 'selected' }} @endif>Prodi Perbankan
                                            Syariah</option>
                                        <option value="S1 Ekonomi Syariah" @if (old('jurusan') == 'S1 Ekonomi Syariah') {{ 'selected' }} @endif>S1 Ekonomi Syariah
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Ukuran
                                    Seragam</label>
                                <div class="col-sm-3">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                        name="ukuran_seragam">
                                        <option selected disabled>Pilih Ukuran</option>
                                        <option @if (old('ukuran_seragam') == 'XXS') {{ 'selected' }} @endif value="XXS">XXS</option>
                                        <option @if (old('ukuran_seragam') == 'XS') {{ 'selected' }} @endif value="XS">XS</option>
                                        <option @if (old('ukuran_seragam') == 'S') {{ 'selected' }} @endif value="S">S</option>
                                        <option @if (old('ukuran_seragam') == 'M') {{ 'selected' }} @endif value="M">M</option>
                                        <option @if (old('ukuran_seragam') == 'L') {{ 'selected' }} @endif value="L">L</option>
                                        <option @if (old('ukuran_seragam') == 'XL') {{ 'selected' }} @endif value="XL">XL</option>
                                        <option @if (old('ukuran_seragam') == 'XXL') {{ 'selected' }} @endif value="XXL">XXL</option>
                                        <option @if (old('ukuran_seragam') == 'XXXL') {{ 'selected' }} @endif value="XXXL">XXXL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-header mt-4">
                                <strong>Akun Pendaftaran</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-group row mt-2">
                                    <label for="colFormLabelSm"
                                        class="col-sm-2 col-form-label col-form-label-sm">Username</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control form-control-sm" id="username"
                                            name="email" placeholder="Masukkkan Username" required>
                                        <!--<p style="font-size: 11px"><i>Email yang tidak valid, maka informasi akun-->
                                        <!--        pendaftaran tidak akan sampai ke Anda.</i></p>-->
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control form-control-sm" id="password"
                                            name="password" placeholder="Masukkkan Password" required minlength="8">
                                    </div>
                                </div>
                                <div class="form-group row mt-4">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">No.
                                        Telp</label>
                                    <div class="col-sm-4">
                                        <input type="number"
                                            class="form-control form-control-sm @error('nomor_hp') is-invalid @enderror"
                                            id="nomor_hp" name="nomor_hp" placeholder="08xxxxxxxxxx"
                                            value="{{ old('nomor_hp') }}">
                                        <input type="text" hidden name="status_pendaftaran">
                                        @error('nomor_hp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <p style="font-size: 11px"><i>No. phone digunakan jika kami perlu
                                                menghubungi
                                                anda terkait pendaftaran yang telah anda kirim.</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg mt-5">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </section>

    </main><!-- End #main -->


    {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>



    {{-- Kota dan Kecamatan --}}
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

    <script>

    </script>
</body>

</html>
