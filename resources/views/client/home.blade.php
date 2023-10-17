<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pendaftaran Siswa Baru - MI Darul Ulum Rembang</title>
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
                <h4><a href="/"><img src="assets/img/hero-img.png" alt=""><span>MI Darul Ulum
                            Rembang</span></a></h4>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    @guest
                        <li><a class="nav-link scrollto" href="{{ route('pendaftaran') }}">Daftar</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{-- {{ Auth::user()->email }} --}}
                                Settings
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-black" href="{{ route('user.dashboard') }}">Dashboard</a>
                                <a class="dropdown-item text-black" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>


                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            @if (session('success'))
                <div class="alert alert-success" id="myAlert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Pendaftaran Siswa Baru <span>MI Darul Ulum Rembang</span></h1>
                        <h2>MI Darul Ulum Rembang Rembang Menerima Pendaftaran Peserta Didik
                            Baru<br><strong>Tahun Ajaran 2023-2024</strong></h2>
                        <div class="text-center text-lg-start">
                            <a href="/daftar" class="btn-get-started scrollto">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img mt-3" data-aos="zoom-out" data-aos-delay="300">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" style="margin-bottom: 40px">

                <div class="section-title text-center" data-aos="fade-up">
                    <p><span>Alur</span> Pendaftaran Online</p>
                </div>

                <div class="container">

                    <div class="row">
                        <div class="col">
                            <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                                <div class="timeline-step">
                                    <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                        data-placement="top" title=""
                                        data-content="And here's some amazing content. It's very engaging. Right?"
                                        data-original-title="2003">
                                        <div class="inner-circle"></div>
                                        <p class="h5 mt-3 mb-4">Pembuatan Akun</p>
                                        <p class="text-muted mb-0 mb-lg-0">Mengisi Identitas calon peserta didik
                                            sekaligus pembuatan akun untuk mendapatkan Nomor Registrasi.</p>
                                    </div>
                                </div>
                                <div class="timeline-step">
                                    <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                        data-placement="top" title=""
                                        data-content="And here's some amazing content. It's very engaging. Right?"
                                        data-original-title="2004">
                                        <div class="inner-circle"></div>
                                        <p class="h5 mt-3 mb-4">Melengkapi Data</p>
                                        <p class=" text-muted mb-0 mb-lg-0">Melengkapi data peserta didik, data orang
                                            tua / wali.</p>
                                    </div>
                                </div>
                                <div class="timeline-step">
                                    <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                        data-placement="top" title=""
                                        data-content="And here's some amazing content. It's very engaging. Right?"
                                        data-original-title="2005">
                                        <div class="inner-circle"></div>
                                        <p class="h5 mt-3 mb-4">Mengunggah Berkas</p>
                                        <p class="text-muted mb-0 mb-lg-0">Mengunggah berkas persyaratan dan berkas
                                            pendukung lainnya yang berupa gambar / foto.</p>
                                    </div>
                                </div>
                                <div class="timeline-step">
                                    <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                        data-placement="top" title=""
                                        data-content="And here's some amazing content. It's very engaging. Right?"
                                        data-original-title="2010">
                                        <div class="inner-circle"></div>
                                        <p class="h5 mt-3 mb-4">Pembayaran</p>
                                        <p class="text-muted mb-0 mb-lg-0">Melakukan pembayaran biaya pendaftaran
                                            sesuai
                                            pendidikan yang telah dipilih.</p>
                                    </div>
                                </div>
                                <div class="timeline-step mb-0">
                                    <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                        data-placement="top" title=""
                                        data-content="And here's some amazing content. It's very engaging. Right?"
                                        data-original-title="2020">
                                        <div class="inner-circle"></div>
                                        <p class="h5 mt-3 mb-4">Cetak Pendaftaran</p>
                                        <p class="text-muted mb-0 mb-lg-0">Cetak atau simpan Nomor Registrasi sebagai
                                            bukti pendaftaran dan nantinya diserahkan ke panitia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Details Section ======= -->
        <section id="details" class="details">
            <div class="container">

                <div class="row content">
                    <div class="col-md-6 pt-5" data-aos="fade-right">
                        <img src="assets/img/2.png" class="img-fluid" alt=""
                            style="margin: 10px;
            
            border-top-left-radius: 40px;
            border-top-right-radius: 100px;
            border-bottom-right-radius: 40px;
            border-bottom-left-radius: 100px;">
                    </div>
                    <div class="col-md-6 pt-3" data-aos="fade-up">
                        <div class="section-title" data-aos="fade-up">
                            <p><span>Syarat</span> Pendaftaran Ulang</p>
                        </div>
                        <p>
                            Untuk memenuhi persyaratan daftar ulang, ada beberapa berkas yang harus dibawa :
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> <strong>Photo Copy Akta Kelahiran Peserta Didik</strong>
                            </li>
                            <p style="margin-left: 30px">sebanyak 5 lembar</p>
                            <li><i class="bi bi-check"></i> <strong>Photo Copy Kartu Keluarga (KK</strong>)</li>
                            <p style="margin-left: 30px">sebanyak 5 lembar</p>
                            <li><i class="bi bi-check"></i> <strong>Photo Copy KTP orang tua/wali</strong></li>
                            <p style="margin-left: 30px">sebanyak 5 lembar</p>
                            <li><i class="bi bi-check"></i> <strong>Pas Photo 3x4 Backround Merah</strong></li>
                            <p style="margin-left: 30px">sebanyak 5 lembar</p>

                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End Details Section -->

        <!-- ======= Features Section ======= -->
        <section id="counts" class="counts">
            <div class="container" style="margin-bottom: 40px">

                <div class="section-title text-center" data-aos="fade-up">
                    <p>Pendaftaran <span>Ulang</span></p>
                </div>

                <div class="row aos-init aos-animate" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-thermometer-half"></i>
                            <h4><strong>Checkup / Periksa Kesehatan</strong></h4>
                            <p>Pemeriksaan kesehatan dari calon peserta didik oleh petugas kesehatan Darul Ulum
                                Rembang.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-clipboard-check"></i>
                            <h4><strong>Konfirmasi Nomor Registrasi</strong></h4>
                            <p>Menyerahkan Nomor Registrasi dan bukti pendaftaran online kepada panitia penerimaan.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-bag-check"></i>
                            <h4><strong>Pengambilan Seragam</strong></h4>
                            <p>Pengambilan seragam sesuai dengan pemilihan ukuran seragam yang telah dipilih oleh
                                pendaftar.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Details Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="row content">
                    <div class="col-md-6 pt-3" data-aos="fade-up">
                        <div class="section-title2" data-aos="fade-up">
                            <p>Informasi <span>Pelayanan Pendaftaran</span></p>
                        </div>
                        <div class="faq-list">
                            <ul>
                                <li data-aos="fade-up" class="aos-init aos-animate">
                                    <a data-bs-toggle="collapse" class="collapse"
                                        data-bs-target="#faq-list-1">Pembukaan Pendaftaran & Kantor Layanan:<i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                        <p>Tanggal:</p>
                                        <p><strong>{{ $home->tanggal_pendaftaran }}</strong></p>
                                        <p>Tempat Pendaftaran:</p>
                                        <p><strong>{{ $home->tempat_pendaftaran }}</strong></p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-2"
                                        class="collapsed">Verifikasi Berkas Daftar Ulang:<i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                        <p>Tanggal:</p>
                                        <p><strong>{{ $home->tanggal_daftar_ulang }}</strong></p>
                                        <p>Tempat Pendaftaran:</p>
                                        <p><strong>Kantor Sekolah
                                                7H9C+MVJ Desa Rembang, Sedan, Rembang
                                                59264</strong></p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                                    <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Waktu
                                        Pelayanan:<i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                        <p>Pagi:</p>
                                        <p><strong>08.00 ~ 11.30 WIB</strong></p>
                                        <p>Siang:</p>
                                        <p><strong>13.00 ~ 16.00 WIB</strong></p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 pt-3" data-aos="fade-right">
                        <img src="assets/img/17.jpg" class="img-fluid" alt=""
                            style="margin: 10px;
            
            border-top-left-radius: 100px;
            border-top-right-radius: 40px;
            border-bottom-right-radius: 100px;
            border-bottom-left-radius: 40px;">
                    </div>
                </div>

            </div>
        </section><!-- End Details Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>MI Darul Ulum Rembang Rembang</h3>
                            <p>
                                7H9C+MVJ Desa Rembang, Sedan<br>
                                Kabupaten Rembang, Jawa Tengah 59264<br><br>

                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Call Center</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">0877-0503-2917<br>(Layanan
                                    Pendaftaran
                                    )</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Dapatkan Update & Info Menarik.</h4>
                        <p>Masukkan Alamat Email.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>MI Darul Ulum Rembang</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
                Made by <a href="#">Fikri</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
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

</body>

</html>
