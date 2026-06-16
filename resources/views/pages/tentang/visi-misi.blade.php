@extends('layouts.app')

@section('title', 'Visi & Misi - PT Pasca Dana Sundari')
@section('meta_description', 'Visi dan misi PT Pasca Dana Sundari dalam membangun layanan penyeberangan yang aman, andal, profesional, dan berkelanjutan.')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/tentang-modern.css') }}">

<section class="tentang-hero tentang-hero-visi">
    <div class="tentang-hero-overlay"></div>

    <div class="tentang-hero-content">
        <span>TENTANG</span>

        <h1>Visi & Misi</h1>

        <p>
            Arah perusahaan dalam membangun layanan penyeberangan yang andal,
            aman, profesional, dan berkelanjutan.
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

            <article>


                <section class="visi-editorial-block">
                    <span class="block-number"></span>

                    <div>
                        <h3>Visi Perusahaan</h3>

                        <p>
                            Menjadi Perusahaan Jasa Penyeberangan Kelas Global yang
                            Inovatif, Berdaya Saing, Ramah Lingkungan, serta memberikan
                            nilai tambah berkelanjutan bagi seluruh pemangku kepentingan.
                        </p>
                    </div>
                </section>

                <section class="misi-editorial-block">
                    <div class="misi-title">
                        <span class="block-number"></span>
                        <h3>Misi Perusahaan</h3>
                    </div>

                    <div class="misi-clean-list">

                        <div class="misi-clean-item">
                            <span>01</span>
                            <p>
                                Menghadirkan layanan transportasi laut yang aman dan terpercaya.
                            </p>
                        </div>

                        <div class="misi-clean-item">
                            <span>02</span>
                            <p>
                                Meningkatkan nilai ekonomi perusahaan secara berkelanjutan
                                untuk memberikan keuntungan optimal bagi pemegang saham.
                            </p>
                        </div>

                        <div class="misi-clean-item">
                            <span>03</span>
                            <p>
                                Mengutamakan keselamatan, kenyamanan, dan kepuasan pelanggan
                                melalui inovasi layanan.
                            </p>
                        </div>

                        <div class="misi-clean-item">
                            <span>04</span>
                            <p>
                                Menciptakan lingkungan kerja yang sejahtera, inklusif, dan
                                profesional guna meningkatkan kualitas sumber daya manusia.
                            </p>
                        </div>

                        <div class="misi-clean-item">
                            <span>05</span>
                            <p>
                                Berkomitmen pada kelestarian lingkungan dengan menerapkan
                                praktik pelayaran hijau atau green shipping.
                            </p>
                        </div>

                        <div class="misi-clean-item">
                            <span>06</span>
                            <p>
                                Menjadi mitra strategis pemerintah dan masyarakat dalam
                                mendukung konektivitas serta pembangunan ekonomi maritim nasional.
                            </p>
                        </div>

                    </div>
                </section>

            </article>

        </main>

    </div>
</section>

@endsection