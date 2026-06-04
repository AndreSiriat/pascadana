<header class="admin-navbar">

    <div>
        <h1>@yield('page-title', 'Dashboard CMS')</h1>
        <p>@yield('page-description', 'Kelola konten website PDS Ferry')</p>
    </div>

    <div class="navbar-profile">

        <div class="profile-text">
            <strong>{{ Auth::user()->name ?? 'Admin' }}</strong>
            <span>Administrator</span>
        </div>

        <div class="profile-avatar">
            {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
        </div>

        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf

            <button type="submit" class="logout-btn">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </button>
        </form>

    </div>

</header>