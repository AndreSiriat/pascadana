@extends('layouts.app')

@section('title', 'KMP. Tunu')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/kmp-tunu.css') }}?v=3">

<!-- =========================================
KMP TUNU PREMIUM CORPORATE PAGE
========================================= -->

<section class="tunu-hero">
    <div class="overlay"></div>

    <div class="tunu-hero-content">
        <span class="tagline">ARMADA UNGGULAN PT PASCA DANA SUNDARI</span>

        <h1>KMP TUNU JAYA 2888</h1>

        <p>
            Menghubungkan perjalanan laut dengan standar keselamatan,
            kenyamanan, dan pelayanan profesional untuk menghadirkan
            pengalaman pelayaran yang aman dan terpercaya.
        </p>

        <div class="hero-buttons">
            <a href="#fasilitas" class="btn-primary">Lihat Fasilitas</a>
            <a href="#profil" class="btn-outline">Detail Kapal</a>
        </div>
    </div>
</section>



<section class="tunu-impact-section">

    <div class="tunu-impact-container">

        <div class="tunu-impact-image">
            <img src="{{ asset('assets/img/27.jpeg') }}" alt="KMP Tunu">
        </div>

        <div class="tunu-impact-content">

            <span class="tunu-impact-label">KONTRIBUSI KMP TUNU</span>
            <h2>Dalam Angka</h2>

            <div class="tunu-impact-tabs">

                <input type="radio" name="tunuStat" id="stat-trip" checked>
                <input type="radio" name="tunuStat" id="stat-penumpang">
                <input type="radio" name="tunuStat" id="stat-motor">
                <input type="radio" name="tunuStat" id="stat-golongan">

                <div class="tunu-stat-display">

                    <div class="tunu-stat-panel panel-trip">
                        <strong>120</strong>
                        <h3>Trip per Bulan</h3>
                        <p>
                            KMP Tunu beroperasi secara rutin dalam mendukung
                            konektivitas penyeberangan yang konsisten, aman,
                            dan berkelanjutan bagi masyarakat.
                        </p>
                    </div>

                    <div class="tunu-stat-panel panel-penumpang">
                        <strong>1.231</strong>
                        <h3>Penumpang per Bulan</h3>
                        <p>
                            Melayani mobilitas masyarakat dengan mengutamakan
                            keselamatan, kenyamanan, dan keandalan layanan
                            penyeberangan setiap bulannya.
                        </p>
                    </div>

                    <div class="tunu-stat-panel panel-motor">
                        <strong>3.355</strong>
                        <h3>Kendaraan Motor per Bulan</h3>
                        <p>
                            Mendukung aktivitas harian masyarakat dan pergerakan
                            ekonomi lokal melalui layanan angkutan kendaraan
                            bermotor yang tertib dan efisien.
                        </p>
                    </div>

                    <div class="tunu-stat-panel panel-golongan">
                        <strong>1.868</strong>
                        <h3>Kendaraan Gol. IV - IX per Bulan</h3>
                        <p>
                            Berperan dalam menunjang distribusi logistik,
                            kendaraan niaga, dan rantai pasok antarwilayah
                            melalui layanan penyeberangan yang andal.
                        </p>
                    </div>

                </div>

                <div class="tunu-stat-nav">
                    <label for="stat-trip">
                        <span></span>
                        <b>120</b>
                        <small>Trip</small>
                    </label>

                    <label for="stat-penumpang">
                        <span></span>
                        <b>1.231</b>
                        <small>Penumpang</small>
                    </label>

                    <label for="stat-motor">
                        <span></span>
                        <b>3.355</b>
                        <small>Motor</small>
                    </label>

                    <label for="stat-golongan">
                        <span></span>
                        <b>1.868</b>
                        <small>Gol. IV - IX</small>
                    </label>
                </div>

            </div>

        </div>

    </div>

</section>






