@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="text-center mb-5">Tentang Tim Pengembang</h1>
            
            <div class="card shadow-sm mb-5">
                <div class="card-body p-5">
                    <h3 class="text-primary mb-4">Visi Kami</h3>
                    <p class="lead">Menciptakan solusi manajemen keuangan yang mudah digunakan dan dapat diakses oleh semua kalangan untuk membantu mencapai kesehatan finansial yang lebih baik.</p>
                    
                    <h3 class="text-primary mb-4 mt-5">Misi Kami</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Mengembangkan platform yang intuitif dan user-friendly</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Menyediakan analisis keuangan yang mendalam dan akurat</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Membantu pengguna membuat keputusan keuangan yang lebih baik</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Menjaga keamanan dan privasi data pengguna</li>
                    </ul>
                </div>
            </div>

            <h2 class="text-center mb-5">Tim Pengembang</h2>
            
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-user-circle fa-5x text-primary mb-3"></i>
                            <h5>@AsyrafRF</h5>
                            <p class="text-muted">Full Stack Developer</p>
                            <p>Bertanggung jawab dalam pengembangan backend dan frontend aplikasi MoneyMate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-user-circle fa-5x text-primary mb-3"></i>
                            <h5>Fauzan</h5>
                            <p class="text-muted">UI/UX Designer</p>
                            <p>Merancang interface yang menarik dan pengalaman pengguna yang optimal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection