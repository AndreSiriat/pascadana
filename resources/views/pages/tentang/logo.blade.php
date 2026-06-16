@extends('layouts.app')

@section('title', 'Falsafah Logo - PT Pasca Dana Sundari')
@section('meta_description', 'Falsafah logo PT Pasca Dana Sundari sebagai identitas visual perusahaan yang mencerminkan transformasi, kepercayaan, keselamatan, dan profesionalisme.')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/tentang-modern.css') }}">

<section class="tentang-hero">
    <div class="tentang-hero-overlay"></div>

    <div class="tentang-hero-content">
        <span>TENTANG</span>
        <h1>Falsafah Logo</h1>
        <p>
            Identitas visual yang merepresentasikan transformasi, kepercayaan,
            profesionalisme, dan komitmen perusahaan dalam setiap pelayaran.
        </p>
    </div>
</section>

<section class="tentang-page">
    <div class="tentang-container">

        <aside class="tentang-sidebar">

            <a href="{{ route('tentang.profil') }}">Profil Perusahaan</a>
            <a href="{{ route('tentang.visi-misi') }}">Visi & Misi</a>
            <a href="{{ route('tentang.dewan-direksi') }}">Dewan Komisaris & Direksi</a>
            <a href="{{ route('tentang.struktur-organisasi') }}">Struktur Organisasi</a>
            <a href="{{ route('tentang.sejarah') }}">Sejarah Kami</a>
            <a href="{{ route('tentang.transformasi') }}">Transformasi</a>

            <a href="{{ route('tentang.logo') }}"
               class="{{ request()->routeIs('tentang.logo') ? 'active' : '' }}">
                Falsafah Logo
            </a>

        </aside>

        <main class="tentang-content logo-clean-content">

            <article>

                <header class="logo-philosophy-head">
                    <span class="tentang-label">BRAND PHILOSOPHY</span>

                    <h2>
                        Makna Logo PT Pasca Dana Sundari
                    </h2>

                    <p>
                        Logo PT Pasca Dana Sundari menjadi simbol transformasi
                        perusahaan menuju organisasi yang lebih modern, profesional,
                        aman, dan berkelanjutan dalam industri penyeberangan.
                    </p>
                </header>

                <section class="logo-main-display">

                    <div class="logo-display-card">
                        <img src="{{ asset('assets/img/17.png') }}"
                             alt="Logo PT Pasca Dana Sundari">

                        <div>
                            <span>TRANSFORMASI IDENTITAS</span>

                            <h3>
                                Simbol Keandalan, Integritas, dan Tanggung Jawab
                            </h3>

                            <p>
                                Dengan tetap mempertahankan bentuk dasar khas PDS,
                                logo ini hadir lebih modern, tegas, dan relevan dengan
                                arah transformasi perusahaan.
                            </p>
                        </div>
                    </div>

                </section>

                <section class="logo-elements-section">

                    <div class="logo-elements-head">
                        <span>VISUAL ELEMENTS</span>
                        <h3>Rasional Logo & Warna</h3>
                    </div>

                    <div class="logo-elements-grid">

                        <article class="logo-element-card">
                            <div class="logo-element-image">
                                <img src="{{ asset('assets/img/19.jpeg') }}" alt="Makna Bumerang">
                            </div>

                            <div class="logo-element-content">
                                <span>01</span>
                                <h4>Bumerang</h4>
                                <p>
                                    Melambangkan dinamika perusahaan dalam menghadapi
                                    tantangan operasional pelayaran dengan ketangguhan,
                                    konsistensi, dan strategi yang matang.
                                </p>
                            </div>
                        </article>

                        <article class="logo-element-card">
                            <div class="logo-element-image">
                                <img src="{{ asset('assets/img/20.jpeg') }}" alt="Makna Jajar Genjang dan Garis">
                            </div>

                            <div class="logo-element-content">
                                <span>02</span>
                                <h4>Jajar Genjang & Garis</h4>
                                <p>
                                    Merepresentasikan komitmen perusahaan terhadap
                                    keselamatan, profesionalisme, dan pelayanan
                                    penyeberangan yang konsisten.
                                </p>
                            </div>
                        </article>

                        <article class="logo-element-card">
                            <div class="logo-element-image">
                                <img src="{{ asset('assets/img/21.jpeg') }}" alt="Makna Warna Logo">
                            </div>

                            <div class="logo-element-content">
                                <span>03</span>
                                <h4>Makna Warna</h4>
                                <p>
                                    Biru mencerminkan kepercayaan dan profesionalisme.
                                    Merah melambangkan keberanian dan semangat transformasi.
                                    Hitam menunjukkan ketegasan serta integritas perusahaan.
                                </p>
                            </div>
                        </article>

                        <article class="logo-element-card">
                            <div class="logo-element-image">
                                <img src="{{ asset('assets/img/22.jpeg') }}" alt="Makna Lingkaran">
                            </div>

                            <div class="logo-element-content">
                                <span>04</span>
                                <h4>Lingkaran</h4>
                                <p>
                                    Menjadi simbol kesatuan, kesinambungan, dan komitmen
                                    perusahaan dalam menjaga pelayanan yang aman,
                                    terpercaya, dan berkelanjutan.
                                </p>
                            </div>
                        </article>

                    </div>

                </section>

            </article>

        </main>

    </div>
</section>

@endsection