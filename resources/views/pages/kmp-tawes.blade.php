@extends('layouts.app')

@section('title', 'KMP. tawes')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/kmp-tawes.css') }}?v=2">

<!-- =========================================
KMP tawes PREMIUM CORPORATE PAGE
========================================= -->

<section class="tawes-hero">
    <div class="overlay"></div>

    <div class="tawes-hero-content">
        <span class="tagline">ARMADA STRATEGIS PT PASCA DANA SUNDARI</span>

        <h1>KMP TAWES</h1>

        <p>
            Menghubungkan perjalanan laut dengan standar keselamatan,
            kenyamanan, dan pelayanan profesional untuk menghadirkan
            pengalaman pelayaran yang aman dan terpercaya.
        </p>

        <div class="hero-buttons">
            <a href="#fasilitas" class="btn-primary">Lihat Fasilitas</a>
            <a href="#spesifikasi" class="btn-outline">Detail Kapal</a>
        </div>
    </div>

    <div class="hero-stats">
        <div class="stat-box">
            <h2>100%</h2>
            <span>Keselamatan Prioritas</span>
        </div>

        <div class="stat-box">
            <h2>Premium</h2>
            <span>Fasilitas Penumpang</span>
        </div>

        <div class="stat-box">
            <h2>24/7</h2>
            <span>Pelayanan Operasional</span>
        </div>
    </div>
</section>



<section class="fleet-profile-section" id="profil">

    <div class="fleet-profile-container">

        <!-- LEFT CONTENT -->
        <div class="fleet-profile-content">

            <span class="fleet-label">PROFIL ARMADA</span>

            <h2>
                Kapal Penumpang Terpercaya untuk Perjalanan Aman dan Nyaman.
            </h2>

            <p>
                KMP TAWES merupakan armada penyeberangan yang dirancang
                untuk menghadirkan perjalanan laut yang aman, nyaman, dan efisien.
                Dengan dukungan fasilitas memadai, sistem keselamatan lengkap,
                serta kru profesional, kapal ini menjadi bagian penting dalam
                mendukung konektivitas antar wilayah Kariangau – Penajam.
            </p>

            <div class="fleet-specs">

                <div class="fleet-spec-item">
                    <span>Nama Kapal</span>
                    <strong>KMP TAWES</strong>
                </div>

                <div class="fleet-spec-item">
                    <span>Jenis Armada</span>
                    <strong>Roll-On/Roll-Off</strong>
                </div>

                <div class="fleet-spec-item">
                    <span>Operator</span>
                    <strong>PT Pasca Dana Sundari</strong>
                </div>

                <div class="fleet-spec-item">
                    <span>Kapasitas</span>
                    <strong>± 1200 Penumpang</strong>
                </div>

            </div>

    

        </div>

        <!-- RIGHT IMAGE -->
        <div class="fleet-profile-image">
            <img src="{{ asset('assets/img/63.jpeg') }}" alt="KMP TUNU JAYA 2888">

            <div class="fleet-route-card">
                <span>Rute Operasional</span>
                <strong>Kariangau – Penajam</strong>
            </div>
        </div>

    </div>

</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const section = document.querySelector(".fleet-profile-section");

    if (!section) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                section.classList.add("is-visible");
                observer.unobserve(section);
            }
        });
    }, {
        threshold: 0.2
    });

    observer.observe(section);
});
</script>


<!-- =========================================
FASILITAS
========================================= -->

<section class="facilities-section" id="fasilitas">

    <div class="section-header">
        <span>FASILITAS KAPAL</span>
        <h2>Kenyamanan Penumpang KMP TAWES</h2>
    </div>

    <div class="facilities-grid">

        <!-- 1 -->
        <div class="facility-card large">
            <img src="assets/img/64.jpeg" alt="">

            <div class="facility-overlay">
                <span>01</span>
                <h3>Kantin Penumpang</h3>
                <p>
                    Area kantin dengan suasana nyaman untuk memenuhi kebutuhan perjalanan.
                </p>
            </div>
        </div>

        <!-- 2 -->
        <div class="facility-card">
            <img src="assets/img/65.jpeg" alt="">

            <div class="facility-overlay">
                <span>02</span>
                <h3>Mushola</h3>
                <p>
                    Fasilitas ibadah yang bersih dan nyaman bagi penumpang selama perjalanan.
                </p>
            </div>
        </div>

        <!-- 3 -->
        <div class="facility-card">
            <img src="assets/img/66.jpeg" alt="">

            <div class="facility-overlay">
                <span>03</span>
                <h3>Toilet Umum</h3>
                <p>
                    Fasilitas toilet yang bersih, dan nyaman demi kelancaran dan kenyamanan perjalanan Anda.
                </p>
            </div>
        </div>


    </div>
</section>



<!-- =========================================
KESELAMATAN
========================================= -->

<section class="safety-section">

    <div class="safety-left">
        <span class="section-label">KESELAMATAN</span>

        <h2>
            Sistem Keselamatan
            dan Perlengkapan Darurat Kapal
        </h2>

        <p>
            KMP tawes dilengkapi berbagai fasilitas keselamatan pelayaran
            yang mendukung keamanan seluruh penumpang dan kru selama perjalanan.
        </p>

                    <div class="safety-item">
                <i class="fa-solid fa-ferry"></i>
                <div>
                    <h4>Sekoci</h4>
                    <p>Perahu penyelamat tegap bermesin untuk evakuasi aman.</p>
                </div>
            </div>


              <div class="safety-item">
                <i class="safety-icon-ilr">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="24" height="24">
            <rect x="2" y="7" width="20" height="10" rx="5" />
            <path d="M7 7v10" stroke-width="1.5" />
            <path d="M12 7v10" stroke-width="1.5" />
            <path d="M17 7v10" stroke-width="1.5" />
            <path d="M2 12h2" />
            <path d="M20 12h2" />
        </svg>
    </i>
                <div>
                    <h4>Inflatable Liferaft</h4>
                    <p>Rakit keselamatan otomatis berbentuk kapsul dengan kapasitas besar.</p>
                </div>
            </div>


        <div class="safety-list">

            <div class="safety-item">
                <i class="fa-solid fa-life-ring"></i>
                <div>
                    <h4>Life Buoy</h4>
                    <p>Pelampung penyelamat tersedia di beberapa titik kapal.</p>
                </div>
            </div>

          

            <div class="safety-item">
                <i class="fa-solid fa-fire-extinguisher"></i>
                <div>
                    <h4>Hydrant & Fire System</h4>
                    <p>Sistem pemadam darurat tersedia di area penting kapal.</p>
                </div>
            </div>


            

        </div>
    </div>

    <div class="safety-gallery">

        <img src="assets/img/61.jpeg" alt="">
        <img src="assets/img/62.jpeg" alt="">
        <img src="assets/img/59.jpeg" alt="">
        <img src="assets/img/60.jpeg" alt="">

    </div>
</section>

@endsection