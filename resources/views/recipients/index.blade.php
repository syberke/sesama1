@extends('layouts.app')

@section('title', 'Data Penerima')

@section('content')
<style>
    /* === Banner Header === */
    .page-header {
        background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 30px;
        color: white;
        text-align: left; /* kiriin teks */
    }

    /* === Kotak Pencarian === */
    .search-container {
        background: white;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 25px;
    }

    .search-wrapper {
        position: relative;
        width: 100%;
        max-width: 350px;
    }

    .search-wrapper input {
        width: 100%;
        height: 40px;
        padding: 8px 38px 8px 12px;
        font-size: 14px;
        border-radius: 8px;
        border: 1px solid #e5e7eb;
    }

    .search-wrapper button {
        position: absolute;
        right: 6px;
        top: 50%;
        transform: translateY(-50%);
        background: var(--accent-blue);
        border: none;
        color: white;
        border-radius: 6px;
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.2s;
    }

    .search-wrapper button:hover {
        background: var(--dark-blue);
    }

    .btn-custom {
        border-radius: 8px;
        padding: 10px 20px;
        font-weight: 600;
        transition: all 0.3s ease;
        white-space: nowrap;
    }

    .btn-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .action-buttons {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        justify-content: flex-end;
    }

    /* === Table === */
    .data-table {
        background: white;
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        overflow-x: auto;
    }

    .table th {
        background: #f8fafc;
        color: #374151;
        font-weight: 600;
        border: none;
        padding: 15px 12px;
        white-space: nowrap;
    }

    .table td {
        padding: 15px 12px;
        border: none;
        border-bottom: 1px solid #f1f5f9;
        vertical-align: middle;
    }

    .table tbody tr:hover {
        background: #f8fafc;
    }

    /* === Status Badge === */
    .status-badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        white-space: nowrap;
    }

    .status-completed { background: #dcfce7; color: #166534; }
    .status-registered { background: #fef3c7; color: #92400e; }
    .status-pending { background: #fee2e2; color: #991b1b; }

    /* === Responsive === */
    @media (max-width: 992px) {
        .action-buttons {
            justify-content: center;
        }
        .search-wrapper {
            max-width: 100%;
        }
    }

    @media (max-width: 576px) {
        .page-header h2 {
            font-size: 1.4rem;
        }
        .page-header p {
            font-size: 13px;
        }

        /* Hilangkan tulisan “Search” di HP */
        .search-wrapper button::after {
            content: "";
        }

        .search-wrapper button i {
            margin: 0;
        }

        .btn-custom {
            padding: 8px 14px;
            font-size: 13px;
        }

        .table th, .table td {
            font-size: 13px;
            padding: 10px 8px;
        }
    }
</style>

<!-- Banner -->
<div class="page-header">
    <h2 class="mb-2">Data Penerima</h2>
    <p class="mb-0">Kelola data penerima bantuan pendidikan</p>
</div>

<!-- Search + Actions -->
<div class="search-container">
    <div class="row align-items-center gy-3">
        <div class="col-lg-6 col-md-12">
            <form action="{{ route('recipients.index') }}" method="GET" class="d-flex align-items-center flex-wrap gap-2">
                <div class="search-wrapper">
                    <input type="text" name="search" placeholder="Cari penerima..." value="{{ request('search') }}">
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="action-buttons">
                <a href="{{ route('recipients.import') }}" class="btn btn-success btn-custom">
                    <i class="fas fa-plus me-2"></i>Import Excel
                </a>
                <a href="{{ route('recipients.printAll') }}" class="btn btn-info btn-custom text-white">
                    <i class="fas fa-download me-2"></i>Download QR
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Data Table -->
<div class="data-table">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>QR Code</th>
                    <th>Nama Anak</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Sekolah</th>
                    <th>Kelas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($recipients as $recipient)
                    <tr>
                        <td><span class="badge bg-primary">{{ $recipient->qr_code }}</span></td>
                        <td>{{ $recipient->child_name }}</td>
                        <td>{{ $recipient->Ayah_name }}</td>
                        <td>{{ $recipient->Ibu_name }}</td>
                        <td>{{ $recipient->school_name }}</td>
                        <td>{{ $recipient->class }}</td>
                        <td>
                            @if ($recipient->is_distributed && $recipient->registrasi)
                                <span class="status-badge status-completed">
                                    <i class="fas fa-check-circle"></i> Completed
                                </span>
                            @elseif ($recipient->registrasi && !$recipient->is_distributed)
                                <span class="status-badge status-registered">
                                    <i class="fas fa-check"></i> Sudah registrasi
                                </span>
                            @else
                                <span class="status-badge status-pending">
                                    <i class="fas fa-times"></i> Belum registrasi
                                </span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('recipients.show', $recipient) }}" class="btn btn-sm btn-outline-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('recipients.edit', $recipient) }}" class="btn btn-sm btn-outline-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('recipients.destroy', $recipient) }}" method="POST"
                                      class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4">
                            <div class="text-muted">
                                <i class="fas fa-inbox fa-2x mb-3"></i>
                                <p>Belum ada data penerima</p>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $recipients->links() }}
    </div>
</div>
@endsection
