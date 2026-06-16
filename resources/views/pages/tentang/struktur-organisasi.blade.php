@extends('layouts.app')

@section('title', 'Struktur Organisasi - PT Pasca Dana Sundari')
@section('meta_description', 'Struktur organisasi PT Pasca Dana Sundari dalam mendukung tata kelola perusahaan yang profesional, terstruktur, dan bertanggung jawab.')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/tentang-modern.css') }}">

<section class="tentang-hero">
    <div class="tentang-hero-overlay"></div>

    <div class="tentang-hero-content">
        <span>TENTANG</span>
        <h1>Struktur Organisasi</h1>
        <p>
            Susunan organisasi perusahaan dalam mendukung tata kelola,
            koordinasi kerja, dan operasional yang profesional.
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

        <main class="tentang-content wide-content">

            <article>

                <header class="tentang-article-head">
                    <span class="tentang-label">ORGANIZATION STRUCTURE</span>

                    <h2>Manajemen Perusahaan</h2>

                    <p>
                        Struktur organisasi PT Pasca Dana Sundari dirancang untuk
                        memperjelas fungsi kerja, jalur koordinasi, dan tanggung
                        jawab setiap unit dalam mendukung operasional penyeberangan.
                    </p>
                </header>

                <section class="org-modern-section">

                    <div class="org-scroll-hint">
                        Geser ke samping untuk melihat struktur lengkap
                    </div>

                    <div class="org-modern-scroll">

                        <div class="org-modern-chart">

    <svg class="org-lines" viewBox="0 0 1180 360" preserveAspectRatio="none">
        <!-- Direksi ke garis utama -->
        <line x1="590" y1="72" x2="590" y2="130" />

        <!-- Garis horizontal utama -->
        <line x1="120" y1="130" x2="1060" y2="130" />

        <!-- Garis turun ke level 1 -->
        <line x1="120" y1="130" x2="120" y2="175" />
        <line x1="308" y1="130" x2="308" y2="175" />
        <line x1="496" y1="130" x2="496" y2="175" />
        <line x1="684" y1="130" x2="684" y2="175" />
        <line x1="872" y1="130" x2="872" y2="175" />
        <line x1="1060" y1="130" x2="1060" y2="175" />

        <!-- Garis turun ke level 2 -->
        <line x1="120" y1="252" x2="120" y2="302" />
        <line x1="308" y1="252" x2="308" y2="302" />
        <line x1="496" y1="252" x2="496" y2="302" />
        <line x1="684" y1="252" x2="684" y2="302" />
        <line x1="872" y1="252" x2="872" y2="302" />
    </svg>

    <div class="org-node org-main" style="left:505px; top:20px;">
        DIREKSI
    </div>

    <div class="org-node org-two" style="left:50px; top:175px;">
        <strong>KESELAMATAN KESEHATAN<br>DAN LINGKUNGAN</strong>
        <span>DPA</span>
    </div>

    <div class="org-node org-two" style="left:238px; top:175px;">
        <strong>PENGAWAS INTERNAL</strong>
        <span>KEPALA SPI</span>
    </div>

    <div class="org-node org-two" style="left:426px; top:175px;">
        <strong>PERWAKILAN</strong>
        <span>MANAGER</span>
    </div>

    <div class="org-node org-two" style="left:614px; top:175px;">
        <strong>USAHA & TEKNIK</strong>
        <span>MANAGER</span>
    </div>

    <div class="org-node org-two" style="left:802px; top:175px;">
        <strong>KEU & SDM UMUM</strong>
        <span>MANAGER</span>
    </div>

    <div class="org-node org-two" style="left:990px; top:175px;">
        <strong>ARMADA KAPAL</strong>
        <span>NAKHODA</span>
    </div>

    <div class="org-node org-three" style="left:50px; top:302px;">
        PENGENDALI<br>DOKUMEN
    </div>

    <div class="org-node org-three" style="left:238px; top:302px;">
        AUDITOR
    </div>

    <div class="org-node org-three" style="left:426px; top:302px;">
        SUPERVISOR
    </div>

    <div class="org-node org-three" style="left:614px; top:302px;">
        ASISTEN<br>MANAGER
    </div>

    <div class="org-node org-three" style="left:802px; top:302px;">
        KASIR
    </div>

</div>

                    </div>

                </section>

            </article>

        </main>

    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const orgScroll = document.querySelector(".org-modern-scroll");
    const orgChart = document.querySelector(".org-modern-chart");

    if (!orgScroll || !orgChart) return;

    function centerOrgChart() {
        if (window.innerWidth <= 1200) {
            orgScroll.scrollLeft =
                (orgChart.offsetWidth - orgScroll.clientWidth) / 2;
        }
    }

    setTimeout(centerOrgChart, 300);
    window.addEventListener("resize", centerOrgChart);
});
</script>

@endsection