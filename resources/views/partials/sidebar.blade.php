<div class="position-sticky pt-4 text-center sidebar-header">
    <img src="{{ asset('image/logo.png') }}" alt="Logo" class="logo-pertamina">
    <h4>Berbagi Asa</h4>
    <h6>Menyalakan Harapan, Mewujudkan Pendidikan</h6>
    <hr class="mx-3" style="border-color: var(--border-color);">

    <ul class="nav flex-column text-start px-2 mt-4">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}">
                <i class="fas fa-home me-2"></i> Dashboard
            </a>
        </li>

        <!-- Dropdown: Manajemen Data -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#dataMenu" role="button"
               aria-expanded="{{ request()->routeIs('recipients.*') || request()->routeIs('registration') ? 'true' : 'false' }}">
                <i class="fas fa-database me-2"></i> Manajemen Data
                <i class="fas fa-chevron-down float-end mt-1"></i>
            </a>
            <div class="collapse {{ request()->routeIs('recipients.*') || request()->routeIs('registration') ? 'show' : '' }}" id="dataMenu">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('recipients.index') ? 'active' : '' }}"
                            href="{{ route('recipients.index') }}">
                            <i class="fas fa-users me-2"></i> Data Penerima
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('registration') ? 'active' : '' }}"
                            href="{{ route('registration') }}">
                            <i class="fas fa-user-check me-2"></i> Registrasi
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Dropdown: Penyaluran -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#distributionMenu" role="button"
               aria-expanded="{{ request()->routeIs('recipients.scan') ? 'true' : 'false' }}">
                <i class="fas fa-hand-holding-heart me-2"></i> Penyaluran
                <i class="fas fa-chevron-down float-end mt-1"></i>
            </a>
            <div class="collapse {{ request()->routeIs('recipients.scan') ? 'show' : '' }}" id="distributionMenu">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('recipients.scan') ? 'active' : '' }}"
                            href="{{ route('recipients.scan') }}">
                            <i class="fas fa-qrcode me-2"></i> Scan QR Code
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <hr class="mx-3 my-3" style="border-color: var(--border-color);">

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt me-2"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>
