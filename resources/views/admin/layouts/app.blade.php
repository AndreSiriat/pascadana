<!DOCTYPE html>
<html lang="id">

<head>
    @include('admin.partials.head')
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