@extends('layouts.public')

@section('title', 'Program - Berbagi Asa')

@section('content')

<!-- Hero Section -->
<section class="hero-section" style="padding: 80px 0;">
    <div class="container position-relative">
        <div class="text-center">
            <h1 class="display-4 fw-bold mb-3">Program Kami</h1>
            <p class="lead">Program Khitan Gratis untuk Indonesia yang Lebih Sehat</p>
        </div>
    </div>
</section>

<!-- Main Program -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card border-0 shadow-lg">
                    <div style="background: linear-gradient(135deg, var(--primary-green), #00c968); height: 400px; display: flex; align-items: center; justify-content: center; border-radius: 12px;">
                        <i class="fas fa-heartbeat" style="font-size: 150px; color: white; opacity: 0.3;"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="section-title mb-4">Program Khitan Gratis 2025</h2>
                <p class="lead text-muted mb-4">
                    Berbagi Asa menghadirkan program khitan gratis bagi anak-anak kurang mampu dengan layanan medis profesional dan fasilitas lengkap.
                </p>
                <div class="mb-3">
                    <h5 class="fw-bold mb-3">Manfaat Program:</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Layanan khitan 100% gratis
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Ditangani dokter dan tenaga medis berpengalaman
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Fasilitas medis modern dan steril
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Paket obat-obatan lengkap
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Konsultasi kesehatan pasca operasi
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Paket makanan bergizi
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Program Details -->
<section class="py-5" style="background: var(--bg-light);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Detail Program</h2>
            <p class="text-muted">Informasi lengkap tentang program khitan gratis</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <div class="mx-auto" style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-green), #00c968); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-users text-white" style="font-size: 36px;"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-2">Target Peserta</h5>
                        <p class="text-muted small mb-0">Anak usia 6-12 tahun dari keluarga kurang mampu di seluruh Indonesia</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <div class="mx-auto" style="width: 80px; height: 80px; background: linear-gradient(135deg, #0066B3, #0088dd); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-calendar-alt text-white" style="font-size: 36px;"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-2">Waktu Pelaksanaan</h5>
                        <p class="text-muted small mb-0">Sepanjang tahun 2025 dengan jadwal yang fleksibel sesuai lokasi</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <div class="mx-auto" style="width: 80px; height: 80px; background: linear-gradient(135deg, #ff9800, #ffb74d); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-map-marked-alt text-white" style="font-size: 36px;"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-2">Lokasi</h5>
                        <p class="text-muted small mb-0">15 kota di Indonesia dengan fasilitas kesehatan mitra</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <div class="mx-auto" style="width: 80px; height: 80px; background: linear-gradient(135deg, #e91e63, #f06292); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-file-alt text-white" style="font-size: 36px;"></i>
                            </div>
                        </div>
                        <h5 class="fw-bold mb-2">Syarat</h5>
                        <p class="text-muted small mb-0">KTP/KK, Surat Keterangan Tidak Mampu, dan formulir pendaftaran</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Flow -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Alur Pendaftaran</h2>
            <p class="text-muted">Langkah mudah untuk mengikuti program</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <div style="width: 50px; height: 50px; background: var(--primary-green); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px;">
                                    1
                                </div>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Registrasi</h5>
                                <p class="text-muted mb-0">Daftar melalui website atau datang langsung ke kantor cabang terdekat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <div style="width: 50px; height: 50px; background: var(--primary-green); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px;">
                                    2
                                </div>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Verifikasi</h5>
                                <p class="text-muted mb-0">Tim akan memverifikasi kelengkapan dokumen dan kelayakan peserta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <div style="width: 50px; height: 50px; background: var(--primary-green); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px;">
                                    3
                                </div>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Penjadwalan</h5>
                                <p class="text-muted mb-0">Peserta akan mendapat jadwal pelaksanaan khitan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <div style="width: 50px; height: 50px; background: var(--primary-green); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px;">
                                    4
                                </div>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Pelaksanaan</h5>
                                <p class="text-muted mb-0">Proses khitan dilakukan oleh tenaga medis profesional</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <div style="width: 50px; height: 50px; background: var(--primary-green); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px;">
                                    5
                                </div>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Perawatan</h5>
                                <p class="text-muted mb-0">Penerima mendapat paket obat dan panduan perawatan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <div style="width: 50px; height: 50px; background: var(--primary-green); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px;">
                                    6
                                </div>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Monitoring</h5>
                                <p class="text-muted mb-0">Follow up kesehatan hingga pemulihan sempurna</p>
                            </div>
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
            <div class="col-md-9">
                <h3 class="fw-bold mb-3">
                    <i class="fas fa-bullhorn me-2"></i> Program Masih Dibuka!
                </h3>
                <p class="mb-0">
                    Kuota terbatas untuk tahun 2025. Daftarkan putra Anda sekarang dan dapatkan layanan khitan gratis dengan fasilitas terbaik. Hubungi kami untuk informasi lebih lanjut.
                </p>
            </div>
            <div class="col-md-3 text-md-end mt-3 mt-md-0">
                <a href="{{ route('login') }}" class="btn btn-light btn-lg">
                    <i class="fas fa-user-plus me-2"></i> Daftar
                </a>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<section class="py-5" style="background: var(--bg-light);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Pertanyaan Umum</h2>
            <p class="text-muted">Jawaban untuk pertanyaan yang sering diajukan</p>
        </div>

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Siapa yang bisa mengikuti program ini?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Program ini diperuntukkan bagi anak usia 6-12 tahun dari keluarga kurang mampu yang memiliki KTP/KK dan Surat Keterangan Tidak Mampu dari kelurahan setempat.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Apakah benar 100% gratis?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Ya, program ini sepenuhnya gratis termasuk biaya operasi, obat-obatan, konsultasi, dan paket nutrisi. Tidak ada biaya tersembunyi.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Bagaimana cara mendaftar?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Anda bisa mendaftar melalui sistem admin dengan menghubungi panitia atau datang langsung ke kantor cabang Bazma/Pertamina terdekat dengan membawa dokumen persyaratan.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item mb-3 border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Berapa lama proses verifikasi?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Proses verifikasi biasanya memakan waktu 3-7 hari kerja. Tim kami akan menghubungi Anda setelah verifikasi selesai.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Apakah ada layanan konsultasi setelah operasi?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Ya, kami menyediakan layanan konsultasi gratis selama masa pemulihan dan follow up kesehatan hingga anak sembuh total.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title mb-4">Masih Ada Pertanyaan?</h2>
            <p class="text-muted mb-4">
                Tim kami siap membantu menjawab pertanyaan Anda
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="{{ route('about') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-info-circle me-2"></i> Tentang Kami
                </a>
                <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg">
                    <i class="fas fa-sign-in-alt me-2"></i> Login Admin
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
