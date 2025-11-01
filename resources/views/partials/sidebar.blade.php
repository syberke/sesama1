<div class="sidebar-inner d-flex flex-column justify-content-between h-100">

    <!-- Bagian Atas: Profil + Navigasi -->
    <div>
        <!-- User Profile -->
        <div class="text-center mb-3">
            <div class="d-flex justify-content-center mb-2">
                <div class="rounded-circle bg-white d-flex align-items-center justify-content-center"
                    style="width: 48px; height: 48px; background: linear-gradient(135deg, #ffffff );">
                    <span class="fw-bold text-primary"
                        style="font-size: 18px;">{{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}</span>
                </div>
            </div>
            <h5 class="text-white fw-bold mb-1" style="font-size:16px">
                {{ Auth::user()->name ?? 'Admin' }}
            </h5>
            <p class="text-white-50 small mb-0" style="font-size:12px">
                {{ Auth::user()->email ?? 'admin@ppdb.com' }}
            </p>
        </div>

        <!-- Navigasi -->
        <ul class="nav flex-column">
            <li class="nav-item mb-1">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <i class="fas fa-home me-3"></i> Dashboard
                </a>
            </li>
            <li class="nav-item mb-1">
                <a class="nav-link {{ request()->routeIs('recipients.index') ? 'active' : '' }}"
                    href="{{ route('recipients.index') }}">
                    <i class="fas fa-users me-3"></i> Data Penerima
                </a>
            </li>
            <li class="nav-item mb-1">
                <a class="nav-link {{ request()->routeIs('registration') ? 'active' : '' }}"
                    href="{{ route('registration') }}">
                    <i class="fas fa-user-plus me-3"></i> Registrasi
                </a>
            </li>
            <li class="nav-item mb-1">
                <a class="nav-link {{ request()->routeIs('recipients.scan') ? 'active' : '' }}"
                    href="{{ route('recipients.scan') }}">
                    <i class="fas fa-hand-holding-heart me-3"></i> Penyaluran
                </a>
            </li>
        </ul>
    </div>

    <!-- Bagian Bawah: Branding + Logout -->
    <div class="sidebar-footer mt-auto pt-3 text-center">
        <div class="d-flex align-items-center justify-content-center mb-3">
            <div class="me-2">
                <img src="{{ asset('image/logo.png') }}" alt="logo"
                    style="width:40px;height:40px;border-radius:8px;object-fit:cover;"
                    onerror="this.onerror=null;this.src='{{ asset('image/foto.png') }}';">
            </div>
            <div class="text-white text-start">
                <div class="fw-bold small">SESAMA</div>
                <div class="text-white-50" style="font-size: 12px;">bazma x pertamina</div>
            </div>
        </div>

        <a class="btn btn-light text-primary fw-bold rounded-pill w-100"
            href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            style="font-size: 14px;">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>
<style>
    /* Pastikan sidebar mobile tetap biru */
.sidebar-mobile.offcanvas {
    background-color: var(--primary-blue) !important;
    color: white !important;
}

.sidebar-mobile .nav-link {
    color: white !important;
}

.sidebar-mobile .nav-link.active {
    background: white !important;
    color: var(--primary-blue) !important;
}
    .sidebar-mobile .nav-link:hover,
        .sidebar-mobile .nav-link.active {
            color: var(--primary-blue);
            background-color: white;
            transform: translateX(5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
</style>
