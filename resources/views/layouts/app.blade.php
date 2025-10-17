<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Bansos', 'Sistem Bansos Pendidikan') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    .sidebar {
    background-color: #f8f9fa;
    border-radius: 0 20px 20px 0;
    overflow: hidden;
    box-shadow: 2px 0 10px rgba(0,0,0,0.1);
    position: sticky;
    top: 0;
    height: 100vh;
}

/* === Struktur umum sidebar === */
.sidebar .nav-link {
    display: flex;
    align-items: center;
    gap: 8px; /* jarak antar ikon dan teks */
    border-radius: 12px; /* bikin semua tombol tumpul */
    padding: 10px 14px;
    margin: 6px 10px;
    font-weight: 500;
    color: var(--text-dark);
    background-color: transparent;
    text-decoration: none;
    transition: all 0.25s ease;
}

/* Hover & aktif */
.sidebar .nav-link:hover {
    background-color: #f0f9f4;
    color: var(--primary-green);
    transform: translateX(3px);
}

.sidebar .nav-link.active {
    background-color: var(--primary-green);
    color: white !important;
    box-shadow: 0 2px 8px rgba(0, 166, 81, 0.25);
}

/* === Dropdown icon di kiri, bukan kanan === */
.sidebar .nav-link .fa-chevron-down {
    margin-left: auto; /* hapus ini kalau sebelumnya ada */
    transform: rotate(-90deg);
    transition: transform 0.3s ease;
}

/* Saat menu terbuka, panah menghadap ke bawah */
.sidebar .nav-link[aria-expanded="true"] .fa-chevron-down {
    transform: rotate(0deg);
}

/* === Logout Button (tumpul & rata kiri) === */
.sidebar .nav-item.logout .nav-link {
    background-color: #dc3545;
    color: white !important;
    border-radius: 12px;
    transition: all 0.25s ease;
}

.sidebar .nav-item.logout .nav-link:hover {
    background-color: #bb2d3b;
    transform: translateX(3px);
}

/* Hilangkan float atau text-right bawaan */
.sidebar .nav-link i,
.sidebar .nav-link span,
.sidebar .nav-link {
    text-align: left !important;
    justify-content: flex-start !important;
}

/* Biar spacing antar dropdown rapi */
.sidebar .collapse .nav-link {
    margin-left: 16px;
    font-size: 0.95rem;
}

/* Garis pembatas lembut */
.sidebar hr {
    border-color: #e5e5e5;
}

    :root {
        --primary-green: #00A651;
        --primary-dark: #1a1a1a;
        --text-dark: #333333;
        --text-muted: #6c757d;
        --bg-light: #f8f9fa;
        --border-color: #e0e0e0;
    }

    body {
        font-family: 'Inter', 'Segoe UI', sans-serif;
        background-color: var(--bg-light);
    }

    /* Sidebar - White with shadow */
    .sidebar,
    .sidebar-mobile {
        min-height: 100vh;
        background: white;
        box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
    }

    .sidebar .nav-link,
    .sidebar-mobile .nav-link {
        color: var(--text-dark);
        padding: 12px 20px;
        margin: 8px 12px;
        border-radius: 0;
        transition: all 0.3s ease;
        font-weight: 500;
        font-size: 14px;
    }

    .sidebar .nav-link:hover,
    .sidebar-mobile .nav-link:hover {
        color: var(--primary-green);
        background-color: #f0f9f4;
    }

    .sidebar .nav-link.active,
    .sidebar-mobile .nav-link.active {
        color: white;
        background-color: var(--primary-green);
        border-radius: 0;
    }

    /* Dropdown menu */
    .dropdown-menu {
        border-radius: 0;
        border: 1px solid var(--border-color);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .dropdown-item {
        padding: 10px 20px;
        font-size: 14px;
        color: var(--text-dark);
    }

    .dropdown-item:hover {
        background-color: #f0f9f4;
        color: var(--primary-green);
    }

    /* Navbar */
    .navbar-top {
        background: white;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
        padding: 15px 0;
    }

    /* Card */
    .card {
        border: 1px solid var(--border-color);
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
    }

    /* Button */
    .btn-primary {
        background: var(--primary-green);
        border: none;
        border-radius: 4px;
        padding: 10px 24px;
        font-weight: 600;
        color: white;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background: #008f45;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0, 166, 81, 0.3);
    }

    /* Table */
    .table th {
        background: var(--primary-dark);
        color: white;
        font-weight: 600;
        font-size: 14px;
    }

    /* Logo */
    .logo-pertamina {
        height: 60px;
        margin-bottom: 20px;
    }

    /* Sidebar header */
    .sidebar-header h4 {
        font-weight: 700;
        color: var(--primary-dark);
        font-size: 24px;
    }

    .sidebar-header h6 {
        font-weight: 400;
        color: var(--text-muted);
        font-size: 12px;
    }

    /* Alerts */
    .alert-success {
        border-left: 4px solid var(--primary-green);
        background-color: #f0f9f4;
        color: var(--text-dark);
    }

    .alert-danger {
        border-left: 4px solid #dc3545;
        background-color: #f8d7da;
        color: var(--text-dark);
    }

    /* Banner section */
    .banner-section {
        background: linear-gradient(135deg, var(--primary-green), #00c968);
        border-radius: 12px;
        padding: 40px;
        color: white;
        margin-bottom: 30px;
    }

    .info-card {
        border-left: 4px solid var(--primary-green);
    }

</style>

</head>

<body class="bg-light">
    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar desktop -->
            <nav class="col-md-3 col-lg-2 d-none d-md-block sidebar collapse">
                @include('partials.sidebar')
            </nav>

            <!-- Navbar Mobile -->
            <div class="d-md-none p-3 navbar-top d-flex justify-content-between align-items-center">
                <button class="btn btn-outline-dark btn-sm" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
                    <i class="fas fa-bars"></i>
                </button>
                <span class="fw-bold" style="color: var(--primary-dark);">Berbagi Asa</span>
            </div>
            <div class="offcanvas offcanvas-start sidebar-mobile text-white" tabindex="-1" id="mobileSidebar">
                <div class="offcanvas-header">
                    <h5>Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body p-0">
                    @include('partials.sidebar')
                </div>
            </div>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Top Navbar -->
                <nav class="navbar navbar-expand-lg navbar-top mb-4">
                    <div class="container-fluid px-0">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <h1 class="h4 mb-0 fw-bold" style="color: var(--primary-dark);">@yield('title', 'Dashboard')</h1>
                            <div class="d-flex align-items-center gap-3">
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle d-flex align-items-center gap-2" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user-circle"></i>
                                        <span>{{ Auth::user()->name ?? 'Admin' }}</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault(); document.getElementById('logout-form-top').submit();">
                                                <i class="fas fa-sign-out-alt me-2"></i> Logout
                                            </a>
                                            <form id="logout-form-top" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @stack('scripts')
</body>

</html>
