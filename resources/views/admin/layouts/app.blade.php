<!DOCTYPE html>
<html lang="id">

<head>
    @include('admin.partials.head')

    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/200.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/200.png') }}">
</head>

<body>

    <div class="admin-layout">

        @include('admin.partials.sidebar')

        <main class="admin-main">

            @include('admin.partials.navbar')

            <section class="admin-content">
                @yield('content')
            </section>

        </main>

    </div>

</body>

</html>