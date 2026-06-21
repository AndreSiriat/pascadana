@extends('layouts.app')

@section('title', 'Sejarah Kami - PT Pasca Dana Sundari')
@section('meta_description', 'Sejarah perjalanan PT Pasca Dana Sundari dalam membangun layanan penyeberangan yang aman, profesional, dan berkelanjutan.')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/tentang-modern.css') }}?v=2">

<section class="tentang-hero">
    <div class="tentang-hero-overlay"></div>

    <div class="tentang-hero-content">
        <span>TENTANG</span>
        <h1>Sejarah Kami</h1>
        <p>
            Perjalanan pertumbuhan PT Pasca Dana Sundari dalam membangun layanan
            penyeberangan yang aman, profesional, dan berkelanjutan.
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

            <a href="{{ route('tentang.sejarah') }}"
               class="{{ request()->routeIs('tentang.sejarah') ? 'active' : '' }}">
                Sejarah Kami
            </a>

            <a href="{{ route('tentang.transformasi') }}">Transformasi</a>
            <a href="{{ route('tentang.logo') }}">Falsafah Logo</a>

        </aside>

        <main class="tentang-content sejarah-clean-content">

            <article>

                <header class="tentang-article-head sejarah-head">
                    <span class="tentang-label">OUR HISTORY</span>


                    <p>
                        Sejak berdiri, PT Pasca Dana Sundari terus berkembang melalui
                        penguatan armada, infrastruktur, sistem kerja, serta budaya
                        keselamatan dalam mendukung layanan penyeberangan.
                    </p>
                </header>

                <section class="history-editorial">

                    <article class="history-era">
                        <div class="history-era-image">
                            <img src="{{ asset('assets/img/18.png') }}" alt="Berdirinya Perusahaan">
                        </div>

                        <div class="history-era-content">
                            <span>1998</span>
                            <h3>Era Pendirian Perusahaan</h3>
                            <p>
                                PT Pasca Dana Sundari didirikan pada 14 September 1998
                                di Jakarta berdasarkan Akta Pendirian Perseroan Terbatas
                                yang disahkan oleh Notaris Ny. Anna Sunarhadi, S.H.
                            </p>
                        </div>
                    </article>

                    <article class="history-era reverse">
                        <div class="history-era-image">
                            <img src="{{ asset('assets/img/46.png') }}" alt="Pembelian Kapal Cepat">
                        </div>

                        <div class="history-era-content">
                            <span>2001</span>
                            <h3>Penguatan Armada Awal</h3>
                            <p>
                                Perusahaan melakukan pembelian kapal cepat pertama untuk
                                mendukung layanan penyeberangan pada lintasan
                                Merak - Bakauheni.
                            </p>
                        </div>
                    </article>

                    <article class="history-era">
                        <div class="history-era-image">
                            <img src="{{ asset('assets/img/5.jpeg') }}" alt="Perluasan Cakupan Operasional">
                        </div>

                        <div class="history-era-content">
                            <span>2002</span>
                            <h3>Perluasan Cakupan Operasional</h3>
                            <p>
                                Perusahaan memperluas operasional di lintasan
                                Kariangau - Penajam melalui pengalihan dan perubahan
                                kepemilikan Gross Akta KMP Tawes dari ASDP kepada
                                PT Pasca Dana Sundari.
                            </p>
                        </div>
                    </article>

                    <article class="history-era reverse">
                        <div class="history-era-image">
                            <img src="{{ asset('assets/img/49.png') }}" alt="Kantor Pusat Perusahaan">
                        </div>

                        <div class="history-era-content">
                            <span>2019</span>
                            <h3>Penguatan Infrastruktur Perusahaan</h3>
                            <p>
                                Perusahaan melakukan pembelian lahan guna menunjang
                                kebutuhan operasional. Jl. Manunggal No. 83,
                                Gunung Bahagia menjadi lokasi Kantor Pusat
                                PT Pasca Dana Sundari.
                            </p>
                        </div>
                    </article>

                    <article class="history-era">
                        <div class="history-era-image">
                            <img src="{{ asset('assets/img/50.jpeg') }}" alt="Modernisasi Armada">
                        </div>

                        <div class="history-era-content">
                            <span>2019</span>
                            <h3>Modernisasi Armada</h3>
                            <p>
                                Perusahaan memperluas jangkauan operasional dan
                                meningkatkan kapasitas armada untuk menghadirkan
                                pelayanan yang lebih baik bagi pengguna jasa.
                            </p>
                        </div>
                    </article>

                    <article class="history-era reverse">
                        <div class="history-era-image">
                            <img src="{{ asset('assets/img/51.jpeg') }}" alt="Transformasi Keselamatan">
                        </div>

                        <div class="history-era-content">
                            <span>2023</span>
                            <h3>Penguatan Budaya Keselamatan</h3>
                            <p>
                                Sebagai bentuk komitmen terhadap keselamatan kerja dan
                                kualitas operasional, perusahaan menyelenggarakan
                                Safety Meeting bersama Direktur Utama dan jajaran
                                manajemen untuk memperkuat budaya profesionalitas.
                            </p>
                        </div>
                    </article>

                </section>

            </article>

        </main>

    </div>
</section>

@endsection