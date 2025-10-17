<div class="position-sticky pt-3 text-center sidebar-header">
    <img src="{{ asset('image/logo.png') }}" alt="Logo Pertamina" class="logo-pertamina">
    <h4>Berbagi Asa</h4>
    <h6>Menyalakan Harapan, Mewujudkan Pendidikan</h6>
    <hr class="border-light">
    <ul class="nav flex-column text-start px-3">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('recipients.index') ? 'active' : '' }}"
                href="{{ route('recipients.index') }}">
                <i class="fas fa-users me-2"></i> Data Penerima
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('registration') ? 'active' : '' }}"
                href="{{ route('registration') }}">
                <i class="fa-solid fa-user-check me-2"></i> Registrasi
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('recipients.scan') ? 'active' : '' }}"
                href="{{ route('recipients.scan') }}">
                <i class="fas fa-qrcode me-2"></i> Penyaluran
            </a>
        </li>
        <li class="nav-item mt-4">
            <a class="nav-link text-light" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt me-2"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>
