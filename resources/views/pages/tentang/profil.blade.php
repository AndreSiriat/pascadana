@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/tentang-modern.css') }}">

<section class="tentang-hero">
    <div class="tentang-hero-overlay"></div>

    <div class="tentang-hero-content">
        <span>TENTANG</span>

        <h1>
            Profil Perusahaan
        </h1>

        <p>
            Mendukung konektivitas, mobilitas, dan pertumbuhan bisnis melalui
            layanan penyeberangan yang aman, profesional, dan terpercaya.
        </p>
    </div>
</section>

<section class="tentang-page">
    <div class="tentang-container">

        <aside class="tentang-sidebar">

    <a href="{{ route('tentang.profil') }}"
       class="{{ request()->routeIs('tentang.profil') ? 'active' : '' }}">
        Profil Perusahaan
    </a>

    <a href="{{ route('tentang.visi-misi') }}"
       class="{{ request()->routeIs('tentang.visi-misi') ? 'active' : '' }}">
        Visi & Misi
    </a>

    <a href="{{ route('tentang.dewan-direksi') }}"
       class="{{ request()->routeIs('tentang.dewan-direksi') ? 'active' : '' }}">
        Dewan Komisaris & Direksi
    </a>

    <a href="{{ route('tentang.struktur-organisasi') }}"
       class="{{ request()->routeIs('tentang.struktur-organisasi') ? 'active' : '' }}">
        Struktur Organisasi
    </a>

    <a href="{{ route('tentang.sejarah') }}"
       class="{{ request()->routeIs('tentang.sejarah') ? 'active' : '' }}">
        Sejarah Kami
    </a>

    <a href="{{ route('tentang.transformasi') }}"
       class="{{ request()->routeIs('tentang.transformasi') ? 'active' : '' }}">
        Transformasi
    </a>

    <a href="{{ route('tentang.logo') }}"
       class="{{ request()->routeIs('tentang.logo') ? 'active' : '' }}">
        Falsafah Logo
    </a>

</aside>

        <main class="tentang-content">

            <span class="tentang-label">
                COMPANY OVERVIEW
            </span>

            <h2>
                Mendukung Bisnis dan Konektivitas Wilayah
            </h2>

            <p>
                PT Pasca Dana Sundari merupakan perusahaan jasa transportasi
                penyeberangan yang berperan dalam mendukung mobilitas masyarakat,
                kendaraan, dan aktivitas logistik antar wilayah.
            </p>

            <p>
                Melalui tata kelola yang semakin terstruktur, perusahaan terus
                memperkuat standar operasional, keselamatan, dan kualitas layanan
                untuk menciptakan perjalanan yang aman, teratur, dan terpercaya.
            </p>

        </main>

    </div>
</section>

@endsection