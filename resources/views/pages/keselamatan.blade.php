@extends('layouts.app')

@section('title', 'Sertifikasi')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/keselamatan.css') }}">

<!-- ================= KEAMANAN & KESELAMATAN ================= -->


<section class="safety-hero">

    <div class="safety-overlay"></div>

    <img src="{{ asset('assets/img/28.jpg') }}" alt="Keamanan dan Keselamatan Pelayaran">

    <div class="safety-hero-content">

    <div class="hero-breadcrumb">
        <a href="/">Beranda</a>
        <span>/</span>
        <a href="/tentang-kami">Tentang Kami</a>
        <span>/</span>
        <strong>Keamanan & Keselamatan</strong>
    </div>

    <span>SAFETY FIRST COMMITMENT</span>

    <h1>
        Keamanan dan<br>
        Keselamatan<br>
        Pelayaran
    </h1>

    <p>
        PT Pasca Dana Sundari berkomitmen menghadirkan standar keselamatan pelayaran
        yang profesional, modern, dan terpercaya.
    </p>

</div>

</section>


<!-- ================= INTRO ================= -->
<section class="safety-intro">

    <div class="intro-left">
        <span class="mini-title">MARITIME SAFETY SYSTEM</span>

        <h2>
            Sistem Keselamatan <br>
            Modern untuk Menjamin <br> 
            Keamanan Armada
        </h2>

        <p>
            Seluruh armada PT Pasca Dana Sundari dilengkapi dengan perangkat
            keselamatan yang memenuhi standar keselamatan pelayaran dan dilakukan
            pengecekan berkala untuk memastikan kondisi armada tetap optimal.
        </p>

        <p>
            Kami menerapkan prosedur keamanan terintegrasi mulai dari kesiapan
            alat keselamatan, inspeksi teknis mesin, hingga pelatihan kru kapal
            secara rutin guna menciptakan pelayanan transportasi laut yang aman,
            nyaman, dan terpercaya.
        </p>
    </div>

    <div class="intro-right">
        <div class="glass-card">
            <h3>Komitmen Keselamatan</h3>

            <ul>
                <li>Inspeksi rutin keselamatan armada</li>
                <li>Pelatihan evakuasi kru kapal</li>
                <li>Sertifikasi keselamatan aktif</li>
                <li>Pemeriksaan alat keselamatan berkala</li>
                <li>Standar operasional profesional</li>
            </ul>
        </div>
    </div>

</section>


<!-- ================= SAFETY EQUIPMENT ================= -->
<section class="equipment-section">

    <div class="section-heading">
        <span>SAFETY EQUIPMENT</span>
        <h2>Peralatan Keselamatan Utama</h2>
    </div>

    <div class="equipment-grid">

        <!-- ILR -->
        <div class="equipment-card">
            <div class="equipment-number">01</div>

            <h3>ILR (Inflatable Liferaft)</h3>

            <p>
                Inflatable Liferaft merupakan perahu penyelamat darurat yang
                dirancang untuk mengembang otomatis saat kondisi evakuasi.
                Peralatan ini digunakan sebagai sarana penyelamatan penumpang
                dan kru apabila terjadi keadaan darurat di laut.
            </p>

            <div class="equipment-detail">
                <span>✔ Mengembang otomatis</span>
                <span>✔ Kapasitas evakuasi penumpang</span>
                <span>✔ Standar keselamatan internasional</span>
            </div>
        </div>

        <!-- PMK -->
        <div class="equipment-card">
            <div class="equipment-number">02</div>

            <h3>PMK (Peralatan Pemadam Kebakaran)</h3>

            <p>
                Sistem PMK digunakan untuk mendukung pencegahan dan penanganan
                kebakaran di area kapal. Seluruh armada dilengkapi alat pemadam,
                hydrant system, alarm kebakaran, dan prosedur tanggap darurat.
            </p>

            <div class="equipment-detail">
                <span>✔ Fire extinguisher certified</span>
                <span>✔ Sistem alarm kebakaran</span>
                <span>✔ Pelatihan tanggap darurat kru</span>
            </div>
        </div>

        <!-- HRU -->
        <div class="equipment-card">
            <div class="equipment-number">03</div>

            <h3>HRU (Hydrostatic Release Unit)</h3>

            <p>
                HRU merupakan perangkat otomatis yang berfungsi melepaskan
                liferaft ketika kapal tenggelam pada kedalaman tertentu.
                Sistem ini memastikan liferaft dapat mengapung dan digunakan
                dalam kondisi darurat tanpa intervensi manual.
            </p>

            <div class="equipment-detail">
                <span>✔ Pelepasan otomatis liferaft</span>
                <span>✔ Aktivasi tekanan hidrostatik</span>
                <span>✔ Mendukung evakuasi cepat</span>
            </div>
        </div>

    </div>
</section>


<!-- ================= CERTIFICATE SECTION ================= -->
<section class="certificate-section">

    <div class="section-heading center">
        <span>SAFETY CERTIFICATION</span>
        <h2>Sertifikasi & Dokumentasi Keselamatan</h2>

        <p>
            Seluruh sistem keselamatan dan operasional armada didukung dengan
            sertifikasi resmi, inspeksi berkala, serta dokumentasi teknis yang
            memastikan standar keamanan pelayaran tetap terjaga.
        </p>
    </div>

    <div class="certificate-grid">

        <div class="certificate-card">
            <img src="assets/img/lr.jpg" alt="">
            <div class="certificate-content">
                <h3>Sertifikat Liferaft</h3>
                <p>
                    Dokumentasi pemeriksaan dan sertifikasi ILR untuk memastikan
                    kelayakan alat keselamatan darurat.
                </p>
            </div>
        </div>

        <div class="certificate-card">
            <img src="assets/img/pmk.jpg" alt="">
            <div class="certificate-content">
                <h3>Sertifikat PMK</h3>
                <p>
                    Sertifikasi sistem pemadam kebakaran dan pemeriksaan alat
                    proteksi kebakaran armada.
                </p>
            </div>
        </div>

        <div class="certificate-card">
            <img src="assets/img/hru.jpg" alt="">
            <div class="certificate-content">
                <h3>Sertifikat HRU</h3>
                <p>
                    Pemeriksaan perangkat Hydrostatic Release Unit sesuai
                    standar keselamatan pelayaran.
                </p>
            </div>
        </div>

    </div>

</section>


<!-- ================= SAFETY TIMELINE ================= -->
<section class="timeline-section">

    <div class="section-heading">
        <span>OPERATIONAL SAFETY FLOW</span>
        <h2>Prosedur Keselamatan Operasional</h2>
    </div>

    <div class="timeline">

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <h3>Inspeksi Pra Operasional</h3>
                <p>
                    Pemeriksaan teknis mesin, alat keselamatan, dan sistem navigasi
                    sebelum kapal beroperasi.
                </p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <h3>Monitoring Operasional</h3>
                <p>
                    Pengawasan operasional armada dilakukan secara berkala untuk
                    menjaga stabilitas dan keamanan pelayaran.
                </p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <h3>Emergency Response</h3>
                <p>
                    Kru kapal memiliki prosedur tanggap darurat dan pelatihan
                    keselamatan untuk menghadapi kondisi tertentu.
                </p>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            <div class="timeline-content">
                <h3>Evaluasi & Sertifikasi</h3>
                <p>
                    Dilakukan evaluasi berkala terhadap seluruh sistem keselamatan
                    dan pembaruan sertifikasi armada.
                </p>
            </div>
        </div>

    </div>

</section>

@endsection