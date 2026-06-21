@extends('layouts.app')

@section('title', 'Dewan Komisaris & Direksi - PT Pasca Dana Sundari')
@section('meta_description', 'Profil Dewan Komisaris dan Direksi PT Pasca Dana Sundari sebagai bagian dari tata kelola perusahaan yang profesional dan bertanggung jawab.')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/tentang-modern.css') }}v=2">

<section class="tentang-hero">
    <div class="tentang-hero-overlay"></div>

    <div class="tentang-hero-content">
        <span>TENTANG</span>

        <h1>Dewan Komisaris & Direksi</h1>

        <p>
            Kepemimpinan perusahaan dalam memastikan tata kelola,
            strategi bisnis, dan operasional berjalan secara profesional.
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

                <header class="tentang-article-head">
                    <span class="tentang-label">
                        LEADERSHIP
                    </span>


                    <p>
                        Dewan Komisaris dan Direksi memiliki peran penting dalam
                        mengarahkan strategi, memperkuat pengawasan, serta memastikan
                        perusahaan berjalan sesuai prinsip tata kelola yang baik.
                    </p>
                </header>

                <nav class="leader-tabs">
                    <a href="#dewan-komisaris" class="active">
                        Dewan Komisaris
                    </a>

                    <a href="#direksi">
                        Direksi
                    </a>

                    <a href="#nakhoda">
                        Nakhoda
                    </a>
                </nav>

                <section class="leader-section" id="dewan-komisaris">

                    <div class="leader-group-title">
                        <h3>Dewan Komisaris</h3>
                    </div>

                    <div class="leader-list">

                        @forelse ($dewan as $item)

                            <article class="leader-item">

                                <div class="leader-image">
                                    <img src="{{ asset('assets/img/management/' . $item->foto) }}"
                                         alt="{{ $item->nama }}">
                                </div>

                                <div class="leader-content">
                                    <span>
                                        {{ $item->jabatan }}
                                    </span>

                                    <h4>
                                        {{ $item->nama }}
                                    </h4>

                                    <p>
                                        Dewan Komisaris berperan dalam memberikan
                                        pengawasan dan arahan strategis terhadap
                                        jalannya perusahaan.
                                    </p>
                                </div>

                            </article>

                        @empty

                            <p class="leader-empty">
                                Data Dewan Komisaris belum tersedia.
                            </p>

                        @endforelse

                    </div>

                </section>

                <section class="leader-section leader-section-space" id="direksi">

                    <div class="leader-group-title">
                        <h3>Direksi</h3>
                    </div>

                    <div class="leader-list">

                        @forelse ($manajemen as $item)

                            <article class="leader-item">

                                <div class="leader-image">
                                    <img src="{{ asset('assets/img/management/' . $item->foto) }}"
                                         alt="{{ $item->nama }}">
                                </div>

                                <div class="leader-content">
                                    <span>
                                        {{ $item->jabatan }}
                                    </span>

                                    <h4>
                                        {{ $item->nama }}
                                    </h4>

                                    <p>
                                        Direksi bertanggung jawab dalam menjalankan
                                        pengelolaan perusahaan, memastikan operasional
                                        berjalan efektif, serta mendorong peningkatan
                                        kualitas layanan.
                                    </p>
                                </div>

                            </article>

                        @empty

                            <p class="leader-empty">
                                Data Direksi belum tersedia.
                            </p>

                        @endforelse

                    </div>

                </section>

                <section class="leader-section leader-section-space" id="nakhoda">

                    <div class="leader-group-title">
                        <h3>Nakhoda</h3>
                    </div>

                    <div class="leader-list">

                        @forelse ($nahkoda as $item)

                            <article class="leader-item">

                                <div class="leader-image">
                                    <img src="{{ asset('assets/img/management/' . $item->foto) }}"
                                         alt="{{ $item->nama }}">
                                </div>

                                <div class="leader-content">
                                    <span>
                                        {{ $item->jabatan }}
                                    </span>

                                    <h4>
                                        {{ $item->nama }}
                                    </h4>

                                    <p>
                                        Nakhoda bertanggung jawab atas keselamatan
                                        pelayaran, operasional kapal, serta memastikan
                                        seluruh kegiatan di atas kapal berjalan sesuai
                                        prosedur dan standar keselamatan yang berlaku.
                                    </p>
                                </div>

                            </article>

                        @empty

                            <p class="leader-empty">
                                Data Nakhoda belum tersedia.
                            </p>

                        @endforelse

                    </div>

                </section>

            </article>

        </main>

    </div>
</section>

<script>
document.querySelectorAll('.leader-tabs a').forEach(tab => {
    tab.addEventListener('click', function(e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));

        if (target) {
            target.scrollIntoView({
                behavior: 'auto',
                block: 'start'
            });
        }

        document.querySelectorAll('.leader-tabs a').forEach(item => {
            item.classList.remove('active');
        });

        this.classList.add('active');
    });
});
</script>

<script>
const leaderSections = document.querySelectorAll('.leader-section');
const leaderLinks = document.querySelectorAll('.leader-tabs a');

leaderLinks.forEach(tab => {
    tab.addEventListener('click', function(e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));

        if (target) {
            target.scrollIntoView({
                behavior: 'auto',
                block: 'start'
            });
        }

        leaderLinks.forEach(item => item.classList.remove('active'));
        this.classList.add('active');
    });
});

window.addEventListener('scroll', () => {
    let current = '';

    leaderSections.forEach(section => {
        const sectionTop = section.offsetTop - 180;

        if (pageYOffset >= sectionTop) {
            current = section.getAttribute('id');
        }
    });

    leaderLinks.forEach(link => {
        link.classList.remove('active');

        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
});
</script>

@endsection