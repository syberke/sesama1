@extends('layouts.public')

@section('title', 'Tentang Kami - Berbagi Asa')

@section('content')

<!-- Hero Section -->
<section class="hero-section" style="padding: 80px 0;">
    <div class="container position-relative">
        <div class="text-center">
            <h1 class="display-4 fw-bold mb-3">Tentang Kami</h1>
            <p class="lead">Mengenal lebih dekat program Berbagi Asa</p>
        </div>
    </div>
</section>

<!-- About Content -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title mb-4">Berbagi Asa</h2>
                <p class="lead text-muted">
                    Berbagi Asa adalah program kolaborasi antara Bazma dan Pertamina yang bertujuan untuk memberikan layanan khitan gratis bagi anak-anak kurang mampu di seluruh Indonesia.
                </p>
            </div>
        </div>

        <!-- Vision & Mission -->
        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body p-5">
                        <div class="mb-4">
                            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary-green), #00c968); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-eye text-white" style="font-size: 32px;"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold mb-3">Visi</h3>
                        <p class="text-muted mb-0">
                            Menjadi program bantuan kesehatan terdepan yang memberikan akses layanan khitan berkualitas bagi seluruh anak Indonesia tanpa memandang latar belakang ekonomi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body p-5">
                        <div class="mb-4">
                            <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #0066B3, #0088dd); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-bullseye text-white" style="font-size: 32px;"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold mb-3">Misi</h3>
                        <p class="text-muted mb-0">
                            Menyediakan layanan khitan gratis dengan standar medis profesional, mendukung kesehatan anak Indonesia, dan membantu meringankan beban ekonomi keluarga kurang mampu.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Values -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">Nilai-Nilai Kami</h2>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="text-center">
                            <div class="mb-3">
                                <div class="mx-auto" style="width: 80px; height: 80px; background: #e8f5e9; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-heart" style="font-size: 36px; color: var(--primary-green);"></i>
                                </div>
                            </div>
                            <h5 class="fw-bold mb-2">Peduli</h5>
                            <p class="text-muted small">Mengutamakan kepentingan dan kesejahteraan anak-anak</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <div class="mb-3">
                                <div class="mx-auto" style="width: 80px; height: 80px; background: #e3f2fd; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-shield-alt" style="font-size: 36px; color: var(--primary-blue);"></i>
                                </div>
                            </div>
                            <h5 class="fw-bold mb-2">Profesional</h5>
                            <p class="text-muted small">Layanan berkualitas dengan standar medis tinggi</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <div class="mb-3">
                                <div class="mx-auto" style="width: 80px; height: 80px; background: #fff3e0; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-handshake" style="font-size: 36px; color: #ff9800;"></i>
                                </div>
                            </div>
                            <h5 class="fw-bold mb-2">Kolaboratif</h5>
                            <p class="text-muted small">Bekerja sama untuk dampak yang lebih luas</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <div class="mb-3">
                                <div class="mx-auto" style="width: 80px; height: 80px; background: #fce4ec; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-award" style="font-size: 36px; color: #e91e63;"></i>
                                </div>
                            </div>
                            <h5 class="fw-bold mb-2">Integritas</h5>
                            <p class="text-muted small">Transparansi dan akuntabilitas dalam setiap tindakan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners Detail -->
<section class="py-5" style="background: var(--bg-light);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Partner Strategis</h2>
            <p class="text-muted">Kolaborasi untuk Indonesia yang lebih baik</p>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #00A651, #00c968); border-radius: 12px; display: inline-flex; align-items: center; justify-content: center;">
                                <i class="fas fa-mosque text-white" style="font-size: 48px;"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold text-center mb-3">Bazma</h3>
                        <p class="text-muted mb-3">
                            Bazma adalah lembaga amil zakat nasional yang telah berdiri sejak tahun 2001. Dengan pengalaman lebih dari 20 tahun, Bazma telah menyalurkan bantuan kepada jutaan masyarakat Indonesia.
                        </p>
                        <h6 class="fw-bold mb-2">Fokus Program:</h6>
                        <ul class="text-muted">
                            <li>Pendidikan anak kurang mampu</li>
                            <li>Kesehatan masyarakat</li>
                            <li>Pemberdayaan ekonomi</li>
                            <li>Kemanusiaan dan bencana</li>
                        </ul>
                        <div class="text-center mt-4">
                            <a href="https://bazma.org" target="_blank" class="btn btn-primary">
                                <i class="fas fa-globe me-2"></i> Kunjungi Website
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #0066B3, #0088dd); border-radius: 12px; display: inline-flex; align-items: center; justify-content: center;">
                                <i class="fas fa-gas-pump text-white" style="font-size: 48px;"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold text-center mb-3">Pertamina</h3>
                        <p class="text-muted mb-3">
                            PT Pertamina (Persero) adalah BUMN yang bergerak di bidang energi. Melalui program CSR, Pertamina berkomitmen memberikan dampak positif bagi masyarakat Indonesia.
                        </p>
                        <h6 class="fw-bold mb-2">Program CSR:</h6>
                        <ul class="text-muted">
                            <li>Pendidikan dan beasiswa</li>
                            <li>Kesehatan masyarakat</li>
                            <li>Lingkungan hidup</li>
                            <li>Pemberdayaan UMKM</li>
                        </ul>
                        <div class="text-center mt-4">
                            <a href="https://www.pertamina.com" target="_blank" class="btn btn-primary">
                                <i class="fas fa-globe me-2"></i> Kunjungi Website
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advertisement Banner -->
<div class="container my-5">
    <div class="banner-ad">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h3 class="fw-bold mb-3">Ingin Tahu Lebih Lanjut?</h3>
                <p class="mb-0">
                    Pelajari lebih detail tentang program-program kami dan bagaimana Anda bisa berkontribusi untuk masa depan anak-anak Indonesia.
                </p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <a href="{{ route('program') }}" class="btn btn-light btn-lg">
                    <i class="fas fa-arrow-right me-2"></i> Lihat Program
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Team/Contact Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title mb-4">Hubungi Kami</h2>
            <p class="text-muted mb-4">
                Punya pertanyaan atau ingin bergabung? Jangan ragu untuk menghubungi kami
            </p>
            <div class="row g-4 mt-4">
                <div class="col-md-4">
                    <div class="p-4">
                        <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                        <h5 class="fw-bold">Email</h5>
                        <p class="text-muted">info@berbagiasa.org</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4">
                        <i class="fas fa-phone fa-3x text-primary mb-3"></i>
                        <h5 class="fw-bold">Telepon</h5>
                        <p class="text-muted">021-12345678</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4">
                        <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                        <h5 class="fw-bold">Alamat</h5>
                        <p class="text-muted">Jakarta, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
