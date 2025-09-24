@extends('layouts.app')

@section('title', 'Informasi')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="text-center mb-5">Informasi Aplikasi</h1>
            
            <div class="card shadow-sm mb-4">
                <div class="card-body p-5">
                    <h3 class="text-primary mb-4">Apa itu MoneyMate?</h3>
                    <p class="lead">MoneyMate adalah platform web interaktif yang dirancang khusus untuk membantu Anda mengelola keuangan harian dengan lebih efektif. Dengan fitur analisis yang mendalam, MoneyMate membantu Anda memahami pola pengeluaran dan membuat keputusan keuangan yang lebih bijak.</p>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body p-5">
                    <h3 class="text-primary mb-4">Fitur Utama</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <h5><i class="fas fa-chart-line text-success me-2"></i>Tracking Keuangan</h5>
                            <p>Catat semua pemasukan dan pengeluaran Anda dengan mudah.</p>
                            
                            <h5><i class="fas fa-chart-pie text-success me-2"></i>Analisis Visual</h5>
                            <p>Lihat data keuangan Anda dalam bentuk grafik yang mudah dipahami.</p>
                        </div>
                        <div class="col-md-6">
                            <h5><i class="fas fa-bell text-success me-2"></i>Notifikasi & Reminder</h5>
                            <p>Dapatkan pengingat untuk tagihan dan target keuangan.</p>
                            
                            <h5><i class="fas fa-file-export text-success me-2"></i>Export Data</h5>
                            <p>Export laporan keuangan dalam berbagai format.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body p-5">
                    <h3 class="text-primary mb-4">Cara Menggunakan</h3>
                    <div class="row">
                        <div class="col-md-4 text-center mb-4">
                            <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fs-4 fw-bold">1</span>
                            </div>
                            <h5 class="mt-3">Daftar Akun</h5>
                            <p>Buat akun MoneyMate dengan email Anda</p>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fs-4 fw-bold">2</span>
                            </div>
                            <h5 class="mt-3">Input Data</h5>
                            <p>Masukkan data keuangan harian Anda</p>
                        </div>
                        <div class="col-md-4 text-center mb-4">
                            <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <span class="fs-4 fw-bold">3</span>
                            </div>
                            <h5 class="mt-3">Analisis</h5>
                            <p>Lihat analisis dan insight keuangan Anda</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <h3 class="text-primary mb-4">Teknologi yang Digunakan</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fab fa-laravel text-danger me-2"></i>Laravel Framework</li>
                                <li class="mb-2"><i class="fas fa-database text-primary me-2"></i>MySQL Database</li>
                                <li class="mb-2"><i class="fab fa-bootstrap text-purple me-2"></i>Bootstrap CSS</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fab fa-js text-warning me-2"></i>JavaScript</li>
                                <li class="mb-2"><i class="fas fa-chart-bar text-info me-2"></i>Chart.js</li>
                                <li class="mb-2"><i class="fas fa-shield-alt text-success me-2"></i>Security Features</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection