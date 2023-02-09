<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon">
            <h5><b>Rekruitmen</b></h5>
        </div>
        <div class="sidebar-brand-text mx-3"></div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Fitur
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('position.index') }}">
            <i class="fas fa-user"></i>
        <span>Posisi Pekerjaan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pelamar.index') }}">
            <i class="fas fa-sort-amount-up"></i>
        <span>Pelamar</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
<!-- Sidebar -->
