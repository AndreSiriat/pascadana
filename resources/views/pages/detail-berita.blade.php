@extends('layouts.app')

@section('title', $berita->judul)

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/berita.css') }}">

@php
    $readTime = max(1, ceil(str_word_count(strip_tags($berita->isi)) / 200));
@endphp

<section class="article-page">

    <div class="article-container-wide">

        <div class="article-breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span>/</span>
            <a href="{{ route('berita') }}">Berita</a>
            <span>/</span>
            <strong>Detail</strong>
        </div>

        <div class="article-head">

            <span class="article-category-badge">
                {{ $berita->kategori ?? 'Operasional' }}
            </span>

            <h1>
                {{ $berita->judul }}
            </h1>

            <div class="article-info">
                <span>{{ $berita->created_at->format('d M Y') }}</span>
                <span>•</span>
                <span>{{ $readTime }} min read</span>
                <span>•</span>
                <span>{{ $berita->author ?? 'Admin' }}</span>
            </div>

        </div>

        <div class="article-layout">

            <main class="article-main">

                <img
                    src="{{ asset('assets/img/news/' . $berita->thumbnail) }}"
                    alt="{{ $berita->judul }}"
                    class="article-featured-img">

                <article class="article-body">
                    {!! $berita->isi !!}
                </article>

            </main>

            <aside class="article-sidebar">

                <div class="sidebar-box">
                    <h3>Bagikan Berita</h3>

                    <div class="share-list">

                        <a href="https://wa.me/?text={{ urlencode(request()->fullUrl()) }}"
                           target="_blank">
                            <i class="fa-brands fa-whatsapp"></i>
                            Whatsapp
                        </a>

                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                           target="_blank">
                            <i class="fa-brands fa-facebook"></i>
                            Facebook
                        </a>

                        <button onclick="navigator.clipboard.writeText('{{ request()->fullUrl() }}')">
                            <i class="fa-regular fa-copy"></i>
                            Salin Tautan
                        </button>

                    </div>
                </div>

                <div class="sidebar-box">
                    <h3>Berita Terbaru</h3>

                    <div class="latest-news-list">

                        @foreach($latestBerita as $item)

                            <a href="{{ route('berita.detail', $item->slug) }}" class="latest-news-item">

                                <img src="{{ asset('assets/img/news/' . $item->thumbnail) }}"
                                     alt="{{ $item->judul }}">

                                <div>
                                    <h4>{{ Str::limit($item->judul, 55) }}</h4>
                                    <span>{{ $item->created_at->format('d M Y') }}</span>
                                </div>

                            </a>

                        @endforeach

                    </div>
                </div>

                <div class="sidebar-box">
                    <h3>Kategori</h3>

                    <div class="category-list">

                        @foreach($categories as $category)

                            <span>
                                {{ $category->kategori }}
                            </span>

                        @endforeach

                    </div>
                </div>

                <div class="sidebar-cta">
                    <span>PDS FERRY</span>
                    <h3>Butuh Informasi Layanan?</h3>
                    <p>Hubungi tim kami untuk informasi operasional dan layanan penyeberangan.</p>

                    <a href="https://wa.me/628123456789" target="_blank">
                        Hubungi Kami
                    </a>
                </div>

            </aside>

        </div>

    </div>

</section>

@endsection