@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="hero-title">Selamat Datang di Money<span style="color: #3182ce;">Mate</span></h1>
                <p class="hero-subtitle">Platform Web Interaktif untuk Manajemen Keuangan Harian dan Analisis Keuangan</p>
                <button class="btn btn-lihat" onclick="scrollToFeatures()">
                    Lihat Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                </button>
            </div>
            <div class="col-lg-6 text-center" data-aos="fade-left">
                <div class="position-relative" style="height: 400px;">
                    <!-- Ikon Ilustrasi Keuangan dengan Animasi -->
                    <i class="fas fa-chart-line floating-icon" style="font-size: 4rem; color: #3182ce; position: absolute; top: 20px; left: 20px;"></i>
                    <i class="fas fa-coins floating-icon" style="font-size: 5rem; color: #2c5282; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                    <i class="fas fa-calculator floating-icon" style="font-size: 3rem; color: #4299e1; position: absolute; top: 10px; right: 50px;"></i>
                    <i class="fas fa-piggy-bank floating-icon" style="font-size: 4rem; color: #63b3ed; position: absolute; bottom: 80px; left: 40px;"></i>
                    <i class="fas fa-dollar-sign floating-icon" style="font-size: 6rem; color: #2c5282; position: absolute; bottom: 20px; right: 20px;"></i>
                    <i class="fas fa-chart-bar floating-icon" style="font-size: 3.5rem; color: #4299e1; position: absolute; top: 100px; right: 100px;"></i>

                    <!-- Ikon Financial.png dengan animasi -->
                    <img src="{{ asset('images/financial.png') }}" 
                        alt="Financial Illustration" 
                        class="floating-icon position-absolute"
                        style="width: 120px; upper: 10px; left: 30%; transform: translateX(-50%);">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fitur Unggulan -->
<section id="features" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Fitur Unggulan MoneyMate</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-chart-pie fa-3x text-primary mb-3"></i>
                        <h5>Analisis Keuangan</h5>
                        <p>Dapatkan insight mendalam tentang pola pengeluaran dan pemasukan Anda dengan grafik interaktif</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-mobile-alt fa-3x text-primary mb-3"></i>
                        <h5>Interface Interaktif</h5>
                        <p>Kelola keuangan dengan mudah melalui interface yang user-friendly dan responsive</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                        <h5>Keamanan Terjamin</h5>
                        <p>Data keuangan Anda tersimpan aman dengan enkripsi tingkat tinggi dan backup otomatis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistik -->
<section class="py-5" style="background: linear-gradient(135deg, #2c5282 0%, #3182ce 100%);">
    <div class="container">
        <div class="row text-center text-white">
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="counter">
                    <i class="fas fa-users fa-3x mb-3"></i>
                    <h3 class="fw-bold">0</h3>
                    <p>Pengguna Aktif</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="counter">
                    <i class="fas fa-chart-line fa-3x mb-3"></i>
                    <h3 class="fw-bold">0</h3>
                    <p>Transaksi Tercatat</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="counter">
                    <i class="fas fa-star fa-3x mb-3"></i>
                    <h3 class="fw-bold">0/5</h3>
                    <p>Rating Pengguna</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="counter">
                    <i class="fas fa-clock fa-3x mb-3"></i>
                    <h3 class="fw-bold">24/7</h3>
                    <p>Dukungan Pelanggan</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <div data-aos="fade-up">
            <h2 class="mb-4">Siap Mengelola Keuangan Anda dengan Lebih Baik?</h2>
            <p class="lead mb-4">Bergabunglah dengan ribuan pengguna yang sudah merasakan manfaat MoneyMate</p>
            <button class="btn btn-primary btn-lg me-3">Daftar Sekarang</button>
            <button class="btn btn-outline-primary btn-lg">Pelajari Lebih Lanjut</button>
        </div>
    </div>
</section>

<script>
function scrollToFeatures() {
    document.getElementById('features').scrollIntoView({ 
        behavior: 'smooth' 
    });
}
</script>
@endsection