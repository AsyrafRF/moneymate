@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="text-center mb-5">Hubungi Kami</h1>
            
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="text-primary mb-4">Informasi Kontak</h4>
                            
                            <div class="mb-3">
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <strong>Email:</strong> info@moneymate.com
                            </div>
                            
                            <div class="mb-3">
                                <i class="fas fa-phone text-primary me-3"></i>
                                <strong>Telepon:</strong> +62 123 456 7890
                            </div>
                            
                            <div class="mb-3">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <strong>Alamat:</strong> Jl. Teknologi No. 123, Jakarta, Indonesia
                            </div>
                            
                            <div class="mb-3">
                                <i class="fas fa-clock text-primary me-3"></i>
                                <strong>Jam Operasional:</strong><br>
                                Senin - Jumat: 09:00 - 17:00<br>
                                Sabtu: 09:00 - 12:00
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-primary mb-4">Kirim Pesan</h4>
                            
                            <form action="{{ route('kontak.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                           id="nama" name="nama" value="{{ old('nama') }}" required>
                                    @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                           id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="pesan" class="form-label">Pesan</label>
                                    <textarea class="form-control @error('pesan') is-invalid @enderror" 
                                              id="pesan" name="pesan" rows="5" required>{{ old('pesan') }}</textarea>
                                    @error('pesan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-lg w-100">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- FAQ Section -->
            <div class="mt-5">
                <h3 class="text-center mb-4">Pertanyaan yang Sering Diajukan</h3>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Apakah MoneyMate gratis untuk digunakan?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Ya, MoneyMate menyediakan versi gratis dengan fitur dasar. Tersedia juga versi premium dengan fitur yang lebih lengkap.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Bagaimana keamanan data saya?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Data Anda dienkripsi dengan standar industri dan disimpan dengan aman. Kami tidak akan membagikan informasi Anda kepada pihak ketiga.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Bisakah saya mengakses MoneyMate di mobile?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Ya, MoneyMate memiliki responsive design yang dapat diakses dengan sempurna di perangkat mobile dan tablet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection