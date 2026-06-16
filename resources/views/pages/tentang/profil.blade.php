@extends('layouts.app')

@section('title', 'Profil Perusahaan - PT Pasca Dana Sundari')
@section('meta_description', 'Profil PT Pasca Dana Sundari sebagai perusahaan jasa penyeberangan yang mendukung konektivitas, keselamatan, dan operasional maritim.')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/tentang-modern.css') }}">

<section class="tentang-hero">
    <div class="tentang-hero-overlay"></div>

    <div class="tentang-hero-content">
        <span>TENTANG</span>

        <h1>Profil Perusahaan</h1>

        <p>
            Mendukung konektivitas, mobilitas, dan pertumbuhan bisnis melalui
            layanan penyeberangan yang aman, profesional, dan terpercaya.
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

        <main class="tentang-content profil-clean-content">

            <article>

                <header class="tentang-article-head profil-head-clean">
                    <span class="tentang-label">
                        COMPANY PROFILE
                    </span>

                    <h2>
                        Mendukung Bisnis dan Operasional Maritim
                    </h2>

                    <p>
                        PT Pasca Dana Sundari hadir sebagai perusahaan jasa
                        penyeberangan yang mendukung konektivitas wilayah,
                        mobilitas masyarakat, dan aktivitas logistik melalui
                        layanan kapal yang aman, patuh, dan profesional.
                    </p>
                </header>

                <section class="business-pillars">

                    <div class="pillar-card">

                        <h3>
                            Inovasi Green Port Nusantara
                        </h3>

                        <p>
                            Mendukung efisiensi operasional dan keberlanjutan
                            melalui penerapan fasilitas pendukung seperti
                            Anjungan Listrik Mandiri.
                        </p>
                    </div>

                    <div class="pillar-card">

                        <h3>
                            Keselamatan dan Kepatuhan
                        </h3>

                        <p>
                            Mengutamakan keselamatan melalui penerapan sistem
                            manajemen, audit berkala, serta pemenuhan standar
                            regulator dalam setiap kegiatan operasional.
                        </p>
                    </div>

                    <div class="pillar-card">

                        <h3>
                            Kelaikan Teknis Armada
                        </h3>

                        <p>
                            Memastikan kapal dalam kondisi laik operasi melalui
                            pemeriksaan, perawatan, dan sertifikasi teknis secara
                            berkala.
                        </p>
                    </div>

                </section>

                <section class="certificate-status">

                    <div class="certificate-head">
                        <span>
                            CERTIFICATION STATUS
                        </span>

                        <h3>
                            Status Sertifikasi Armada
                        </h3>

                        <p>
                            Perusahaan menjaga kelengkapan dokumen dan sertifikasi
                            kapal sebagai bentuk komitmen terhadap keselamatan,
                            kepatuhan, dan kualitas layanan.
                        </p>
                    </div>

                    <div class="certificate-grid">

                        <div class="cert-stat">
                            <strong>27</strong>
                            <span>Sertifikat & Dokumen Kapal</span>
                        </div>

                        <div class="cert-stat">
                            <strong>2</strong>
                            <span>Armada Operasional</span>
                        </div>

                        <div class="cert-stat">
                            <strong>100%</strong>
                            <span>Komitmen Kepatuhan Dokumen</span>
                        </div>

                    </div>

                    <div class="cert-list">

                        <div>Sertifikat Keselamatan Kapal</div>
                        <div>Sertifikat Klasifikasi Mesin</div>
                        <div>Sertifikat Garis Muat</div>
                        <div>Sertifikat Radio Kapal</div>
                        <div>Sertifikat Pencegahan Pencemaran</div>
                        <div>Sertifikat Keselamatan Penumpang</div>

                    </div>

                </section>

                    <section class="profile-documents">

    <div class="profile-doc-head">
        <span>COMPANY DOCUMENTS</span>
        <h3>Dokumen Pendukung Perusahaan</h3>
    </div>

    <div class="profile-doc-grid">

        <article class="profile-doc-item">

    <div class="profile-doc-cover">
        <img src="{{ asset('assets/img/sertitawes.jpg') }}"
             alt="Sertifikat dan Survey Kapal Tawes">
    </div>

    <div class="profile-doc-content">

        <h4>
            Sertifikat dan Survey Kapal Tawes
        </h4>

        <div class="profile-doc-actions">

            <button
        type="button"
        class="doc-preview-btn"
        data-title="Sertifikat dan Survey Kapal Tawes"
        data-image="{{ asset('assets/img/sertitawes.jpg') }}">

        Lihat →

    </button>

            <a href="{{ asset('assets/img/sertitawes.jpg') }}"
               download>

                Download

            </a>

        </div>

    </div>

</article>


<article class="profile-doc-item">

    <div class="profile-doc-cover">
        <img src="{{ asset('assets/img/sertitunu.jpg') }}"
             alt="Sertifikat dan Survey Kapal Tunu">
    </div>

    <div class="profile-doc-content">

        <h4>
            Sertifikat dan Survey Kapal Tunu
        </h4>

        <div class="profile-doc-actions">

            <div class="profile-doc-actions">

    <button
        type="button"
        class="doc-preview-btn"
        data-title="Sertifikat dan Survey Kapal Tunu"
        data-image="{{ asset('assets/img/sertitunu.jpg') }}">

        Lihat →

    </button>

</div>

            <a href="{{ asset('assets/img/sertitunu.jpg') }}"
               download>

                Download

            </a>

        </div>

    </div>
    

</article>

    </div>

</section>

            </article>

        </main>

    </div>



</section>

<div class="doc-modal" id="docModal">

    <div class="doc-modal-box">

        <button
            class="doc-close"
            id="docClose">

            ×

        </button>

        <h3 id="docTitle"></h3>

        <div class="doc-image-wrap">

            <img
                id="docImage"
                src=""
                alt="Dokumen">

        </div>

        <div class="doc-footer">

            <a
                href=""
                id="docDownload"
                download>

                Download Dokumen

            </a>

        </div>

    </div>

</div>

<script>

document.addEventListener('DOMContentLoaded', function(){

    const modal = document.getElementById('docModal');
    const title = document.getElementById('docTitle');
    const image = document.getElementById('docImage');
    const download = document.getElementById('docDownload');
    const close = document.getElementById('docClose');

    document
    .querySelectorAll('.doc-preview-btn')
    .forEach(btn => {

        btn.addEventListener('click', function(){

            title.textContent =
                this.dataset.title;

            image.src =
                this.dataset.image;

            download.href =
                this.dataset.image;

            modal.classList.add('active');

        });

    });

    close.addEventListener('click', function(){

        modal.classList.remove('active');

    });

    modal.addEventListener('click', function(e){

        if(e.target === modal){

            modal.classList.remove('active');

        }

    });

});

</script>

@endsection