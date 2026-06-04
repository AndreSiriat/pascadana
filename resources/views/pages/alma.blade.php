@extends('layouts.app')

@section('title', 'ALMA')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/alma.css') }}">

<section class="alma-hero">

    <div class="alma-overlay"></div>

    <img src="{{ asset('assets/img/43.png') }}" alt="Anjungan Listrik Mandiri">

    <div class="alma-hero-content">

            <div class="hero-breadcrumb">
                <a href="/">Home</a>
                <span>/</span>
                <a href="/tentang-kami">Tentang Kami</a>
                <span>/</span>
                <strong>Alma</strong>
            </div>

        <span>EFISIENSI ENERGI PELABUHAN</span>

        <h1>
            Anjungan Listrik <br>
            Mandiri (ALMA)
        </h1>

        <p>
            Energi bersih ramah lingkungan yang digunakan
            oleh PT Pasca Dana Sundari untuk mendukung efisiensi operasional.
        </p>

    </div>

</section>

<section class="alma-content">

    <div class="alma-container">

        <div class="alma-left">

            <span class="mini-title">
                TENTANG PROGRAM
            </span>

            <h2>
                Sinergi Energi Bersih
                <br>
                di Ruang Lingkup Pelabuhan
            </h2>

            <p>
                Anjungan Listrik Mandiri (ALMA) merupakan langkah strategis 
                dalam mendukung konversi energi hijau, memfasilitasi kebutuhan listrik kapal
                 saat bersandar tanpa harus menyalakan mesin bantu (auxiliary engine).
            </p>

            <p>
                Sebagai bentuk nyata kepedulian terhadap lingkungan, PT Pasca Dana Sundari kini mengimplementasikan fasilitas ALMA.
                 Melalui langkah ini, kita bersama-sama menekan ketergantungan terhadap bahan bakar fosil, 
                 mengurangi emisi gas rumah kaca, serta menciptakan kawasan pelabuhan yang lebih sehat dan bersih.
            </p>

        </div>

        <div class="alma-right">

            <div class="alma-card">

                <h3>Reduksi Emisi Gas</h3>

                <p>
                    Mengurangi polusi udara dan kebisingan di pelabuhan dengan mematikan mesin kapal saat bersandar.
                </p>

            </div>

            <div class="alma-card">

                <h3>Efisiensi Biaya</h3>

                <p>
                    Menghemat biaya operasional logistik agen kapal melalui penggunaan energi listrik alternatif yang lebih ekonomis.
                </p>

            </div>

            <div class="alma-card">

                <h3>Kemudahan Akses</h3>

                <p>
                    Sistem koneksi daya (*plug-and-play*) yang praktis, aman, dan siap memenuhi kebutuhan operasional domestik kapal.
                </p>

            </div>

            <div class="alma-card">

                <h3>Dukungan Eco-Port</h3>

                <p>
                    Mewujudkan standardisasi pelabuhan hijau berbasis pemanfaatan energi bersih berkelanjutan.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection