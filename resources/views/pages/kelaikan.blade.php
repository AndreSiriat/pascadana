@extends('layouts.app')

@section('title', 'Sertifikasi')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/kelaikan.css') }}">

<!-- ================= KELAIKAN TEKNIS ARMADA ================= -->

<section class="alma-hero">

    <div class="alma-overlay"></div>

    <img src="{{ asset('assets/img/30.jpeg') }}" alt="Anjungan Listrik Mandiri">

    <div class="alma-hero-content">

            <div class="hero-breadcrumb">
                <a href="/">Home</a>
                <span>/</span>
                <a href="/tentang-kami">Tentang Kami</a>
                <span>/</span>
                <strong>Kelaikan</strong>
            </div>

        <span>TECHNICAL CERTIFICATION</span>

        <h1>
            Sertifikasi Kelaikan <br>
            Teknis Armada
        </h1>

        <p>
            Sertifikat di terbitkan lembaga klasifikasi resmi sebagai
            bentuk verifikasi bahwa sistem mesin dan instalasi teknis kapal memenuhi standar
        </p>

    </div>

</section>

<section class="fleet-certificate-section">

    <div class="fleet-certificate-container">

        <!-- LEFT -->
        <div class="fleet-certificate-left">

            <span class="mini-title">TECHNICAL CERTIFICATION</span>

            <h2>
                Sertifikasi Kelaikan
                Teknis Armada
            </h2>

            <p>
                Seluruh armada PT Pasca Dana Sundari menjalani proses inspeksi
                teknis dan klasifikasi mesin secara berkala guna memastikan
                keamanan operasional, performa mesin, dan kelayakan pelayaran.
            </p>

            <p>
                Sertifikasi ini diterbitkan oleh lembaga klasifikasi resmi sebagai
                bentuk verifikasi bahwa sistem mesin dan instalasi teknis kapal
                memenuhi standar keselamatan pelayaran nasional maupun internasional.
            </p>

            <div class="fleet-info-grid">

                <div class="fleet-info-box">
                    <h3>BKI Certified</h3>
                    <span>Machine Classification</span>
                </div>

                <div class="fleet-info-box">
                    <h3>Routine Survey</h3>
                    <span>Periodic Inspection</span>
                </div>

                <div class="fleet-info-box">
                    <h3>IMO Standard</h3>
                    <span>Operational Safety</span>
                </div>

            </div>

        </div>


        <!-- RIGHT -->
        <div class="fleet-certificate-right">

            <div class="certificate-preview">

                <img src="assets/img/bki.jpg" alt="Sertifikat Kelaikan Teknis">

                <div class="certificate-badge">
                    VERIFIED CERTIFICATE
                </div>

            </div>

        </div>

    </div>

</section>

@endsection