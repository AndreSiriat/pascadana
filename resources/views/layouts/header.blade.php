<link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<nav class="navbar navbar-expand-lg custom-navbar fixed-top">
    <div class="container">

        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/7.png') }}" alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <span class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            
            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">
                        Beranda
                    </a>
                </li>

                <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle
        {{
            request()->routeIs('tentang-kami') ||
            request()->routeIs('visi-misi') ||
            request()->routeIs('alma') ||
            request()->routeIs('keselamatan') ||
            request()->routeIs('kelaikan') ||
            request()->routeIs('manajemen')
            ? 'active' : ''
        }}"
       href="#"
       role="button"
       data-bs-toggle="dropdown"
       aria-expanded="false">
        Tentang Kami
    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('tentang-kami') ? 'active' : '' }}" href="{{ route('tentang-kami') }}">
                                Profil Perusahaan
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('visi-misi') ? 'active' : '' }}" href="{{ route('visi-misi') }}">
                                Visi & Misi
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('kapal') || request()->routeIs('kmp-tunu') || request()->routeIs('kmp-tawes') || request()->routeIs('standar-keselamatan') ? 'active' : '' }}"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Armada
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="/kapal">Kapal</a>
                        </li>

                        <li>
                            <a class="dropdown-item {{ request()->routeIs('kmp-tunu') ? 'active' : '' }}" href="{{ route('kmp-tunu') }}">
                                KMP. Tunu Pratama Jaya 2888
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item {{ request()->routeIs('kmp-tawes') ? 'active' : '' }}" href="{{ route('kmp-tawes') }}">
                                KMP. Tawes
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item {{ request()->routeIs('standar-keselamatan') ? 'active' : '' }}" href="{{ route('standar-keselamatan') }}">
                                Standar Keamanan
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('berita*') || request()->is('maritim-policy*') ? 'active' : '' }}"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Berita
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item {{ request()->is('berita*') ? 'active' : '' }}" href="/berita">
                                Operasional
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item {{ request()->is('maritim-policy*') ? 'active' : '' }}" href="/maritim-policy">
                                Peraturan Maritim
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact*') ? 'active' : '' }}" href="/kritik-saran">
                        Kritik & Saran
                    </a>
                </li>

            </ul>

            <div class="navbar-right">
            <a href="#" class="search-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            
            
            <a href="{{ route('kapal') }}#armada-kami" class="route-btn">
                Jelajah Rute
            </a>
        </div>

                </div>

            </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const navbarCollapse = document.getElementById("navbarNav");
    const navbarToggler = document.querySelector(".navbar-toggler");

    // Inisialisasi Bootstrap Collapse Instance
    const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
        toggle: false
    });

    // Handle klik tombol hamburger
    navbarToggler.addEventListener("click", function () {
        if (navbarCollapse.classList.contains("show")) {
            bsCollapse.hide();
            navbarToggler.setAttribute("aria-expanded", "false");
        } else {
            bsCollapse.show();
            navbarToggler.setAttribute("aria-expanded", "true");
        }
    });

    // Otomatis menutup menu navbar setelah link diklik (khusus tampilan mobile)
    const navLinks = document.querySelectorAll(
        "#navbarNav .dropdown-item, #navbarNav .nav-link:not(.dropdown-toggle)"
    );

    navLinks.forEach(link => {
        link.addEventListener("click", function () {
            if (window.innerWidth < 992) {
                bsCollapse.hide();
                navbarToggler.setAttribute("aria-expanded", "false");
            }
        });
    });

    // Sinkronisasi status aria-expanded saat collapsed/expanded lewat Bootstrap event
    navbarCollapse.addEventListener("hidden.bs.collapse", function () {
        navbarToggler.setAttribute("aria-expanded", "false");
    });

    navbarCollapse.addEventListener("shown.bs.collapse", function () {
        navbarToggler.setAttribute("aria-expanded", "true");
    });
});
</script>