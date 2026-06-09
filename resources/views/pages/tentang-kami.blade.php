@extends('layouts.app')

@section('title', 'Profil Perusahaan')

@section('content')

<!-- GOOGLE FONT -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- FONT AWESOME (Cukup satu versi terbaru) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>


<!-- CSS UTAMA -->
<link rel="stylesheet" href="{{ asset('assets/css/tentang-kami.css') }}?v=2">

<div class="pds-about-premium">
    <div class="pds-about-bg"></div>

    <div class="pds-about-inner">
        <div class="pds-about-content">
            <span class="pds-about-label">PROFIL PERUSAHAAN</span>

            <h1>TENTANG KAMI</h1>
            <p>
                PT Pasca Dana Sundari merupakan perusahaan jasa transportasi
                penyeberangan yang berbasis di Balikpapan, Kalimantan Timur.
                Kami bangga mengoperasikan dua trayek utama, yaitu
                Tampo – Torobulu dan Balikpapan – Penajam.
            </p>
        </div>
    </div>
</div>

<!-- ================= MENDUKUNG BISNIS ================= -->
<section class="support">

    <div class="support-container">

        <h2>MENDUKUNG BISNIS</h2>

        <div class="support-flex">

            <div class="card">
                <img src="assets/img/44.png" alt="">
                <div class="card-overlay">
                    <h3>Inovasi Green Port Nusantara</h3>
                    <p class="sub">Anjungan Listrik Mandiri</p>
                    <a href="/alma" class="btn-outline">
                        Lihat Detailnya →
                    </a>
                    </a>
                </div>
            </div>

            <div class="card">
                <img src="assets/img/29.jpg" alt="">
                <div class="card-overlay">
                    <h3>keamananan dan Keselamatan</h3>
                    <p class="sub">Sertifikasi ILR, PMK, dan HRU</p>
                    <a href="/keselamatan" class="btn-outline">
                        Lihat Detailnya →
                    </a>
                </div>
            </div>

            <div class="card">
                <img src="assets/img/31.jpeg" alt="">
                <div class="card-overlay">
                    <h3>Kelaikan Teknis Armada</h3>
                    <p class="sub">Sertifikat Klasifikasi Mesin</p>
                    <a href="/kelaikan" class="btn-outline">
                        Lihat Detailnya →
                    </a>
                </div>
            </div>

            <div class="card">
                <img src="assets/img/15.jpeg" alt="">
                <div class="card-overlay">
                   <h3>Manajemen Armada & Kru</h3>
                    <p class="sub">Sistem Ketatanagakerjaan Pelayaran yang Andal</p>
                    <a href="/manajemen" class="btn-outline">
                        Lihat Detailnya →
                    </a>
                </div>
            </div>

        </div>

    </div>

</section>

<section class="vision-section" id="visi-misi">

    <div class="vision-container">

        <div class="vision-head">
            <span>VISI & MISI</span>
            <h2>Arah Perusahaan Dalam Membangun Layanan Penyeberangan Yang Andal</h2>
        </div>

        <div class="vision-content">

            <div class="vision-box">
                <h3>Visi</h3>
                <p>
                    Menjadi perusahaan penyeberangan yang unggul, terpercaya, profesional,
                    dan berkelanjutan dengan mengutamakan keselamatan, pelayanan, serta
                    kepuasan pelanggan.
                </p>
            </div>

            <div class="mission-box">
                <h3>Misi</h3>

                <div class="mission-list">

                    <div class="mission-item">
                        <span>01</span>
                        <p>Mengutamakan keselamatan penumpang, awak kapal, dan armada dalam setiap operasional.</p>
                    </div>

                    <div class="mission-item">
                        <span>02</span>
                        <p>Memberikan layanan yang profesional, ramah, tepat waktu, dan berorientasi pada pelanggan.</p>
                    </div>

                    <div class="mission-item">
                        <span>03</span>
                        <p>Menjaga kelayakan dan kesiapan armada melalui perawatan serta pengawasan berkala.</p>
                    </div>

                    <div class="mission-item">
                        <span>04</span>
                        <p>Mengembangkan sumber daya manusia yang kompeten, disiplin, dan berintegritas.</p>
                    </div>

                    <div class="mission-item">
                        <span>05</span>
                        <p>Mendorong inovasi layanan dan tata kelola perusahaan yang modern serta berkelanjutan.</p>
                    </div>

                    <div class="mission-item">
                        <span>06</span>
                        <p>Mendukung konektivitas antar wilayah melalui layanan penyeberangan yang aman dan andal.</p>
                    </div>

                </div>
            </div>

        </div>

    </div>

