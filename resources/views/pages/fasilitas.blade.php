@extends('layouts.app')

@section('title', 'Fasilitas')

<link rel="stylesheet" href="{{ asset('assets/css/fasilitas.css') }}">

@section('content')

<!-- ================= HERO ================= -->

<section class="fasilitas-hero">

    <img src="{{ asset('assets/img/3.png') }}" alt="">

    <div class="hero-overlay"></div>

    <div class="hero-content">

        <span>PREMIUM FERRY EXPERIENCE</span>

        <h1>
            Fasilitas <br>
            Kapal Kami
        </h1>

        <p>
            Menghadirkan pengalaman pelayaran yang aman,
            nyaman, modern, dan berkelas untuk seluruh penumpang.
        </p>

        <a href="#kapal-section" class="hero-btn">
            Explore Facilities
        </a>

    </div>

</section>

<!-- ================= INTRO ================= -->

<section class="intro-section">

    <div class="intro-container">

        <div class="intro-left">

            <span class="mini-title">
                ONBOARD EXPERIENCE
            </span>

            <h2>
                Kenyamanan dan Keamanan
                Dalam Setiap Perjalanan
            </h2>

        </div>

        <div class="intro-right">

            <p>
                PT Pasca Dana Sundari menghadirkan fasilitas kapal modern
                dengan standar keselamatan tinggi, ruang penumpang nyaman,
                serta layanan profesional untuk mendukung pengalaman
                perjalanan laut yang berkualitas.
            </p>

        </div>

    </div>

</section>

<!-- ================= TUNU ================= -->

<section class="kapal-section" id="kapal-section">

    <div class="kapal-container">

        <div class="kapal-image">

            <img src="{{ asset('assets/img/3.png ') }}" alt="">

        </div>

        <div class="kapal-content">

            <span class="kapal-label">
                KAPAL 01
            </span>

            <h2>
                KM TUNU
            </h2>

            <p>
                Kapal modern dengan fasilitas premium untuk mendukung
                kenyamanan penumpang selama perjalanan laut.
            </p>

            <div class="facility-grid">

                <div class="facility-card">
                    <h3>Executive Lounge</h3>
                </div>

                <div class="facility-card">
                    <h3>VIP Cabin</h3>
                </div>

                <div class="facility-card">
                    <h3>Cafe Area</h3>
                </div>

                <div class="facility-card">
                    <h3>Safety System</h3>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================= TAWES ================= -->

<section class="kapal-section reverse">

    <div class="kapal-container">

        <div class="kapal-content">

            <span class="kapal-label">
                KAPAL 02
            </span>

            <h2>
                KM TAWES
            </h2>

            <p>
                Dirancang untuk memberikan pengalaman pelayaran yang efisien,
                aman, dan nyaman dengan teknologi operasional modern.
            </p>

            <div class="facility-grid">

                <div class="facility-card">
                    <h3>Comfort Seating</h3>
                </div>

                <div class="facility-card">
                    <h3>Entertainment Area</h3>
                </div>

                <div class="facility-card">
                    <h3>Navigation System</h3>
                </div>

                <div class="facility-card">
                    <h3>Passenger Deck</h3>
                </div>

            </div>

        </div>

        <div class="kapal-image">

            <img src="{{ asset('assets/img/tawes.jpg') }}" alt="">

        </div>

    </div>

</section>

<!-- ================= GALLERY ================= -->

<section class="gallery-section">

    <div class="section-title">

        <span>GALLERY</span>

        <h2>
            Onboard Atmosphere
        </h2>

    </div>

    <div class="gallery-wrapper">

        <div class="gallery-item">
            <img src="{{ asset('assets/img/galeri1.jpg') }}" alt="">
        </div>

        <div class="gallery-item">
            <img src="{{ asset('assets/img/galeri2.jpg') }}" alt="">
        </div>

        <div class="gallery-item">
            <img src="{{ asset('assets/img/galeri3.jpg') }}" alt="">
        </div>

        <div class="gallery-item">
            <img src="{{ asset('assets/img/galeri4.jpg') }}" alt="">
        </div>

    </div>

</section>

<!-- ================= EXPERIENCE ================= -->

<section class="experience-section">

    <div class="experience-container">

        <div class="exp-box">

            <h2>100%</h2>

            <p>
                Keselamatan Operasional
            </p>

        </div>

        <div class="exp-box">

            <h2>24H</h2>

            <p>
                Monitoring Sistem
            </p>

        </div>

        <div class="exp-box">

            <h2>MODERN</h2>

            <p>
                Teknologi Pelayaran
            </p>

        </div>

        <div class="exp-box">

            <h2>ECO</h2>

            <p>
                Green Shipping
            </p>

        </div>

    </div>

</section>

@endsection