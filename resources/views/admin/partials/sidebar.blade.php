<aside class="admin-sidebar">

    <div class="sidebar-brand">
        <div class="brand-logo">
            PDS
        </div>
        <div>
            <h3>PDS Ferry</h3>
            <span>Admin CMS</span>
        </div>
    </div>

    <nav class="sidebar-menu">

        <a href="{{ route('admin.berita.index') }}"
           class="sidebar-link {{ request()->routeIs('admin.berita.*') ? 'active' : '' }}">
            <i class="fa-solid fa-newspaper"></i>
            <span>Berita</span>
        </a>

        <a href="{{ route('admin.maritim-policy.index') }}"
           class="sidebar-link {{ request()->routeIs('admin.maritim-policy.*') ? 'active' : '' }}">
            <i class="fa-solid fa-file-contract"></i>
            <span>Peraturan</span>
        </a>

        <a href="{{ route('admin.kritik-saran.index') }}"
            class="sidebar-link {{ request()->routeIs('admin.kritik-saran.*') ? 'active' : '' }}">

                <i class="fa-solid fa-comments"></i>

                <span>
                    Kritik & Saran
                </span>

            </a>

    </nav>

</aside>