</section>



<section class="management-section" id="dewan-komisaris-direksi">
    <div class="mgt-container">

        <div class="mgt-group">
            <h2 class="mgt-title">DEWAN KOMISARIS & DIREKSI</h2>

            <div class="mgt-grid">
                @foreach ($dewan as $item)
                    <div class="mgt-card">
                        <img src="{{ asset('assets/img/management/' . $item->foto) }}"
                             alt="{{ $item->nama }}">

                        <div class="mgt-overlay">
                            <h3>{{ $item->nama }}</h3>
                            <p>{{ $item->jabatan }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mgt-group" id="manajemen">
            <h2 class="mgt-title">MANAJEMEN</h2>

            <div class="mgt-grid four-cols">
                @foreach ($manajemen as $item)
                    <div class="mgt-card">
                        <img src="{{ asset('assets/img/management/' . $item->foto) }}"
                             alt="{{ $item->nama }}">

                        <div class="mgt-overlay">
                            <h3>{{ $item->nama }}</h3>
                            <p>{{ $item->jabatan }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const sliders = document.querySelectorAll('.mgt-grid');

    sliders.forEach(slider => {

        let index = 0;
        const cards = slider.querySelectorAll('.mgt-card');

        function autoSlide() {

            if (window.innerWidth > 768) return;

            index++;

            if(index >= cards.length){
                index = 0;
            }

            slider.scrollTo({
                left: cards[index].offsetLeft,
                behavior: 'smooth'
            });
        }

        setInterval(autoSlide, 3000);
    });

});
</script>

<section class="org-section" id="struktur-organisasi">

    <div class="org-header">
        <span>STRUKTUR ORGANISASI</span>
        <h2>Manajemen Perusahaan</h2>
        <p>
            Susunan organisasi PT Pasca Dana Sundari dalam mendukung tata kelola
            perusahaan yang profesional, terstruktur, dan bertanggung jawab.
        </p>
    </div>

    <div class="org-scroll">
        <div class="org-chart">

            <!-- DIREKSI -->
            <div class="org-level">
                <div class="org-box main-box">
                    <div class="org-top main-top">DIREKSI</div>
                </div>
            </div>

            <div class="org-main-line"></div>

            <!-- BARIS UTAMA -->
            <div class="org-grid">

                <div class="org-branch">
                    <div class="org-box">
                        <div class="org-top">KESELAMATAN KESEHATAN <br>DAN LINGKUNGAN</div>
                        <div class="org-bottom">DPA</div>
                    </div>

                    <div class="org-line"></div>

                    <div class="org-box second">
                        <div class="org-bottom only">PENGENDALI<br>DOKUMEN</div>
                    </div>
                </div>

                <div class="org-branch">
                    <div class="org-box">
                        <div class="org-top">PENGAWAS INTERNAL</div>
                        <div class="org-bottom">KEPALA SPI</div>
                    </div>

                    <div class="org-line"></div>

                    <div class="org-box second">
                        <div class="org-bottom only">AUDITOR</div>
                    </div>
                </div>

                <div class="org-branch">
                    <div class="org-box">
                        <div class="org-top">PERWAKILAN</div>
                        <div class="org-bottom">MANAGER</div>
                    </div>

                    <div class="org-line"></div>

                    <div class="org-box second">
                        <div class="org-bottom only">SUPERVISOR</div>
                    </div>
                </div>

                <div class="org-branch">
                    <div class="org-box">
                        <div class="org-top">USAHA & TEKNIK</div>
                        <div class="org-bottom">MANAGER</div>
                    </div>

                    <div class="org-line"></div>

                    <div class="org-box second">
                        <div class="org-bottom only">ASISTEN<br>MANAGER</div>
                    </div>
                </div>

                <div class="org-branch">
                    <div class="org-box">
                        <div class="org-top">KEU & SDM UMUM</div>
                        <div class="org-bottom">MANAGER</div>
                    </div>

                    <div class="org-line"></div>

                    <div class="org-box second">
                        <div class="org-bottom only">KASIR</div>
                    </div>
                </div>

                <div class="org-branch">
                    <div class="org-box">
                        <div class="org-top">ARMADA KAPAL</div>
                        <div class="org-bottom">NAKHODA</div>
                    </div>

                    <div class="org-line invisible"></div>

                    <div class="org-box second ghost">
                        <div class="org-bottom only">-</div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        const scrollContainer = document.querySelector('.org-scroll');
        const chartContent = document.querySelector('.org-chart');

        if (!scrollContainer || !chartContent) return;

        // Fungsi untuk menggeser ke tengah
        function scrollToCenter() {
            const centerPosition = (chartContent.offsetWidth - scrollContainer.offsetWidth) / 2;
            scrollContainer.scrollLeft = centerPosition;
        }

        // Jalankan sekali saat semua aset (termasuk CSS) selesai diload sepenuhnya
        window.addEventListener('load', scrollToCenter);

        // Gunakan IntersectionObserver agar mendeteksi saat section masuk ke layar
        const observer = new IntersectionObserver((entries, observerInstance) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    scrollToCenter();
                    // Putus observer setelah berhasil ke tengah agar tidak mengganggu scroll manual user
                    observerInstance.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 }); // Memicu fungsi saat 10% bagian section mulai terlihat

        observer.observe(scrollContainer);
    });
