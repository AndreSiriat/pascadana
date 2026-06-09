@extends('layouts.app')

@section('title', 'Berita — PT Pasca Dana Sundari')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/berita.css') }}?v=2">

<!-- =========================================
     PREMIUM HERO CINEMATIC SECTION
========================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/css/berita.css') }}">

<!-- HERO -->
<section class="maritime-news-hero">

    <div class="maritime-hero-overlay"></div>

    <div class="maritime-hero-container">

        <div class="maritime-hero-content">

            <span class="maritime-hero-label">
                <span></span>
                MEDIA CENTER
            </span>

            <h1>
                Berita & Publikasi<br>
                Resmi Perusahaan
            </h1>

            <p>
                Informasi terbaru mengenai aktivitas operasional, layanan
                penyeberangan, keselamatan armada, serta perkembangan
                PT Pasca Dana Sundari.
            </p>

        </div>

        <div class="maritime-hero-info">
            <span>PT PASCA DANA SUNDARI</span>
            <strong>Reliable Ferry Transportation</strong>
        </div>

    </div>

</section>


<!-- NEWS -->
<section class="news-stream-section">

    <div class="container-premium">


        @if($berita->count())

        <div class="news-meratus-layout">

            <!-- LEFT -->
            <main class="news-meratus-main">

                @foreach($berita as $item)

                <article class="news-meratus-card">

                    <a href="{{ route('berita.detail', $item->slug) }}" class="news-meratus-image">
                        <img src="{{ asset('assets/img/news/' . $item->thumbnail) }}" alt="{{ $item->judul }}">
                    </a>

                    <div class="news-meratus-content">

                        <h2>
                            <a href="{{ route('berita.detail', $item->slug) }}">
                                {{ Str::limit($item->judul, 82) }}
                            </a>
                        </h2>

                        <p>
                            {{ Str::limit(strip_tags($item->isi), 150, '...') }}
                        </p>

                        <div class="news-meratus-meta">
                            <span>{{ $item->created_at->translatedFormat('d M Y') }}</span>
                            <strong>{{ strtoupper($item->kategori ?? 'OPERASIONAL') }}</strong>
                        </div>

                    </div>

                </article>

                @endforeach

                <div class="premium-pagination-zone">
                    {{ $berita->onEachSide(1)->links('pagination::bootstrap-4') }}
                </div>

            </main>

            <!-- RIGHT SIDEBAR -->
            <aside class="news-meratus-sidebar">

                <div class="meratus-sidebar-block">
                    <h3>Berita Terbaru</h3>

                    <div class="latest-news-wrapper">

                        @foreach($latestBerita as $latest)

                        <article class="meratus-latest-card">

                            <a href="{{ route('berita.detail', $latest->slug) }}" class="meratus-latest-image">
                                <img src="{{ asset('assets/img/news/' . $latest->thumbnail) }}" alt="{{ $latest->judul }}">
                            </a>

                            <div class="meratus-latest-content">
                                <h4>
                                    <a href="{{ route('berita.detail', $latest->slug) }}">
                                        {{ Str::limit($latest->judul, 55) }}
                                    </a>
                                </h4>

                                <span>{{ $latest->created_at->translatedFormat('d M Y') }}</span>
                            </div>

                        </article>

                        @endforeach

                    </div>
                </div>

                <div class="category-list-news">

                    <a href="{{ route('berita') }}"
                    class="{{ request('kategori') ? '' : 'active' }}">
                        <span>Semua Berita</span>
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>

                    @foreach($categories as $category)
                        <a href="{{ route('berita', ['kategori' => $category->kategori]) }}"
                        class="{{ request('kategori') == $category->kategori ? 'active' : '' }}">
                            <span>{{ $category->kategori }}</span>
                            <i class="fa-solid fa-arrow-right-long"></i>
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