@extends('layouts.app')

@section('title', 'Manajemen')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/manajemen.css') }}">

<section class="safety-hero">

    <div class="safety-overlay"></div>

    <img src="{{ asset('assets/img/15.jpeg') }}" alt="Keamanan dan Keselamatan Pelayaran">

    <div class="safety-hero-content">

    <div class="hero-breadcrumb">
        <a href="/">Beranda</a>
        <span>/</span>
        <a href="/tentang-kami">Tentang Kami</a>
        <span>/</span>
        <strong>Manajemen</strong>
    </div>

    <span>PROFESSIONAL CREW MANAGEMENT</span>

    <h1>
        Manajemen Armada dan 
        Kru Profesional
    </h1>

    <p>
        PT Pasca Dana Sundari menerapkan sistem manajemen armada dan
        sumber daya manusia yang profesional
    </p>

</div>

</section>


<section class="crew-management-section">

    <div class="crew-container">

        <div class="crew-image-wrapper">
            <div class="crew-image-card">
                
                <img src="{{ asset('assets/img/32.jpeg') }}" alt="Manajemen Armada dan Kru">
                <div class="crew-overlay-card"></div>
                
                <div class="crew-floating-badge">
                    PROFESSIONAL CREW MANAGEMENT
                </div>

            </div>
        </div>

        <div class="crew-content">

            <span class="mini-title">CREW & FLEET MANAGEMENT</span>

            <h2>
                Manajemen Armada dan 
                Kru Profesional
            </h2>

            <p>
                PT Pasca Dana Sundari menerapkan sistem manajemen armada dan
                sumber daya manusia yang profesional untuk memastikan operasional
                pelayaran berjalan aman, disiplin, dan efisien.
            </p>

            <div class="crew-feature-grid">

                <div class="crew-feature">
                    <div class="feature-line"></div>
                    <div>
                        <h3>Pelatihan Kru Berkala</h3>
                        <span>
                            Peningkatan kompetensi operasional dan keselamatan melalui training rutin.
                        </span>
                    </div>
                </div>

                <div class="crew-feature">
                    <div class="feature-line"></div>
                    <div>
                        <h3>Sistem Operasional Modern</h3>
                        <span>
                            Pengelolaan armada dengan prosedur kerja profesional dan terstruktur.
                        </span>
                    </div>
                </div>

                <div class="crew-feature">
                    <div class="feature-line"></div>
                    <div>
                        <h3>Standar Pelayanan Andal</h3>
                        <span>
                            Komitmen menghadirkan pelayanan transportasi laut yang aman dan terpercaya.
                        </span>
                    </div>
                </div>

            </div>

            <div class="crew-stats">

                <div class="crew-stat-box">
                    <h4>Professional</h4>
                    <span>Crew Mangement</span>
                </div>

                <div class="crew-stat-box">
                    <h4>Safety</h4>
                    <span>Operational Priority</span>
                </div>

                <div class="crew-stat-box">
                    <h4>Reliable</h4>
                    <span>Maritime Service</span>
                </div>

            </div>

        </div>

    </div>

</section>

@endsection