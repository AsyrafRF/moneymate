@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="hero-title">Selamat Datang di Money<span style="color: #3182ce;">Mate</span></h1>
                <p class="hero-subtitle">Platform Web Interaktif untuk Manajemen Keuangan Harian dan Analisis Keuangan</p>
                <button class="btn btn-lihat">
                    Lihat Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                </button>
            </div>
            <div class="col-lg-6 text-center">
                <div class="position-relative">
                    <!-- Ikon Ilustrasi Keuangan -->
                    <i class="fas fa-chart-line" style="font-size: 4rem; color: #3182ce; position: absolute; top: 20px; left: 20px;"></i>
                    <i class="fas fa-coins" style="font-size: 5rem; color: #2c5282; margin: 20px;"></i>
                    <i class="fas fa-calculator" style="font-size: 3rem; color: #4299e1; position: absolute; top: 10px; right: 50px;"></i>
                    <i class="fas fa-piggy-bank" style="font-size: 4rem; color: #63b3ed; position: absolute; bottom: 30px; left: 40px;"></i>
                    <i class="fas fa-dollar-sign" style="font-size: 6rem; color: #2c5282; position: absolute; bottom: 20px; right: 20px;"></i>
                    <i class="fas fa-chart-bar" style="font-size: 3.5rem; color: #4299e1; position: absolute; top: 60px; right: 100px;"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fitur Unggulan -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Fitur Unggulan MoneyMate</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-chart-pie fa-3x text-primary mb-3"></i>
                        <h5>Analisis Keuangan</h5>
                        <p>Dapatkan insight mendalam tentang pola pengeluaran dan pemasukan Anda</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-mobile-alt fa-3x text-primary mb-3"></i>
                        <h5>Interface Interaktif</h5>
                        <p>Kelola keuangan dengan mudah melalui interface yang user-friendly</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
                        <h5>Keamanan Terjamin</h5>
                        <p>Data keuangan Anda tersimpan aman dengan enkripsi tingkat tinggi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection