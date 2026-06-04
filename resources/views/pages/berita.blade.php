@extends('layouts.app')

@section('title', 'Media Center & Berita Resmi — PT Pasca Dana Sundari')

@section('content')
<!-- Memuat Google Fonts & FontAwesome untuk menunjang desain premium -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                    Eksplorasi pembaruan terkini mengenai operasional pelayaran strategis, standar keselamatan armada, inovasi layanan, dan momentum pertumbuhan PT Pasca Dana Sundari.
                </p>
            </div>

            <!-- Data Insights - Menggantikan Counter Statis Biasa -->
            <div class="hero-stats-glass">
                <div class="stat-card">
                    <div class="stat-icon-wrapper">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <div class="stat-info">
                        <h3 class="stat-number">{{ $berita->count() }}</h3>
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

<!-- =========================================
     FEATURED INSIGHT (BENTO EDITORIAL)
========================================= -->
@if($berita->count())
    @php
        $featured = $berita->first();
        // Menghitung estimasi waktu baca secara presisi
        $wordCount = str_word_count(strip_tags($featured->isi));
        $readTime = max(1, ceil($wordCount / 200));
    @endphp

<section class="editorial-featured">
    <div class="container-premium">
        <div class="editorial-tagline">
            <span class="line-decorator"></span>
            <p class="tagline-text">SOROTAN UTAMA</p>
        </div>

        <div class="bento-featured-card">
            <div class="bento-img-zone">
                <img src="{{ asset('assets/img/news/' . $featured->thumbnail) }}" alt="{{ $featured->judul }}" class="zoom-effect-img">
                <div class="category-ribbon">
                    <i class="fa-solid fa-anchor"></i> {{ $featured->kategori ?? 'Strategis' }}
                </div>
            </div>
            
            <div class="bento-content-zone">
                <div class="meta-upper">
                    <span class="meta-item">
                        <i class="fa-regular fa-calendar-days"></i> {{ $featured->created_at->translatedFormat('d F Y') }}
                    </span>
                    <span class="meta-divider">•</span>
                    <span class="meta-item">
                        <i class="fa-regular fa-clock"></i> {{ $readTime }} Menit Baca
                    </span>
                </div>

                <h2 class="featured-heading">
                    <a href="{{ route('berita.detail', $featured->slug) }}">{{ $featured->judul }}</a>
                </h2>

                <p class="featured-excerpt">
                    {{ Str::limit(strip_tags($featured->isi), 210, '...') }}
                </p>

                <div class="featured-footer-action">
                    <a href="{{ route('berita.detail', $featured->slug) }}" class="btn-premium-primary">
                        <span>Eksplorasi Artikel</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- =========================================
     NEWS GRID SECTION WITH INNOVATIVE FILTER
========================================= -->
<section class="news-stream-section">
    <div class="container-premium">
        
        <div class="stream-header-sticky">
            <div class="stream-title-area">
                <span class="subtitle-premium">ARSIP DIGITAL</span>
                <h2 class="section-title-main">Eksplorasi Berita & Korporasi</h2>
            </div>
            
            <!-- Filter Kategori Premium dengan Efek Pil Kapsul Aktif -->
            <div class="category-scroller-container">
                <div class="category-gradient-shield left"></div>
                <div class="category-pills-wrapper">
                    <button class="pill-btn active" data-filter="all">Semua Rilis</button>
                    <button class="pill-btn" data-filter="operasional"><i class="fa-solid fa-ship"></i> Operasional</button>
                    <button class="pill-btn" data-filter="siaran-pers"><i class="fa-solid fa-bullhorn"></i> Siaran Pers</button>
                    <button class="pill-btn" data-filter="keselamatan"><i class="fa-solid fa-shield-halved"></i> Keselamatan</button>
                    <button class="pill-btn" data-filter="perusahaan"><i class="fa-solid fa-briefcase"></i> Perusahaan</button>
                    <button class="pill-btn" data-filter="armada"><i class="fa-solid fa-compass"></i> Armada</button>
                </div>
                <div class="category-gradient-shield right"></div>
            </div>
        </div>

        @if($berita->count())
        <!-- Grid Arsitektur Modern Asimetris -->
        <div class="news-asymmetric-grid">
            @foreach($berita as $index => $item)
                @php
                    $itemReadTime = max(1, ceil(str_word_count(strip_tags($item->isi)) / 200));
                    // Lewati berita pertama jika sudah dijadikan Featured News di atas agar tidak duplikat
                    if($index === 0) continue;
                @endphp

                <article class="premium-grid-card" data-category="{{ Str::slug($item->kategori ?? 'operasional') }}">
                    <div class="card-media-wrapper">
                        <img src="{{ asset('assets/img/news/' . $item->thumbnail) }}" alt="{{ $item->judul }}" loading="lazy">
                        <div class="card-glass-overlay"></div>
                        <span class="card-category-tag">{{ $item->kategori ?? 'Operasional' }}</span>
                    </div>

                    <div class="card-body-premium">
                        <div class="card-meta-data">
                            <time>{{ $item->created_at->translatedFormat('d M Y') }}</time>
                            <span class="bullet-dot"></span>
                            <span>{{ $itemReadTime }} m read</span>
                        </div>

                        <h3 class="card-title-premium">
                            <a href="{{ route('berita.detail', $item->slug) }}">{{ $item->judul }}</a>
                        </h3>

                        <p class="card-abstract-premium">
                            {{ Str::limit(strip_tags($item->isi), 115, '...') }}
                        </p>

                        <div class="card-action-link">
                            <a href="{{ route('berita.detail', $item->slug) }}" class="arrow-link-btn">
                                <span>Selengkapnya</span>
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Pagination Desain Elegan -->
        <div class="premium-pagination-zone">
            {{ $berita->links() }}
        </div>

        @else
        <!-- Elegant Minimalist Empty State -->
        <div class="premium-empty-state">
            <div class="empty-icon-pulse">
                <i class="fa-thin fa-scroll-old"></i>
                <div class="pulse-ring"></div>
            </div>
            <h3>Belum Ada Data Terpublikasi</h3>
            <p>Sistem kami sedang menyelaraskan data terbaru. Silakan kembali dalam beberapa saat untuk pembaruan rilis.</p>
        </div>
        @endif

    </div>
</section>

@endsection