<section class="fleet-profile-section" id="profil">

    <div class="fleet-profile-container">

        <!-- LEFT CONTENT -->
        <div class="fleet-profile-content">

            <span class="fleet-label">PROFIL ARMADA</span>

            <h2>
                 Kapal Penumpang Terpercaya
                 untuk Perjalanan Aman dan Nyaman.
            </h2>

            <p>
                KMP TUNU JAYA 2888 merupakan armada penyeberangan yang dirancang
                untuk menghadirkan perjalanan laut yang aman, nyaman, dan efisien.
                Dengan dukungan fasilitas memadai, sistem keselamatan lengkap,
                serta kru profesional, kapal ini menjadi bagian penting dalam
                mendukung konektivitas antar wilayah Tampo–Torobulu.
            </p>

            <div class="fleet-specs">

                <div class="fleet-spec-item">
                    <span>Nama Kapal</span>
                    <strong>KMP TUNU JAYA 2888</strong>
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
                    <strong>± 210 Penumpang</strong>
                </div>

            </div>

    

        </div>

        <!-- RIGHT IMAGE -->
        <div class="fleet-profile-image">
            <img src="{{ asset('assets/img/38.jpeg') }}" alt="KMP TUNU JAYA 2888">

            <div class="fleet-route-card">
                <span>Rute Operasional</span>
                <strong>Tampo – Torobulu</strong>
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
        <h2>Kenyamanan Penumpang KMP TUNU JAYA 2888</h2>
    </div>

    <div class="facilities-grid">

        <!-- 1 -->
        <div class="facility-card large">
            <img src="assets/img/55.jpeg" alt="">

            <div class="facility-overlay">
                <span>01</span>
                <h3>Ruang EKSEKUTIF (AC)</h3>
                <p>
                    Ruang eksekutif ber-AC dengan kursi premium untuk kenyamanan maksimal.
                </p>
            </div>
        </div>

        <!-- 2 -->
        <div class="facility-card">
            <img src="assets/img/57.jpeg" alt="">

            <div class="facility-overlay">
                <span>02</span>
                <h3>Deck Atas</h3>
                <p>
                    Area deck terbuka untuk menikmati perjalanan laut dengan aman.
                </p>
            </div>
        </div>

        <!-- 3 -->
        <div class="facility-card">
            <img src="assets/img/56.jpeg" alt="">

            <div class="facility-overlay">
                <span>03</span>
                <h3>Kantin Penumpang</h3>
                <p>
                    Area kantin dengan suasana nyaman untuk memenuhi kebutuhan perjalanan.
                </p>
            </div>
        </div>

        <!-- 4 -->
        <div class="facility-card">
            <img src="assets/img/54.jpeg" alt="">

            <div class="facility-overlay">
                <span>04</span>
                <h3>Mushola</h3>
                <p>
                    Fasilitas ibadah yang bersih dan nyaman bagi penumpang selama perjalanan.
                </p>
            </div>
        </div>

        <!-- 5 -->
        <div class="facility-card">
            <img src="assets/img/53.jpeg" alt="">

            <div class="facility-overlay">
                <span>05</span>
                <h3>Area Samping Kanan</h3>
                <p>
                    Area terbuka dengan sirkulasi udara yang baik dan akses pengawasan kru.
                </p>
            </div>
        </div>

        <!-- 6 -->
        <div class="facility-card">
            <img src="assets/img/58.jpeg" alt="">

            <div class="facility-overlay">
                <span>06</span>
                <h3>Area Samping Kiri</h3>
                <p>
                    Area terbuka dengan sirkulasi udara yang baik dan akses pengawasan kru.
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
            KMP TUNU JAYA 2888 dilengkapi berbagai fasilitas keselamatan pelayaran
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

<section class="ship-tech-section">

    <div class="ship-tech-container">

        <div class="ship-tech-header">
            <span>TECHNICAL PROFILE</span>
            <h2>KMP Tunu Pratama Jaya 2888</h2>
            <p>
                Profil teknis kapal sebagai armada Roll-On/Roll-Off milik
                PT Pasca Dana Sundari.
            </p>
        </div>

        <div class="ship-tech-layout">

            <div class="ship-tech-main">
                <span>Jenis Kapal</span>
                <h3>Roll-On / Roll-Off</h3>
                <p>
                    Dirancang untuk mendukung layanan penyeberangan penumpang
                    dan kendaraan secara aman, tertib, dan efisien.
                </p>
            </div>

            <div class="ship-tech-grid">

                <div class="ship-tech-item">
                    <span>Kapasitas Penumpang</span>
                    <strong>± 210</strong>
                    <p>Penumpang</p>
                </div>

                <div class="ship-tech-item">
                    <span>Gross Tonnage</span>
                    <strong>707</strong>
                    <p>GT</p>
                </div>

                <div class="ship-tech-item">
                    <span>Length Overall</span>
                    <strong>60.20</strong>
                    <p>Meter</p>
                </div>

                <div class="ship-tech-item">
                    <span>Call Sign</span>
                    <strong>JZQV</strong>
                    <p>Tanda Panggil</p>
                </div>

                <div class="ship-tech-item">
                    <span>IMO Number</span>
                    <strong>8694936</strong>
                    <p>Nomor Identifikasi</p>
                </div>

                <div class="ship-tech-item">
                    <span>Pemilik Kapal</span>
                    <strong>PDS</strong>
                    <p>PT Pasca Dana Sundari</p>
                </div>

            </div>

        </div>

    </div>

</section>

@endsection