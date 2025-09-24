<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - MoneyMate</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <!-- atau kalau pakai .ico -->
    <!-- <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"> -->

    <!-- Stylesheets -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar sticky-top">
        <div class="container">
            <!-- Logo & Brand -->
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/moneymate.png') }}" alt="Logo" class="logo me-2">
                <!-- <span class="brand-text">
                    <span class="brand-dark">Money</span><span class="brand-light">Mate</span>
                </span> -->
            </a>

            <!-- Hamburger -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-3"> <!-- ganti mx-auto jadi ms-3 -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}"
                            href="{{ route('beranda') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}"
                            href="{{ route('tentang') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('informasi') ? 'active' : '' }}"
                            href="{{ route('informasi') }}">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}"
                            href="{{ route('kontak') }}">Kontak</a>
                    </li>
                </ul>

                <!-- tombol auth tetap di kanan -->
                <div class="d-flex ms-auto">
                    <a href="#" class="btn-auth btn-outline">Masuk</a>
                    <a href="#" class="btn-auth btn-filled ms-2">Daftar Akun</a>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer-custom text-white pt-5">
        <div class="container">
            <div class="row">
                <!-- Kolom 1 -->
                <div class="col-md-3 mb-4">
                    <h5 class="footer-title">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Kontak Kami</a></li>
                        <li><a href="#">Pusat Bantuan</a></li>
                        <li><a href="#">Coba Gratis</a></li>
                    </ul>
                    <div class="footer-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <p class="footer-desc">Akses cepat ke fitur utama MoneyMate.</p>
                </div>

                <!-- Kolom 2 -->
                <div class="col-md-3 mb-4">
                    <h5 class="footer-title">Perusahaan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                    <div class="footer-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <p class="footer-desc">Kenali lebih dekat perjalanan dan tim kami.</p>
                </div>

                <!-- Kolom 3 -->
                <div class="col-md-3 mb-4">
                    <h5 class="footer-title">Legal</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">EULA</a></li>
                    </ul>
                    <div class="footer-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <p class="footer-desc">Transparansi untuk keamanan & kenyamanan Anda.</p>
                </div>

                <!-- Kolom Kontak -->
                <div class="col-md-3 mb-4">
                    <h5 class="footer-title d-flex align-items-center">
                        <img src="{{ asset('images/moneymate.png') }}" alt="MoneyMate Logo" class="footer-logo me-2">
                        MoneyMate
                    </h5>
                    <p class="small">
                        Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota<br>
                        Batam, Kepulauan Riau - Indonesia<br>
                        Telp: +62 778 469860<br>
                        Email: support@moneymate.id
                    </p>
                    <div class="social-icons mt-2">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <hr class="footer-line">

            <!-- Bawah -->
            <div class="text-center small mt-3">
                <p>&copy; 2025 <strong>MoneyMate</strong>. Kelola keuangan & anggaran pribadi Anda.</p>
                <p>Didukung oleh <span class="text-accent">Polibatam</span> & <span
                        class="text-accent">PBL-TRPL517A</span></p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>

</html>