</script>



<section class="history-section" id="sejarah-kami">

    <div class="history-header">

        <span>SEJARAH KAMI</span>

        <h2>
            Sejarah Perusahaan
        </h2>

        <p>Perjalanan pertumbuhan, inovasi,
            dan pencapaian yang berkelanjutan selama bertahun-tahun.</p>

    </div>

    <div class="history-timeline">

        <div class="history-row">

            <div class="history-left">
                <div class="history-text">
                    <h3>1998</h3>
                    <h4>Berdirinya Perusahaan</h4>
                    <p>
                        Didirikan pada 14 September 1998 di Jakarta berdasarkan
                        Akta Pendirian Perseroan Terbatas yang disahkan oleh
                        Notaris Ny. Anna Sunarhadi, S.H.
                    </p>
                </div>
            </div>

            <div class="history-center">
                <div class="history-dot"></div>
            </div>

            <div class="history-right">
                <div class="history-image">
                    <img src="{{ asset('assets/img/18.png') }}" alt="">
                </div>
            </div>

        </div>

        <div class="history-row">

            <div class="history-left">
                <div class="history-text">
                    <h3>2001</h3>
                    <h4>Pembelian Kapal Cepat</h4>
                    <p>
                        PT Pasca Dana Sundari melakukan pembelian kapal cepat pertama untuk mendukung
                        layanan lintasan Merak - Bakauheni
                    </p>
                </div>
            </div>

            <div class="history-center">
                <div class="history-dot"></div>
            </div>

            <div class="history-right">
                <div class="history-image">
                    <img src="{{ asset('assets/img/46.png') }}" alt="">
                </div>
            </div>

        </div>

        <div class="history-row">

            <div class="history-left">
                <div class="history-text">
                    <h3>2002</h3>
                    <h4>Perluasan Cakupan</h4>
                    <p>
                        Perluasan cakupan operasional di lintasan Kariangau – Penajam melalui pengalihan dan perubahan kepemilikan Gross Akta KMP Tawes dari ASDP ke PT Pasca Dana Sundari (PDS) pada 17 April 2002.
                    </p>
                </div>
            </div>

            <div class="history-center">
                <div class="history-dot"></div>
            </div>

            <div class="history-right">
                <div class="history-image">
                    <img src="{{ asset('assets/img/5.jpeg') }}" alt="">
                </div>
            </div>

        </div>

        <div class="history-row">

            <div class="history-left">
                <div class="history-text">
                    <h3>2019</h3>
                    <h4>Pembelian Lahan</h4>
                    <p>
                        Pembelian lahan pun dilakukan Perusahaan
                        guna menunjang kebutuhan
                        operasional. Jl. Manunggal No. 83,
                        Gunung Bahagia menjadi Lokasi
                        Kantor Pusat PT Pasca Dana Sundari
                    </p>
                </div>
            </div>

            <div class="history-center">
                <div class="history-dot"></div>
            </div>

            <div class="history-right">
                <div class="history-image">
                    <img src="{{ asset('assets/img/49.png') }}" alt="">
                </div>
            </div>

        </div>

        <div class="history-row">

            <div class="history-left">
                <div class="history-text">
                    <h3>2019</h3>
                    <h4>Modernisasi Armada</h4>
                    <p>
                        Memperluas jangkauan operasional dan meningkatkan
                        kapasitas armada perusahaan untuk pelayanan lebih baik.
                    </p>
                </div>
            </div>

            <div class="history-center">
                <div class="history-dot"></div>
            </div>

            <div class="history-right">
                <div class="history-image">
                    <img src="{{ asset('assets/img/50.jpeg') }}" alt="">
                </div>
            </div>

        </div>

        <div class="history-row">

            <div class="history-left">
                <div class="history-text">
                    <h3>2023</h3>
                    <h4>Penguatan Budaya Keselamatan dan Profesionalitas</h4>
                    <p>
                        Sebagai bentuk komitmen
                        perusahaan terhadap keselamatan
                        kerja dan kualitas operasional,
                        PT Pasca Dana Sundari
                        menyelenggarakan Safety Meeting
                        bersama Direktur Utama dan jajaran
                        manajemen.
                    </p>
                </div>
            </div>

            <div class="history-center">
                <div class="history-dot"></div>
            </div>

            <div class="history-right">
                <div class="history-image">
                    <img src="{{ asset('assets/img/51.jpeg') }}" alt="">
                </div>
            </div>

        </div>

    </div>

