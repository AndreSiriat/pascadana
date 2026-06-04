@extends('layouts.app')

@section('title', 'Visi & Misi')

<link rel="stylesheet" href="{{ asset('assets/css/visi-misi.css') }}">

@section('content')

<!-- ================= HERO ================= -->

<section class="tunu-hero">
    <div class="overlay"></div>

    <div class="tunu-hero-content">
        <span class="tagline">TENTANG KAMI</span>

        <h1>Visi & Misi</h1>

        <p>
            Komitmen perusahaan dalam menghadirkan layanan transportasi laut yang modern, aman, dan berkelanjutan.
        </p>

        <div class="hero-buttons">
            <a href="#visi-section" class="btn-primary">Visi</a>
            <a href="#misi-section" class="btn-outline">Misi</a>
        </div>
    </div>
</section>


<!-- ================= VISI ================= -->

<section id="visi-section" class="visi-section">

    <div class="vm-container">

        <div class="visi-box">

            <span class="small-title">
                VISI PERUSAHAAN
            </span>

            <h2>
                Menjadi Perusahaan Jasa Penyeberangan Kelas Global
            </h2>

            <p>
                Menjadi Perusahaan Jasa Penyeberangan Kelas Global yang
                Inovatif, Berdaya Saing, Ramah Lingkungan, Serta Memberikan
                Nilai Tambah Berkelanjutan Bagi Seluruh Pemangku
                Kepentingan.
            </p>

        </div>

    </div>

</section>

<!-- ================= MISI ================= -->

<section id="misi-section" class="misi-section">

    <div class="vm-container">

        <div class="section-header">

            <span>MISI PERUSAHAAN</span>

            <h2>
                Langkah Strategis Menuju Masa Depan Maritim Indonesia
            </h2>

        </div>

        <div class="misi-grid">

            <div class="misi-card">
                <h3>01</h3>
                <p>
                    Menghadirkan Layanan Transportasi Laut Yang Aman dan Terpercaya
                </p>
            </div>

            <div class="misi-card">
                <h3>02</h3>
                <p>
                    Meningkatkan Nilai Ekonomi Perusahaan secara Berkelanjutan
                    untuk Memberikan Keuntungan Optimal bagi Pemegang Saham.
                </p>
            </div>

            <div class="misi-card">
                <h3>03</h3>
                <p>
                    Mengutamakan Keselamatan, Kenyamanan, dan Kepuasan Pelanggan
                    melalui Inovasi Layanan.
                </p>
            </div>

            <div class="misi-card">
                <h3>04</h3>
                <p>
                    Menciptakan Lingkungan Kerja yang Sejahtera, Inklusif,
                    dan Profesional guna Meningkatkan Kualitas SDM.
                </p>
            </div>

            <div class="misi-card">
                <h3>05</h3>
                <p>
                    Berkomitmen pada Kelestarian Lingkungan dengan
                    Menerapkan Praktik Pelayaran Hijau (Green Shipping).
                </p>
            </div>

            <div class="misi-card">
                <h3>06</h3>
                <p>
                    Menjadi Mitra Strategis Pemerintah dan Masyarakat dalam
                    Mendukung Konektivitas serta Pembangunan Ekonomi Maritim Nasional.
                </p>
            </div>

        </div>

    </div>

</section>

@endsection