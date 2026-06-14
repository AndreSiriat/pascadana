@extends('layouts.app')

@section('title', 'Transformasi')

<link rel="stylesheet" href="{{ asset('assets/css/transformasi.css') }}">

@section('content')

<section class="transform-video-style" id="transformasi">

    <div class="transform-video-title">
        <span>TRANSFORMASI 2023</span>
        <h2>
            Perubahan Menuju Perusahaan
            yang Lebih Profesional
        </h2>
    </div>

    <div class="transform-panel-wrap">


        <div class="transform-panel">

            <div class="transform-card-bg">
                <img src="{{ asset('assets/img/72.jpeg') }}" alt="">
            </div>

            <div class="transform-panel-content">
                <div class="transform-icon">
                    <i class="fa-solid fa-sitemap"></i>
                </div>

                <h3>Tata Kelola</h3>

                <p>
                    Struktur organisasi dan pembagian tanggung jawab yang lebih jelas,
                    terukur, dan akuntabel.
                </p>
            </div>

        </div>

        <div class="transform-panel">

            <div class="transform-card-bg">
                <img src="{{ asset('assets/img/72.jpeg') }}" alt="">
            </div>

            <div class="transform-panel-content">
                <div class="transform-icon">
                    <i class="fa-solid fa-sitemap"></i>
                </div>

                <h3>Tata Kelola</h3>

                <p>
                    Struktur organisasi dan pembagian tanggung jawab yang lebih jelas,
                    terukur, dan akuntabel.
                </p>
            </div>

        </div>

        <div class="transform-panel">

            <div class="transform-card-bg">
                <img src="{{ asset('assets/img/71.jpeg') }}" alt="">
            </div>

            <div class="transform-panel-content">
                <div class="transform-icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <h3>ISM Code</h3>

                <p>
                    Penerapan standar keselamatan sebagai pedoman operasional perusahaan.
                </p>
            </div>

        </div>

        <div class="transform-panel">

            <div class="transform-card-bg">
                <img src="{{ asset('assets/img/70.jpeg') }}" alt="">
            </div>

            <div class="transform-panel-content">
                <div class="transform-icon">
                    <i class="fa-solid fa-users-gear"></i>
                </div>

                <h3>SDM & Budaya Kerja</h3>

                <p>
                    Penguatan kompetensi personel serta pembentukan budaya kerja
                    yang lebih profesional.
                </p>
            </div>

        </div>

        <div class="transform-panel">

            <div class="transform-card-bg">
                <img src="{{ asset('assets/img/24.png') }}" alt="">
            </div>

            <div class="transform-panel-content">
                <div class="transform-icon">
                    <i class="fa-solid fa-clipboard-check"></i>
                </div>

                <h3>SOP & Sistem Kerja</h3>

                <p>
                    Standarisasi proses kerja agar operasional lebih rapi,
                    efektif, dan konsisten.
                </p>
            </div>

        </div>


</section>

@endsection