</section>



<section class="transform-video-style" id="transformasi">

    <div class="transform-video-title">
        <span>TRANSFORMASI 2023</span>
        <h2>
            Perubahan Menuju Perusahaan
            yang Lebih Profesional
        </h2>
    </div>

    <div class="transform-panel-wrap">


        <div class="transform-panel">

            <div class="transform-card-bg">
                <img src="{{ asset('assets/img/72.jpeg') }}" alt="">
            </div>

            <div class="transform-panel-content">
                <div class="transform-icon">
                    <i class="fa-solid fa-sitemap"></i>
                </div>

                <h3>Tata Kelola</h3>

                <p>
                    Struktur organisasi dan pembagian tanggung jawab yang lebih jelas,
                    terukur, dan akuntabel.
                </p>
            </div>

        </div>

        <div class="transform-panel">

            <div class="transform-card-bg">
                <img src="{{ asset('assets/img/71.jpeg') }}" alt="">
            </div>

            <div class="transform-panel-content">
                <div class="transform-icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <h3>ISM Code</h3>

                <p>
                    Penerapan standar keselamatan sebagai pedoman operasional perusahaan.
                </p>
            </div>

        </div>

        <div class="transform-panel">

            <div class="transform-card-bg">
                <img src="{{ asset('assets/img/70.jpeg') }}" alt="">
            </div>

            <div class="transform-panel-content">
                <div class="transform-icon">
                    <i class="fa-solid fa-users-gear"></i>
                </div>

                <h3>SDM & Budaya Kerja</h3>

                <p>
                    Penguatan kompetensi personel serta pembentukan budaya kerja
                    yang lebih profesional.
                </p>
            </div>

        </div>

        <div class="transform-panel">

            <div class="transform-card-bg">
                <img src="{{ asset('assets/img/24.png') }}" alt="">
            </div>

            <div class="transform-panel-content">
                <div class="transform-icon">
                    <i class="fa-solid fa-clipboard-check"></i>
                </div>

                <h3>SOP & Sistem Kerja</h3>

                <p>
                    Standarisasi proses kerja agar operasional lebih rapi,
                    efektif, dan konsisten.
                </p>
            </div>

        </div>


</section>

<script>
document.addEventListener('DOMContentLoaded', function(){

    if(window.innerWidth <= 768){

        const panels =
            document.querySelectorAll('.transform-panel');

        panels.forEach(panel => {

            panel.addEventListener('click', function(){

                panels.forEach(item => {
                    item.classList.remove('active-mobile');
                });

                this.classList.add('active-mobile');

            });

        });

    }

});
</script>



