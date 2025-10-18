<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Berbagi Asa - Program Khitan Gratis Bazma x Pertamina')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-green: #00A651;
            --primary-blue: #0066B3;
            --primary-dark: #1a1a1a;
            --text-dark: #333333;
            --text-muted: #6c757d;
            --bg-light: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', sans-serif;
            color: var(--text-dark);
        }

        .navbar-public {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0;
        }

        .navbar-public .navbar-brand {
            font-weight: 700;
            font-size: 24px;
            color: var(--primary-green);
            padding: 15px 0;
        }

        .navbar-public .nav-link {
            color: var(--text-dark);
            font-weight: 500;
            font-size: 15px;
            padding: 25px 20px;
            transition: all 0.3s ease;
            border-bottom: 3px solid transparent;
        }

        .navbar-public .nav-link:hover,
        .navbar-public .nav-link.active {
            color: var(--primary-green);
            border-bottom: 3px solid var(--primary-green);
        }

        .btn-login {
            background: var(--primary-green);
            color: white;
            padding: 10px 30px;
            border-radius: 6px;
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: #008f45;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 166, 81, 0.3);
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-green), #00c968);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.1)" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            opacity: 0.3;
        }

        .section-title {
            font-size: 36px;
            font-weight: 700;
            color: var(--primary-dark);
            margin-bottom: 20px;
        }

        .card-program {
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .card-program:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        .footer {
            background: var(--primary-dark);
            color: white;
            padding: 60px 0 20px;
        }

        .footer a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--primary-green);
        }

        .stats-box {
            background: white;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .stats-number {
            font-size: 48px;
            font-weight: 800;
            color: var(--primary-green);
        }

        .banner-ad {
            background: linear-gradient(135deg, #0066B3, #0088dd);
            color: white;
            padding: 40px;
            border-radius: 12px;
            margin: 40px 0;
        }
    </style>

    @stack('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-public sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('image/logo.png') }}" alt="Logo" style="height: 50px;" class="me-2">
                <span>Berbagi Asa</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('program') ? 'active' : '' }}" href="{{ route('program') }}">Program</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="{{ route('login') }}" class="btn btn-login">
                            <i class="fas fa-sign-in-alt me-2"></i> Login Admin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold mb-3">Berbagi Asa</h5>
                    <p class="text-white-50">
                        Program Khitan Gratis hasil kolaborasi Bazma dan Pertamina untuk mewujudkan kesehatan dan pendidikan anak Indonesia yang lebih baik.
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold mb-3">Link Cepat</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('home') }}">Beranda</a></li>
                        <li class="mb-2"><a href="{{ route('about') }}">Tentang Kami</a></li>
                        <li class="mb-2"><a href="{{ route('program') }}">Program</a></li>
                        <li class="mb-2"><a href="{{ route('login') }}">Login Admin</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 class="fw-bold mb-3">Partner</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://bazma.org" target="_blank">Bazma</a></li>
                        <li class="mb-2"><a href="https://www.pertamina.com" target="_blank">Pertamina</a></li>
                    </ul>
                    <div class="mt-3">
                        <a href="#" class="me-3"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <div class="text-center text-white-50">
                <p>&copy; {{ date('Y') }} Berbagi Asa - Bazma x Pertamina. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
