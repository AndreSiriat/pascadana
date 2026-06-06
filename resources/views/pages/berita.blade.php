@extends('layouts.app')

@section('title', 'Berita — PT Pasca Dana Sundari')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/berita.css') }}">

<!-- =========================================
     PREMIUM HERO CINEMATIC SECTION
========================================= -->
<section class="premium-hero">
    <div class="hero-ambient-glow"></div>
    <div class="hero-overlay-gradient"></div>

    <div class="container-premium">
        <div class="hero-grid-layout">

            <div class="hero-text-block">
                <div class="badge-innovative">
                    <span class="pulse-dot"></span>
                    <span class="badge-text">MEDIA CENTER UTAMA</span>
                </div>

                <h1 class="hero-title">
                    Navigasi Informasi & <br>
                    <span class="text-gradient">Aktivitas Perusahaan</span>
                </h1>

                <p class="hero-description">
                    Eksplorasi pembaruan terkini mengenai operasional pelayaran strategis,
                    standar keselamatan armada, inovasi layanan, dan momentum pertumbuhan
                    PT Pasca Dana Sundari.
                </p>
            </div>

            <div class="hero-stats-glass">
                <div class="stat-card">
                    <div class="stat-icon-wrapper">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>

                    <div class="stat-info">
                        <h3 class="stat-number">{{ $berita->total() }}</h3>
                        <p class="stat-label">Arsip Publikasi</p>
                    </div>
                </div>

                <div class="stat-divider"></div>

                <div class="stat-card">
                    <div class="stat-icon-wrapper">
                        <i class="fa-regular fa-calendar-check"></i>
                    </div>

                    <div class="stat-info">
                        <h3 class="stat-number">{{ now()->format('Y') }}</h3>
                        <p class="stat-label">Tahun Fiskal Aktif</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="news-stream-section">
    <div class="container-premium">

        @if($berita->count())

        <div class="news-meratus-layout">

            <!-- KIRI: 5 BERITA -->
            <main class="news-meratus-main">

                @foreach($berita as $item)

                    <article class="news-meratus-card">

                        <a href="{{ route('berita.detail', $item->slug) }}" class="news-meratus-image">
                            <img src="{{ asset('assets/img/news/' . $item->thumbnail) }}" alt="{{ $item->judul }}">
                        </a>

                        <div class="news-meratus-content">

                            <h2>
                                <a href="{{ route('berita.detail', $item->slug) }}">
                                    {{ Str::limit($item->judul, 78) }}
                                </a>
                            </h2>

                            <p>
                                {{ Str::limit(strip_tags($item->isi), 150, '...') }}
                            </p>

                            <div class="news-meratus-meta">
                                <span>{{ $item->created_at->translatedFormat('M d, Y') }}</span>
                                <strong>{{ strtoupper($item->kategori ?? 'OPERASIONAL') }}</strong>
                            </div>

                        </div>

                    </article>

                @endforeach

                <div class="premium-pagination-zone">
                    {{ $berita->links() }}
                </div>

            </main>

            <!-- KANAN: BERITA TERBARU + KATEGORI -->
            <aside class="news-meratus-sidebar">

                <div class="meratus-sidebar-block">
                    <h3>Berita Terbaru</h3>

                    @foreach($latestBerita as $latest)

                    <article class="meratus-latest-card">

                        <a href="{{ route('berita.detail', $latest->slug) }}" class="meratus-latest-image">
                            <img src="{{ asset('assets/img/news/' . $latest->thumbnail) }}" alt="{{ $latest->judul }}">
                        </a>

                        <div class="meratus-latest-content">
                            <h4>
                                <a href="{{ route('berita.detail', $latest->slug) }}">
                                    {{ Str::limit($latest->judul, 48) }}
                                </a>
                            </h4>

                            <span>{{ $latest->created_at->translatedFormat('M d, Y') }}</span>
                        </div>

                    </article>

                    @endforeach
                </div>

                <div class="meratus-sidebar-block meratus-category">
                    <h3>Kategori</h3>

                    @foreach($categories as $category)
                        <a href="#">
                            {{ $category->kategori }}
                        </a>
                    @endforeach
                </div>

            </aside>

        </div>

        @else

        <div class="premium-empty-state">
            <h3>Belum Ada Data Terpublikasi</h3>
            <p>Berita perusahaan akan ditampilkan di halaman ini.</p>
        </div>

        @endif

    </div>
</section>

@endsection