@extends('layouts.app')

@section('title', 'Transformasi Perusahaan - PT Pasca Dana Sundari')
@section('meta_description', 'Transformasi PT Pasca Dana Sundari tahun 2023 sampai 2026 dalam memperkuat tata kelola, sistem manajemen, keselamatan, efisiensi armada, dan identitas korporasi.')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/tentang-modern.css') }}">

<section class="tentang-hero">
    <div class="tentang-hero-overlay"></div>

    <div class="tentang-hero-content">
        <span>TENTANG</span>

        <h1>Transformasi</h1>

        <p>
            Perjalanan strategis perusahaan dalam membangun tata kelola,
            keselamatan, profesionalitas, dan layanan penyeberangan yang lebih baik.
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

            <a href="{{ route('tentang.transformasi') }}"
               class="{{ request()->routeIs('tentang.transformasi') ? 'active' : '' }}">
                Transformasi
            </a>

            <a href="{{ route('tentang.logo') }}">Falsafah Logo</a>

        </aside>

        <main class="tentang-content transform-clean-content">

            <article>

                <header class="transform-intro">

                    <span class="tentang-label">
                        TRANSFORMATION JOURNEY
                    </span>

                    <h2>
                        Transformasi 2023–2026
                    </h2>

                    <p>
                        Transformasi dilakukan sebagai langkah strategis untuk
                        membangun perusahaan yang lebih profesional, terstruktur,
                        aman, efisien, dan berkelanjutan.
                    </p>

                    <div class="transform-summary">
                        <div>
                            <strong>2023</strong>
                            <span>Awal Penguatan Budaya Keselamatan</span>
                        </div>

                        <div>
                            <strong>49</strong>
                            <span>Prosedur Sistem Manajemen</span>
                        </div>

                        <div>
                            <strong>800+</strong>
                            <span>Halaman Dokumen Tata Kelola</span>
                        </div>
                    </div>

                </header>

                <section class="transform-report-layout">

                    <aside class="transform-report-nav">
                        <span>FOKUS TRANSFORMASI</span>

                        <a href="#tata-kelola">01. Tata Kelola</a>
                        <a href="#sistem-manajemen">02. Sistem Manajemen</a>
                        <a href="#propulsi-kapal">03. Propulsi Kapal</a>
                        <a href="#sdm-budaya">04. SDM & Budaya Kerja</a>
                        <a href="#identitas-korporasi">05. Identitas Korporasi</a>
                    </aside>

                    <div class="transform-report-main">

                        <section class="transform-chapter" id="tata-kelola">

                            <div class="transform-chapter-content">
                                <span>Tata Kelola</span>

                                <h3>
                                    Perbaikan Tata Kelola dan Peraturan Perusahaan
                                </h3>

                                <p>
                                    Transformasi dimulai dari pembenahan tata kelola
                                    perusahaan melalui pembentukan struktur kerja,
                                    penguatan aturan internal, dan penyusunan pedoman
                                    yang mendukung operasional perusahaan secara lebih
                                    profesional dan terukur.
                                </p>

                                <ul>
                                    <li>Keputusan Direktur tentang struktur organisasi, tugas, dan tanggung jawab.</li>
                                    <li>Keputusan Direktur tentang peraturan disiplin karyawan.</li>
                                    <li>Pengesahan Peraturan Perusahaan sebagai dasar tata kelola ketenagakerjaan.</li>
                                </ul>
                            </div>
                        </section>

                        <section class="transform-chapter" id="sistem-manajemen">

                            <div class="transform-chapter-content">
                                <span>Sistem Manajemen</span>

                                <h3>
                                    Penerapan Sistem Manajemen Terintegrasi
                                </h3>

                                <p>
                                    Sistem manajemen terintegrasi menjadi fondasi penting
                                    dalam memastikan operasional kapal, pelabuhan, dan
                                    gedung berjalan secara selamat, aman, nyaman, serta
                                    mampu memberikan pelayanan terbaik kepada pengguna jasa.
                                </p>

                                <div class="transform-highlight">
                                    KD.02/PDS-BPP/VIII/2024 menetapkan 49 prosedur
                                    dengan kurang lebih 800 halaman dokumen sistem manajemen.
                                </div>
                            </div>
                        </section>

                        <section class="transform-chapter" id="propulsi-kapal">

                            <div class="transform-chapter-content">
                                <span>Propulsi Kapal</span>

                                <h3>
                                    Modifikasi Sistem Propulsi Kapal
                                </h3>

                                <p>
                                    Modifikasi sistem propulsi pada KMP Tawes dan
                                    KMP Tunu Pratama Jaya 2888 menjadi salah satu
                                    langkah strategis perusahaan dalam meningkatkan
                                    efisiensi operasional dan mengurangi konsumsi
                                    bahan bakar kapal.
                                </p>
                            </div>
                        </section>

                        <section class="transform-chapter" id="sdm-budaya">

                            <div class="transform-chapter-content">
                                <span>SDM & Budaya Kerja</span>

                                <h3>
                                    Penguatan SDM dan Budaya Evaluasi Kinerja
                                </h3>

                                <p>
                                    Pengembangan sumber daya manusia dan budaya kerja
                                    dilakukan untuk membangun organisasi yang produktif,
                                    adaptif, bertanggung jawab, serta mampu melakukan
                                    evaluasi kinerja secara objektif dan terukur.
                                </p>

                                <div class="transform-highlight">
                                    Budaya evaluasi kinerja menjadi dasar perbaikan,
                                    inovasi, dan peningkatan pelayanan secara berkelanjutan.
                                </div>
                            </div>
                        </section>

                        <section class="transform-chapter" id="identitas-korporasi">

                            <div class="transform-chapter-content">
                                <span>Identitas Korporasi</span>

                                <h3>
                                    Pembaruan Identitas Korporasi
                                </h3>

                                <p>
                                    Pembaruan identitas korporasi dilakukan untuk
                                    memperkuat citra perusahaan, mencerminkan visi
                                    dan nilai baru, serta memberikan semangat kerja
                                    dalam mengembangkan bisnis perusahaan yang lebih baik.
                                </p>

                                <div class="transform-highlight">
                                    Redesain visi, misi, tagline, detail logo, dan
                                    penggunaannya menjadi bagian dari penguatan arah
                                    perusahaan ke depan.
                                </div>
                            </div>
                        </section>

                    </div>

                </section>

            </article>

        </main>

    </div>
</section>

@endsection