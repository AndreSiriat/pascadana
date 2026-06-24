<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'PT Pasca Dana Sundari | PDS Ferry Indonesia - Trusted Voyage')</title>

    <meta name="description" content="@yield('meta_description', 'PT Pasca Dana Sundari (PDS Ferry) menyediakan layanan transportasi penyeberangan yang aman, profesional, dan terpercaya di Indonesia.')">

    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/37.png') }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'PT Pasca Dana Sundari')">
    <meta property="og:description" content="@yield('og_description', 'Trusted Voyage - Ferry Transportation Services')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/img/107.png') }}">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "PT Pasca Dana Sundari",
        "url": "https://pascadanasundari.com",
        "logo": "https://pascadanasundari.com/assets/img/107.png"
    }
    </script>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- CSS Utama -->
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body style="margin: 0; padding: 0; overflow-x: hidden; background-color: #000;">

    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>