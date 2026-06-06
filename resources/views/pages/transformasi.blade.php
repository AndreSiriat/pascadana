@extends('layouts.app')

@section('title', 'Transformasi')

<link rel="stylesheet" href="{{ asset('assets/css/transformasi.css') }}">

@section('content')

<!-- ================= TRANSFORMASI 2023 ================= -->
<section class="transformasi-section" id="transformasi">

    <div class="transformasi-container">

        <div class="transformasi-header">
            <span>TRANSFORMASI PERUSAHAAN</span>
            <h2>Transformasi Manajemen Tahun 2023</h2>
            <p>
                Tahun 2023 menjadi titik penting bagi PT Pasca Dana Sundari dalam
                membangun sistem kerja yang lebih tertata, profesional, dan berorientasi
                pada keselamatan pelayaran.
            </p>
        </div>

        <div class="transformasi-content">

            <div class="transformasi-card before">
                <span>Sebelum Transformasi</span>
                <h3>Manajemen Belum Terstruktur</h3>
                <p>
                    Sebelumnya, pola kerja perusahaan masih berjalan secara tidak
                    terpusat, kurang terdokumentasi, dan belum sepenuhnya memiliki
                    alur koordinasi yang rapi.
                </p>
            </div>

            <div class="transformasi-line">
                <div class="line-dot"></div>
                <div class="line-dot active"></div>
                <div class="line-dot"></div>
            </div>

            <div class="transformasi-card after">
                <span>Setelah Transformasi</span>
                <h3>Sistem Kerja Lebih Profesional</h3>
                <p>
                    Melalui pembenahan manajemen pada tahun 2023, perusahaan mulai
                    membangun struktur kerja yang lebih jelas, terukur, dan konsisten.
                    Transformasi ini turut memperkuat penerapan standar keselamatan,
                    termasuk pengembangan ISM Code sebagai pedoman operasional.
                </p>
            </div>

        </div>

        <div class="transformasi-bottom">

            <div>
                <h4>Struktur Kerja</h4>
                <p>Alur tanggung jawab dan koordinasi dibuat lebih jelas.</p>
            </div>

            <div>
                <h4>Standar Operasional</h4>
                <p>Proses kerja mulai disusun berdasarkan sistem dan prosedur.</p>
            </div>

            <div>
                <h4>Keselamatan</h4>
                <p>ISM Code menjadi salah satu pedoman utama dalam operasional.</p>
            </div>

        </div>

    </div>

</section>

@endsection