@extends('layouts.app')

@section('title', 'Standar Keselamatan')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/standar-keselamatan.css') }}">

<!-- =========================================
SAFETY HERO
========================================= -->

<section class="safety-hero">

    <div class="safety-overlay"></div>

    <div class="safety-hero-content">

        <span class="hero-label">
            STANDAR KEAMANAN & KESELAMATAN
        </span>

        <h1>
            Keselamatan adalah Prioritas Utama
            Dalam Setiap Pelayaran
        </h1>

        <p>
            PT Pasca Dana Sundari memastikan seluruh armada dilengkapi
            sistem keselamatan modern, alat evakuasi standar pelayaran,
            serta prosedur keamanan yang terintegrasi demi memberikan
            perjalanan yang aman, nyaman, dan terpercaya.
        </p>

        <div class="hero-buttons">
            <a href="#equipment" class="btn-primary">
                Lihat Peralatan
            </a>

            <a href="#system" class="btn-outline">
                Sistem Keselamatan
            </a>
        </div>

    </div>

</section>




<!-- =========================================
MAIN SAFETY SYSTEM
========================================= -->

<section class="main-safety-system" id="system">

    <div class="system-left">

        <span class="section-label">
            SAFETY MANAGEMENT
        </span>

        <h2>
            Sistem Keselamatan Modern
            Untuk Perlindungan Maksimal
        </h2>

        <p>
            Armada PT Pasca Dana Sundari menerapkan sistem keselamatan
            yang terintegrasi mulai dari alat keselamatan, jalur evakuasi,
            hingga kesiapan kru kapal dalam menghadapi kondisi darurat.
        </p>

        <div class="system-list">

            <div class="system-item">
                <i class="fa-solid fa-circle-check"></i>
                <span>Peralatan keselamatan tersedia di berbagai titik kapal</span>
            </div>

            <div class="system-item">
                <i class="fa-solid fa-circle-check"></i>
                <span>Standar pengecekan berkala terhadap alat keselamatan</span>
            </div>

            <div class="system-item">
                <i class="fa-solid fa-circle-check"></i>
                <span>Sistem penanganan keadaan darurat terintegrasi</span>
            </div>

            <div class="system-item">
                <i class="fa-solid fa-circle-check"></i>
                <span>Keselamatan penumpang menjadi prioritas utama</span>
            </div>

        </div>

    </div>

    <div class="system-right">

        <img src="assets/img/67.jpeg" alt="">

    </div>

</section>



<!-- =========================================
SAFETY EQUIPMENT
========================================= -->

<section class="equipment-section" id="equipment">

    <div class="section-header">

        <span>SAFETY EQUIPMENT</span>

        <h2>Peralatan Keselamatan Kapal</h2>

    </div>

    <div class="equipment-grid">

        <!-- LIFE BUOY -->
        <div class="equipment-card large">

            <img src="assets/img/61.jpeg" alt="">

            <div class="equipment-overlay">

                <span>01</span>

                <h3>Sekoci</h3>

                <p>
                    Perahu penyelamat tegap bermesin untuk evakuasi aman.
                </p>

            </div>

        </div>


        <!-- LIFE RAFT -->
        <div class="equipment-card">

            <img src="assets/img/59.jpeg" alt="">

            <div class="equipment-overlay">

                <span>02</span>

                <h3>Hydrant System</h3>

                <p>
                    Sistem pemadam darurat tersedia di area penting kapal.
                </p>

            </div>

        </div>


        <!-- HYDRANT -->
        <div class="equipment-card">

            <img src="assets/img/60.jpeg" alt="">

            <div class="equipment-overlay">

                <span>03</span>

                <h3>Life Buoy (Pelampung)</h3>

                <p>
                    Pelampung penyelamat yang ditempatkan di berbagai titik strategis
                    kapal untuk membantu proses penyelamatan darurat di laut.
                </p>

            </div>

        </div>


        <!-- LIFE JACKET -->
        <div class="equipment-card">

            <img src="assets/img/68.png" alt="">

            <div class="equipment-overlay">

                <span>04</span>

                <h3>Life Jacket</h3>

                <p>
                    Jaket keselamatan tersedia sesuai kapasitas penumpang untuk perlindungan maksimal.
                </p>

            </div>

        </div>


        <!-- SAFETY DECK -->
        <div class="equipment-card">

            <img src="assets/img/28.jpg" alt="">

            <div class="equipment-overlay">

                <span>05</span>

                <h3>Safety Deck Area</h3>

                <p>
                    Area dek dengan sistem keamanan dan jalur evakuasi yang jelas.
                </p>

            </div>

        </div>

        <!-- SAFETY DECK -->
        <div class="equipment-card">

            <img src="assets/img/62.jpeg" alt="">

            <div class="equipment-overlay">

                <span>06</span>

                <h3>Life Raft</h3>

                <p>
                     Perahu penyelamat darurat yang siap digunakan dalam kondisi evakuasi.
                </p>

            </div>

        </div>


    </div>

</section>


<!-- =========================================
CTA
========================================= -->

<section class="safety-cta">

    <div class="cta-box">

        <span>PT PASCA DANA SUNDARI</span>

        <h2>
            Mengutamakan Keselamatan,
            Profesionalisme dan Kepercayaan
        </h2>

        <a href="#" class="btn-primary">
            Jelajahi Armada
        </a>

    </div>

</section>

@endsection