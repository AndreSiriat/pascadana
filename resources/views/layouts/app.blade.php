<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'PT Pasca Dana Sundari | PDS Ferry Indonesia - Trusted Voyage')</title>

    <meta name="description" content="@yield('meta_description', 'PT Pasca Dana Sundari (PDS Ferry) menyediakan layanan transportasi penyeberangan yang aman, profesional, dan terpercaya di Indonesia.')">

    <link rel="canonical" href="{{ url()->current() }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/200.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/200.png') }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'PT Pasca Dana Sundari | PDS Ferry')">
    <meta property="og:description" content="@yield('og_description', 'PT Pasca Dana Sundari (PDS Ferry) - Trusted Voyage, layanan transportasi penyeberangan yang aman dan terpercaya.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/img/107.png') }}">

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "PT Pasca Dana Sundari",
        "alternateName": "PDS Ferry",
        "url": "https://pascadanasundari.com",
        "logo": "https://pascadanasundari.com/assets/img/107.png",
        "description": "PT Pasca Dana Sundari (PDS Ferry) merupakan perusahaan jasa penyeberangan Indonesia dengan layanan ferry yang aman, profesional, dan terpercaya.",
        "sameAs": [
            "https://instagram.com/pdsferry"
        ]
    }
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

    @yield('schema')
</head>

<body style="margin: 0; padding: 0; overflow-x: hidden; background-color: #000;">

    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>