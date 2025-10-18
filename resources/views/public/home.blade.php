@extends('layouts.public')

@section('title', 'Beranda - Berbagi Asa')

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-4">Program Khitan Gratis</h1>
                <h2 class="h3 mb-4">Bazma x Pertamina</h2>
                <p class="lead mb-4">
                    Menyalakan Harapan, Mewujudkan Pendidikan dan Kesehatan Anak Indonesia yang Lebih Baik
                </p>
                <div class="d-flex gap-3">
                    <a href="{{ route('program') }}" class="btn btn-light btn-lg">
                        <i class="fas fa-info-circle me-2"></i> Lihat Program
                    </a>
                    <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-users me-2"></i> Tentang Kami
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <i class="fas fa-hands-helping" style="font-size: 200px; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-5" style="background: var(--bg-light);">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-3">
                <div class="stats-box">
                    <div class="stats-number">500+</div>
                    <p class="text-muted mb-0">Anak Terlayani</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-box">
                    <div class="stats-number">15</div>
                    <p class="text-muted mb-0">Kota Jangkauan</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-box">
                    <div class="stats-number">100%</div>
                    <p class="text-muted mb-0">Gratis</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-box">
                    <div class="stats-number">24/7</div>
                    <p class="text-muted mb-0">Layanan Konsultasi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="section-title">Tentang Program</h2>
                <p class="lead text-muted mb-4">
                    Program Khitan Gratis merupakan bentuk kepedulian nyata dari Bazma dan Pertamina dalam mendukung kesehatan dan kesejahteraan anak-anak Indonesia.
                </p>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <strong>Pelayanan Profesional</strong> - Didukung tenaga medis berpengalaman
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <strong>Fasilitas Lengkap</strong> - Peralatan medis modern dan steril
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <strong>Paket Nutrisi</strong> - Obat-obatan dan makanan bergizi
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-check-circle text-success me-2"></i>
                        <strong>Gratis Total</strong> - Tanpa biaya apapun untuk keluarga kurang mampu
                    </li>
                </ul>
                <a href="{{ route('about') }}" class="btn btn-primary btn-lg mt-3">
                    Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-0">
                        <div style="background: linear-gradient(135deg, var(--primary-green), #00c968); height: 400px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-heart" style="font-size: 150px; color: white; opacity: 0.3;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advertisement Banner -->
<div class="container">
    <div class="banner-ad">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h3 class="fw-bold mb-3">Dukung Program Kami</h3>
                <p class="mb-0">
                    Bersama Bazma dan Pertamina, mari kita wujudkan Indonesia yang lebih sehat dan sejahtera.
                    Setiap dukungan Anda sangat berarti untuk masa depan anak-anak Indonesia.
                </p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <a href="https://bazma.org" target="_blank" class="btn btn-light btn-lg">
                    <i class="fas fa-hand-holding-heart me-2"></i> Donasi Sekarang
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Partners Section -->
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Partner Kami</h2>
            <p class="text-muted">Dipercaya oleh organisasi terkemuka di Indonesia</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card-program h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #00A651, #00c968); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 20px;">
                                <i class="fas fa-mosque text-white" style="font-size: 36px;"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold mb-1">Bazma</h4>
                                <p class="text-muted mb-0">Lembaga Amil Zakat Nasional</p>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            Bazma adalah lembaga amil zakat yang telah dipercaya menyalurkan bantuan untuk pendidikan dan kesehatan anak Indonesia sejak tahun 2001.
                        </p>
                        <a href="https://bazma.org" target="_blank" class="btn btn-sm btn-outline-primary">
                            Kunjungi Website <i class="fas fa-external-link-alt ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-program h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #0066B3, #0088dd); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 20px;">
                                <i class="fas fa-gas-pump text-white" style="font-size: 36px;"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold mb-1">Pertamina</h4>
                                <p class="text-muted mb-0">BUMN Energi Indonesia</p>
                            </div>
                        </div>
                        <p class="text-muted mb-3">
                            PT Pertamina (Persero) berkomitmen memberikan manfaat nyata bagi masyarakat melalui program tanggung jawab sosial perusahaan.
                        </p>
                        <a href="https://www.pertamina.com" target="_blank" class="btn btn-sm btn-outline-primary">
                            Kunjungi Website <i class="fas fa-external-link-alt ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, var(--primary-green), #00c968);">
    <div class="container">
        <div class="text-center text-white">
            <h2 class="display-5 fw-bold mb-4">Bergabung Bersama Kami</h2>
            <p class="lead mb-4">
                Mari bersama-sama wujudkan Indonesia yang lebih baik untuk generasi mendatang
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="{{ route('program') }}" class="btn btn-light btn-lg">
                    <i class="fas fa-hands-helping me-2"></i> Lihat Program
                </a>
                <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg">
                    <i class="fas fa-sign-in-alt me-2"></i> Login Admin
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
