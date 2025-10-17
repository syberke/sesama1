@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<style>
    /* Card style with smooth shadows and rounded corners */
    .card {
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    /* Hover effect: raise and deepen shadow */
    .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    /* Text colors */
    .text-primary { color: #2c7be5; }
    .text-success { color: #28a745; }
    .text-warning { color: #ffc107; }
    .text-info { color: #17a2b8; }

    /* Progress bar gradient */
    .progress-bar {
        background: linear-gradient(90deg, #17a2b8, #33cbdc);
        transition: width 0.6s ease;
        border-radius: 10px;
    }

    /* Smaller text description */
    small.text-muted {
        font-style: italic;
        color: #6c757d;
    }

    /* Button style */
    .btn-info {
        border-radius: 30px;
        box-shadow: 0 4px 10px rgba(23,162,184,0.4);
        transition: background-color 0.3s ease;
        padding: 12px 36px;
        font-weight: 600;
        font-size: 1.15rem;
    }

    .btn-info:hover {
        background-color: #138496;
        box-shadow: 0 6px 14px rgba(23,162,184,0.6);
    }

</style>

<div class="row mb-4">
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-4">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-2" style="letter-spacing: 1.2px;">
                            Total Penerima
                        </div>
                        <div class="h2 mb-1 font-weight-bold text-primary">{{ $totalRecipients }}</div>
                        <small class="text-muted">Jumlah seluruh penerima bantuan yang terdaftar di sistem.</small>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-4x text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-4">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-2" style="letter-spacing: 1.2px;">
                            Sudah Menerima
                        </div>
                        <div class="h2 mb-1 font-weight-bold text-success">{{ $distributedCount }}</div>
                        <small class="text-muted">Penerima yang sudah mendapatkan bantuan.</small>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check-circle fa-4x text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-4">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-2" style="letter-spacing: 1.2px;">
                            Belum Menerima
                        </div>
                        <div class="h2 mb-1 font-weight-bold text-warning">{{ $pendingCount }}</div>
                        <small class="text-muted">Penerima yang masih menunggu penyaluran bantuan.</small>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clock fa-4x text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-4">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-2" style="letter-spacing: 1.2px;">
                            Progress
                        </div>
                        <div class="row no-gutters align-items-center mb-1">
                            <div class="col-auto">
                                <div class="h2 mb-0 mr-3 font-weight-bold text-info">
                                    {{ $totalRecipients > 0 ? round(($distributedCount / $totalRecipients) * 100) : 0 }}%
                                </div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2" style="height: 12px; border-radius: 10px;">
                                    <div class="progress-bar" role="progressbar"
                                         style="width: {{ $totalRecipients > 0 ? ($distributedCount / $totalRecipients) * 100 : 0 }}%"></div>
                                </div>
                            </div>
                        </div>
                        <small class="text-muted">Persentase penyaluran bantuan yang sudah dilakukan.</small>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-chart-pie fa-4x text-info"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <a href="{{ route('recipients.index') }}" class="btn btn-info btn-sm shadow-sm">
            <i class="fas fa-list me-2"></i> Lihat Semua Data
        </a>
    </div>
</div>


@endsection
