@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<style>
    .stat-card {
        border-radius: 8px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        border-left: 4px solid var(--primary-green);
    }

    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 4px 16px rgba(0,0,0,0.1);
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }

    .progress-bar {
        background: var(--primary-green);
        transition: width 0.6s ease;
    }

    .info-box {
        background: white;
        border-radius: 8px;
        padding: 24px;
        border: 1px solid var(--border-color);
    }

    .activity-item {
        padding: 16px;
        border-left: 3px solid var(--primary-green);
        background: #f8f9fa;
        margin-bottom: 12px;
        border-radius: 4px;
    }
</style>

<!-- Banner Section -->
<div class="banner-section mb-4">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h2 class="fw-bold mb-2">Program Khitan Gratis 2025</h2>
            <p class="mb-0">Kolaborasi Bazma dan Pertamina untuk mewujudkan pendidikan dan kesehatan anak Indonesia yang lebih baik</p>
        </div>
        <div class="col-md-4 text-end">
            <i class="fas fa-hands-helping" style="font-size: 80px; opacity: 0.3;"></i>
        </div>
    </div>
</div>

<!-- Statistics Cards -->
<div class="row mb-4">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stat-card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted text-uppercase mb-1" style="font-size: 12px; font-weight: 600;">Total Penerima</p>
                        <h2 class="fw-bold mb-0" style="color: var(--primary-green);">{{ $totalRecipients }}</h2>
                    </div>
                    <div class="stat-icon" style="background-color: #e8f5e9;">
                        <i class="fas fa-users" style="color: var(--primary-green);"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stat-card h-100" style="border-left-color: #28a745;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted text-uppercase mb-1" style="font-size: 12px; font-weight: 600;">Sudah Menerima</p>
                        <h2 class="fw-bold mb-0" style="color: #28a745;">{{ $distributedCount }}</h2>
                    </div>
                    <div class="stat-icon" style="background-color: #e8f5e9;">
                        <i class="fas fa-check-circle" style="color: #28a745;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stat-card h-100" style="border-left-color: #ffc107;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted text-uppercase mb-1" style="font-size: 12px; font-weight: 600;">Belum Menerima</p>
                        <h2 class="fw-bold mb-0" style="color: #ffc107;">{{ $pendingCount }}</h2>
                    </div>
                    <div class="stat-icon" style="background-color: #fff8e1;">
                        <i class="fas fa-clock" style="color: #ffc107;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stat-card h-100" style="border-left-color: #17a2b8;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted text-uppercase mb-1" style="font-size: 12px; font-weight: 600;">Progress</p>
                        <h2 class="fw-bold mb-0" style="color: #17a2b8;">
                            {{ $totalRecipients > 0 ? round(($distributedCount / $totalRecipients) * 100) : 0 }}%
                        </h2>
                    </div>
                    <div class="stat-icon" style="background-color: #e0f7fa;">
                        <i class="fas fa-chart-line" style="color: #17a2b8;"></i>
                    </div>
                </div>
                <div class="progress mt-3" style="height: 6px;">
                    <div class="progress-bar" role="progressbar"
                         style="width: {{ $totalRecipients > 0 ? ($distributedCount / $totalRecipients) * 100 : 0 }}%"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Information Cards -->
<div class="row mb-4">
    <div class="col-md-6 mb-4">
        <div class="info-box h-100">
            <div class="d-flex align-items-center mb-3">
                <div class="stat-icon me-3" style="background-color: #e8f5e9;">
                    <i class="fas fa-info-circle" style="color: var(--primary-green);"></i>
                </div>
                <h5 class="mb-0 fw-bold">Tentang Program</h5>
            </div>
            <p class="text-muted mb-2">
                Program Khitan Gratis merupakan bentuk kepedulian Bazma dan Pertamina dalam mendukung kesehatan dan kesejahteraan anak-anak Indonesia.
            </p>
            <ul class="text-muted" style="font-size: 14px;">
                <li>Pelayanan khitan gratis untuk anak kurang mampu</li>
                <li>Didukung oleh tenaga medis profesional</li>
                <li>Dilengkapi dengan paket nutrisi dan obat-obatan</li>
            </ul>
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="info-box h-100">
            <div class="d-flex align-items-center mb-3">
                <div class="stat-icon me-3" style="background-color: #fff8e1;">
                    <i class="fas fa-calendar-check" style="color: #ffc107;"></i>
                </div>
                <h5 class="mb-0 fw-bold">Kegiatan Terkini</h5>
            </div>
            <div class="activity-item">
                <h6 class="mb-1 fw-bold" style="color: var(--primary-dark);">Registrasi Penerima Bantuan</h6>
                <p class="mb-0 text-muted" style="font-size: 13px;">Pendaftaran penerima bantuan sedang berlangsung</p>
            </div>
            <div class="activity-item">
                <h6 class="mb-1 fw-bold" style="color: var(--primary-dark);">Verifikasi Data</h6>
                <p class="mb-0 text-muted" style="font-size: 13px;">Tim sedang memverifikasi kelengkapan data peserta</p>
            </div>
        </div>
    </div>
</div>

<!-- Advertisement / Promotional Banners -->
<div class="row mb-4">
    <div class="col-12">
        <h5 class="fw-bold mb-3" style="color: var(--primary-dark);">Informasi & Pengumuman</h5>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card h-100" style="border: none; overflow: hidden;">
            <div style="background: linear-gradient(135deg, #00A651, #00c968); padding: 30px; color: white;">
                <h5 class="fw-bold mb-2">Tentang Bazma</h5>
                <p class="mb-3" style="font-size: 14px;">
                    Bazma adalah lembaga amil zakat nasional yang telah dipercaya menyalurkan bantuan untuk pendidikan dan kesehatan anak Indonesia.
                </p>
                <a href="https://bazma.org" target="_blank" class="btn btn-light btn-sm">
                    <i class="fas fa-globe me-2"></i> Kunjungi Website
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card h-100" style="border: none; overflow: hidden;">
            <div style="background: linear-gradient(135deg, #0066B3, #0088dd); padding: 30px; color: white;">
                <h5 class="fw-bold mb-2">Tentang Pertamina</h5>
                <p class="mb-3" style="font-size: 14px;">
                    PT Pertamina (Persero) berkomitmen memberikan manfaat nyata bagi masyarakat melalui program tanggung jawab sosial perusahaan.
                </p>
                <a href="https://www.pertamina.com" target="_blank" class="btn btn-light btn-sm">
                    <i class="fas fa-globe me-2"></i> Kunjungi Website
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Action Buttons -->
<div class="row">
    <div class="col-12">
        <div class="d-flex gap-2 flex-wrap">
            <a href="{{ route('recipients.index') }}" class="btn btn-primary">
                <i class="fas fa-list me-2"></i> Lihat Semua Data
            </a>
            <a href="{{ route('recipients.scan') }}" class="btn btn-outline-success">
                <i class="fas fa-qrcode me-2"></i> Scan QR Code
            </a>
        </div>
    </div>
</div>


@endsection