<!-- ========================================
     MAKNA LOGO SECTION
======================================== -->

<section class="logo-meaning-section" id="falsafah-logo">

    <div class="logo-meaning-container">

        <!-- LEFT -->
        <div class="logo-meaning-left">

            <span class="section-label">IDENTITAS VISUAL</span>

            <h2>
                Makna Logo<br>
                <span>PT Pasca Dana Sundari</span>
            </h2>

            <p>
                Transformasi logo PT Pasca Dana Sundari merupakan langkah strategis
                dalam memperkuat identitas visual perusahaan di industri penyeberangan
                nasional. Logo baru mencerminkan semangat untuk terus berkembang,
                menghadirkan layanan profesional, dan menjaga kepercayaan pelanggan.
            </p>

            <p>
                Dengan tetap mempertahankan bentuk dasar khas “PDS”, logo ini menjadi
                simbol keandalan, integritas, tanggung jawab, serta komitmen untuk
                melangkah maju dalam setiap pelayaran.
            </p>

        </div>

        <!-- RIGHT -->
        <div class="logo-meaning-right">

            <div class="logo-card main-logo-card">
                <div class="logo-preview">
                    <img src="{{ asset('assets/img/17.png') }}" alt="Logo PDS">
                </div>

                <h3>Transformasi Identitas</h3>

                <p>
                    Harmoni antara inovasi dan warisan sejarah yang tampil lebih modern,
                    tegas, dan relevan dengan arah transformasi perusahaan.
                </p>
            </div>

        </div>

    </div>

</section>

<section class="logo-rationale-section">

    <!-- TITLE -->
    <div class="logo-rationale-header">

        <h2>
            Rasional Logo<br>
            <span>& Warna</span>
        </h2>

    </div>

    <!-- CONTENT -->
    <div class="logo-rationale-wrapper">

        <!-- CENTER LOGO -->
        <div class="center-logo">
            <img src="{{ asset('assets/img/18.png') }}" alt="">
        </div>

        <!-- LINE -->
        <div class="cross-line horizontal"></div>
        <div class="cross-line vertical"></div>

        <!-- ITEM -->
        <div class="rationale-item top-left">

            <h4>Bumerang</h4>

            <img src="{{ asset('assets/img/19.jpeg') }}" alt="">

            <p>
                Melambangkan dinamika perusahaan dalam menghadapi tantangan
                operasional pelayaran dengan ketangguhan, konsistensi,
                dan strategi yang matang.
            </p>

        </div>

        <!-- ITEM -->
        <div class="rationale-item top-right">

            <h4>Jajar Genjang & Garis</h4>

            <img src="{{ asset('assets/img/20.jpeg') }}" alt="">

            <p>
                Merepresentasikan komitmen perusahaan terhadap keselamatan,
                profesionalisme, dan pelayanan penyeberangan yang konsisten.
            </p>

        </div>

        <!-- ITEM -->
        <div class="rationale-item bottom-left">

            <h4>Makna Warna</h4>

            <img src="{{ asset('assets/img/21.jpeg') }}" alt="">

            <p>
                Biru mencerminkan kepercayaan dan profesionalisme.
                Merah melambangkan keberanian dan semangat transformasi.
                Hitam menunjukkan ketegasan serta integritas perusahaan.
            </p>  

        </div>

        <!-- ITEM -->
        <div class="rationale-item bottom-right">
            <h4>Lingkaran</h4>            

            <img src="{{ asset('assets/img/22.jpeg') }}" alt="">

            <p>
                Menjadi simbol kesatuan, kesinambungan, dan komitmen perusahaan
                dalam menjaga pelayanan yang aman dan berkelanjutan.
            </p>

        </div>

    </div>

</section>

<script>
const cards = document.querySelectorAll(".card");

cards.forEach(card => {
    card.addEventListener("click", () => {

        // hapus active dari semua
        cards.forEach(c => c.classList.remove("active"));

        // tambahkan ke yang diklik
        card.classList.add("active");

    });
});
</script>

<script src="{{ asset('assets/js/index.js') }}"></script>

@endsection