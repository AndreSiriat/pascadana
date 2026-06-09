@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<!-- GOOGLE FONT -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- FONT AWESOME -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>


<!-- CSS -->
 <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}v=2">

<!-- =========================================
     HERO SECTION
========================================= -->


<div class="hero-container">

    <div class="hero-slider">
        

        <img src="{{ asset('assets/img/27.jpeg') }}" alt="Ferry Image" class="slide active">
    </div>

    <div class="overlay"></div>

    <div class="hero-arrow left" id="prevBtn">
        <i class="fa-solid fa-chevron-left"></i>
    </div>

    <div class="hero-arrow right" id="nextBtn">
        <i class="fa-solid fa-chevron-right"></i>
    </div>

    <div class="hero-content">
        <span class="hero-subtitle">
            Menghubungkan Pulau, Menyampaikan Kepercayaan
        </span>

        <h1>
            Kepercayaan Dalam
            <br>
            Setiap Perjalanan
        </h1>

        <p>
            Trusted Voyage
        </p>

        <div class="hero-features">
<a href="{{ route('kmp-tunu') }}#spesifikasi" class="feature-link">
    <div class="feature-box">
        <div class="feature-icon"><i class="fa-solid fa-car"></i></div>
        <span>Pengangkutan Kendaraan</span>
    </div>
</a>

<a href="{{ route('kmp-tunu') }}#spesifikasi" class="feature-link">
    <div class="feature-box">
        <div class="feature-icon"><i class="fa-solid fa-car"></i></div>
        <span>Pengangkutan Kendaraan</span>
    </div>
</a>

    <a href="{{ route('kapal') }}#armada-kami" class="feature-link">
        <div class="feature-box">
            <div class="feature-icon"><i class="fa-solid fa-route"></i></div>
            <span>Berbagai Pilihan Rute</span>
        </div>
    </a>

    <a href="{{ route('standar-keselamatan') }}" class="feature-link">
        <div class="feature-box">
            <div class="feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
            <span>Prioritas Keselamatan</span>
        </div>
    </a>
</div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const slides = document.querySelectorAll(".hero-slider .slide");
        const nextBtn = document.getElementById("nextBtn");
        const prevBtn = document.getElementById("prevBtn");
        let currentIdx = 0;

        function changeSlide(index) {
            // Hapus class active dari slide saat ini
            slides[currentIdx].classList.remove("active");

            // Jika slide saat ini adalah video, pause videonya saat ditinggal
            if (slides[currentIdx].tagName === "VIDEO") {
                slides[currentIdx].pause();
            }
            
            // Hitung indeks slide berikutnya
            currentIdx = (index + slides.length) % slides.length;
            
            // Tambahkan class active ke slide baru
            slides[currentIdx].classList.add("active");

            // Jika slide baru adalah video, mainkan otomatis dari awal
            if (slides[currentIdx].tagName === "VIDEO") {
                slides[currentIdx].currentTime = 0;
                slides[currentIdx].play().catch(error => console.log("Autoplay dicegah oleh browser:", error));
            }
        }

        // Event tombol panah kanan (>)
        nextBtn.addEventListener("click", function() {
            changeSlide(currentIdx + 1);
        });

        // Event tombol panah kiri (<)
        prevBtn.addEventListener("click", function() {
            changeSlide(currentIdx - 1);
        });
    });
</script>

<section class="trusted-simple">
    <div class="trusted-simple-container">

        <div class="trusted-simple-image">
            <img src="{{ asset('assets/img/38.jpeg') }}" alt="Trusted Voyage">
        </div>

        <div class="trusted-simple-content">
            <img class="trusted-simple-logo"
                 src="{{ asset('assets/img/69.png') }}"
                 alt="Trusted Voyage">

            <h2>
                Kepercayaan Dalam Setiap Perjalanan
            </h2>

            <p>
                Tagline ini merepresentasikan semangat PT Pasca Dana Sundari sebagai perusahaan pelayaran yang berkomitmen menghadirkan perjalanan laut yang aman, 
                profesional, dan dapat dipercaya. Trusted Voyage menggambarkan keyakinan bahwa setiap pelayaran adalah wujud tanggung jawab untuk menjaga keselamatan, keandalan, serta kenyamanan seluruh pengguna jasa.
            </p>

        </div>

    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const sections = document.querySelectorAll('.trusted-simple');

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);

            }

        });

    }, {
        threshold: 0.15
    });

    sections.forEach(section => {
        observer.observe(section);
    });

});
</script>

<!-- =========================================
     SEDIKIT TENTANG KAMI
========================================= -->
<section class="about-banner">

    <img src="{{ asset('assets/img/42.png') }}" alt="About Banner">

    <div class="about-overlay"></div>

    <div class="about-banner-content">

        <span class="banner-fade-up">
            SEKILAS PDS FERRY
        </span>

        <h2 class="banner-fade-up">
            Tentang Kami
        </h2>

        <p class="banner-fade-up">
            PT Pasca Dana Sundari berawal dari tekad untuk menghadirkan layanan transportasi laut 
            yang aman, terpercaya, dan terjangkau bagi masyarakat Indonesia.
        </p>

        <div class="about-banner-btn banner-fade-up">

            <a href="/tentang-kami" class="primary-btn">
                Selengkapnya
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>

        </div>

    </div>

</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Ambil semua section yang ingin dianimasikan saat di-scroll
        const animatedSections = document.querySelectorAll('.about-section, .about-banner');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Tambahkan class is-visible ke section yang sedang dilihat
                    entry.target.classList.add('is-visible');
                    // Stop observe agar animasi hanya berjalan 1 kali saja
                    observer.unobserve(entry.target); 
                }
            });
        }, {
            threshold: 0.15 // Animasi mulai aktif saat 15% bagian section masuk layar
        });

        // Daftarkan setiap section ke observer
        animatedSections.forEach(section => {
            observer.observe(section);
        });
    });
</script>

<!-- ========================================
     nilai SECTION
======================================== -->

<section class="nilai-section">
    <div class="nilai-top">
        <div class="nilai-left">
            <span>KOMITMEN</span>
            <h2>Melayani Dengan Integritas</h2>
        </div>

        <div class="nilai-right">
            <p>
                Menggambarkan semangat Pasca Dana Sundari dalam memberikan pelayanan penyebrangan yang berlandaskan
                tanggung jawab, profesionalisme, dan semangat kemaritiman demi keterhubungan antar daerah.
            </p>

        </div>
    </div>

    <div class="nilai-slider">
        <div class="slider-image">
            <img id="mainImage" src="{{ asset('assets/img/4.jpeg') }}" alt="">
        </div>

        <div class="cards-wrapper">
            <div class="cards-track" id="cardsTrack">
                <div class="nilai-card active" data-image="{{ asset('assets/img/4.jpeg') }}">
                    <h3>Tim Profesional</h3>
                    <div class="line"></div>
                    <p>
                        Seluruh kru memiliki kompetensi tinggi di bidang maritim untuk memastikan pelayanan terbaik dan operasional yang standar.
                    </p>
                    <div class="arrow-icon"></div>
                </div>

                <div class="nilai-card" data-image="{{ asset('assets/img/24.png') }}">
                    <h3>Kelayakan Laut</h3>
                    <div class="line"></div>
                    <p>
                        Kelaikan laut resmi dari otoritas pelabuhan dan Docking Rutin yang terjadwalkan.
                    </p>
                    <div class="arrow-icon"></div>
                </div>

                <div class="nilai-card" data-image="{{ asset('assets/img/25.jpg') }}">
                    <h3>Standar Keselamatan</h3>
                    <div class="line"></div>
                    <p>
                        Mengutamakan keselamatan dengan kru yang terlatih dalam simulasi keadaan darurat, 
                        serta didukung oleh penyediaan alat keselamatan yang lengkap dan siap pakai.
                    </p>
                    <div class="arrow-icon"></div>
                </div>

                <div class="nilai-card" data-image="{{ asset('assets/img/26.jpg') }}">
                    <h3>Kepatuhan Hukum</h3>
                    <div class="line"></div>
                    <p>
                        Menjalankan standar operasional penyeberangan dengan kepatuhan hukum yang tinggi dan 
                        menjunjung tinggi etika kerja.
                    </p>
                    <div class="arrow-icon"></div>
                </div>
            </div>
        </div>

        <div class="slider-nav">
            <button id="nilaiPrevBtn" type="button">
                <i class="fa-solid fa-arrow-left"></i>
            </button>

            <button id="nilaiNextBtn" type="button">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>


<section class="corp-stats-section">
  <!-- Bagian Atas / Header -->
  <div class="corp-stats__header">
    <div class="corp-stats__header-left">
      <span class="corp-stats__eyebrow corp-stats__eyebrow--blue">KINERJA OPERASIONAL</span>
      <h2 class="corp-stats__title">Menjaga Mobilitas, Menghubungkan Ekspedisi</h2>
    </div>
    <div class="corp-stats__header-right">
      <p class="corp-stats__description">
        Kami terus berkomitmen memberikan pelayanan penyebrangan yang andal, aman, dan efisien demi mendukung produktivitas dan konektivitas yang terintegrasi setiap harinya.
      </p>
    </div>
  </div>

  <hr class="corp-stats__divider">

  <!-- Bagian Grid Angka / Metrik -->
  <div class="corp-stats__grid">
    <!-- Kolom 1 -->
    <div class="corp-stats__card">
  <span class="corp-stats__card-eyebrow">TOTAL PENUMPANG</span>
  <div class="corp-stats__number-wrapper">
    <span class="corp-stats__number counter" data-target="10000">0</span>
    <span class="corp-stats__label">/ Bulan</span>
  </div>
  <p class="corp-stats__card-desc">Jumlah penumpang yang dilayani dengan standar keselamatan tertinggi.</p>
</div>

<div class="corp-stats__card">
  <span class="corp-stats__card-eyebrow">VOLUME KENDARAAN</span>
  <div class="corp-stats__number-wrapper">
    <span class="corp-stats__number counter" data-target="4000">0</span>
    <span class="corp-stats__label">/ Bulan</span>
  </div>
  <p class="corp-stats__card-desc">Mobilitas armada yang terkelola dengan efisiensi optimal di seluruh lini.</p>
</div>

<div class="corp-stats__card">
  <span class="corp-stats__card-eyebrow">FREKUENSI PERJALANAN</span>
  <div class="corp-stats__number-wrapper">
    <span class="corp-stats__number counter" data-target="600">0</span>
    <span class="corp-stats__label">Trip / Bulan</span>
  </div>
  <p class="corp-stats__card-desc">Perjalanan berkala yang terjadwal secara konsisten dan tepat waktu.</p>
</div>
  </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll('.counter');
  const speed = 60; // Semakin kecil angkanya, animasi berjalan semakin cepat

  const startCounter = (entries, observer) => {
    entries.forEach(entry => {
      // Jika section stat/metrik sudah terlihat di layar user
      if (entry.isIntersecting) {
        const counter = entry.target;
        const target = +counter.getAttribute('data-target');
        
        const updateCount = () => {
          const count = +counter.innerText.replace(/\D/g, ''); // Ambil angka murni saat ini
          const inc = Math.ceil(target / speed); // Hitung kelipatan kenaikan angka

          if (count < target) {
            const nextCount = count + inc;
            // Jika melebihi target, kunci di angka target, jika tidak gunakan nextCount
            const finalCount = nextCount > target ? target : nextCount;
            
            // Format angka menggunakan format Indonesia (titik sebagai ribuan)
            counter.innerText = finalCount.toLocaleString('id-ID');
            
            setTimeout(updateCount, 20); // Jalankan ulang setiap 20 milidetik
          } else {
            // Jika sudah mencapai target, kembalikan tanda ++ khusus untuk kolom 1 dan 2
            if (target === 10000 || target === 4000) {
              counter.innerText = target.toLocaleString('id-ID') + '++';
            } else {
              counter.innerText = target.toLocaleString('id-ID');
            }
          }
        };

        updateCount();
        observer.unobserve(counter); // Berhenti mengawasi elemen jika animasi sudah jalan sekali
      }
    });
  };

  // Setup observer untuk mendeteksi scroll
  const counterObserver = new IntersectionObserver(startCounter, {
    root: null,
    threshold: 0.2 // Animasi mulai saat 20% bagian elemen masuk ke layar
  });

  counters.forEach(counter => counterObserver.observe(counter));
});
</script>





<!-- RRRRRRRUUUUUUUUUUUUUTTTTTTTTTTEEEEEEEEEEE -->

<section class="routes-section">
    <div class="container">
        <div class="section-header">
            <h2>Rute & Destinasi Utama</h2>
            <p>Menghubungkan titik-titik strategis dengan armada terbaik kami.</p>
        </div>

        <div class="routes-grid">
            <!-- Rute 1 -->
            <div class="route-card" data-aos="fade-up">
                <div class="route-image">
                    <img src="{{ asset('assets/img/3.png') }}" alt="Rute Pelabuhan A - B">
                    <div class="route-overlay">
                        <span class="badge">Rute Populer</span>
                    </div>
                </div>
                <div class="route-content">
                    <h3>Tampo - Torobulu</h3>
                    <p class="route-desc">Penyeberangan utama yang menghubungkan Pulau Sulawesi dengan Pulau Muna dengan layanan 24 jam.</p>
                    <div class="vessel-info">
                        <i class="fas fa-ship"></i>
                        <span>Dilayani oleh: <strong>KMP TUNU PRATAMA JAYA 2888</strong></span>
                    </div>
                    <a href="/schedule" class="btn-route">Lihat Jadwal</a>
                </div>
            </div>

            <!-- Rute 2 -->
            <div class="route-card" data-aos="fade-up" data-aos-delay="200">
                <div class="route-image">
                    <img src="{{ asset('assets/img/5.jpeg') }}" alt="Rute Pelabuhan C - D">
                    <div class="route-overlay">
                        <span class="badge">Lintas Strategis</span>
                    </div>
                </div>
                <div class="route-content">
                    <h3>Kariangau - Penajam</h3>
                    <p class="route-desc">Gerbang utama transportasi laut yang menghubungkan Kota Balikpapan dengan Kabupaten Penajam Paser Utara.</p>
                    <div class="vessel-info">
                        <i class="fas fa-ship"></i>
                        <span>Dilayani oleh: <strong>KMP TAWES</strong></span>
                    </div>
                    <a href="/schedule" class="btn-route">Lihat Jadwal</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION BERITA MULAI -->
<!-- ================= PDS NEWS ================= -->
<section class="pds-news">

    <div class="pds-news-wrapper">

        <!-- LEFT -->
        <div class="pds-news-left">

            <span class="pds-mini-title">
                INFORMASI TERBARU
            </span>

            <h2>
                Berita &
                Aktivitas
            </h2>

            <p>
                Ikuti berbagai aktivitas operasional,
                keselamatan pelayaran dan informasi terbaru
                PT. Pasca Dana Sundari.
            </p>

            <a href="/berita" class="pds-news-link">
                Baca Selengkapnya →
            </a>

        </div>

<!-- RIGHT -->
<div class="pds-news-right">

    <!-- SLIDER -->
    <div class="pds-news-slider">

        <div class="pds-news-track" id="newsTrack">

            @foreach($berita as $item)

            <div class="pds-news-card">

                <!-- IMAGE -->
                <div class="pds-news-image">

                    <img
                        src="{{ asset('assets/img/news/' . $item->thumbnail) }}"
                        alt="{{ $item->judul }}">

                </div>

                <!-- CONTENT -->
                <div class="pds-news-content">

                    <span class="pds-news-date">

                        {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('j F Y') }}

                    </span>

                    <h3>
                        {{ $item->judul }}
                    </h3>

                    <p>
                        {{ strip_tags($item->isi) }}
                    </p>

                    <a href="/berita/{{ $item->slug }}"
                        class="pds-readmore">

                        Read More →

                    </a>

                </div>

            </div>

            @endforeach

        </div>

    </div>

    <!-- NAVIGATION -->
    <div class="pds-news-nav">

        <button id="newsPrev">
            <i class="fa-solid fa-arrow-left"></i>
            
        </button>

        <button id="newsNext">
            <i class="fa-solid fa-arrow-right"></i>
        </button>

    </div>

</div>

            </div>

        </div>

    </div>

</section>

<!-- ================= JAVASCRIPT ================= -->
<script>

document.addEventListener("DOMContentLoaded", () => {

    const track = document.getElementById("newsTrack");

    const prevBtn = document.getElementById("newsPrev");
    const nextBtn = document.getElementById("newsNext");

    let originalCards =
        document.querySelectorAll(".pds-news-card");

    // DUPLICATE
    originalCards.forEach(card => {

        const clone = card.cloneNode(true);

        track.appendChild(clone);

    });

    let cards =
        document.querySelectorAll(".pds-news-card");

    let currentIndex = 0;

    let autoSlide;

    // GET WIDTH
    function getCardWidth(){

        if(window.innerWidth <= 768){

            return document.querySelector(
                ".pds-news-slider"
            ).clientWidth;

        }else{

            return cards[0].offsetWidth + 24;

        }

    }

    // UPDATE
    function updateSlider(){

        const width = getCardWidth();

        track.style.transform =
            `translateX(-${currentIndex * width}px)`;

    }

    // NEXT
    function nextSlide(){

        currentIndex++;

        track.style.transition =
            "transform .6s ease";

        updateSlider();

        if(currentIndex >= originalCards.length){

            setTimeout(() => {

                track.style.transition = "none";

                currentIndex = 0;

                updateSlider();

            }, 650);

        }

    }

    // PREV
    function prevSlide(){

        if(currentIndex <= 0){

            track.style.transition = "none";

            currentIndex = originalCards.length;

            updateSlider();

        }

        setTimeout(() => {

            currentIndex--;

            track.style.transition =
                "transform .6s ease";

            updateSlider();

        }, 20);

    }

    // BUTTON
    nextBtn.addEventListener("click", () => {

        nextSlide();
        restartAuto();

    });

    prevBtn.addEventListener("click", () => {

        prevSlide();
        restartAuto();

    });

    // AUTO
    function startAuto(){

        autoSlide = setInterval(() => {

            nextSlide();

        }, 3500);

    }

    function restartAuto(){

        clearInterval(autoSlide);

        startAuto();

    }

    startAuto();

    // TOUCH
    let startX = 0;

    track.addEventListener("touchstart", e => {

        startX = e.touches[0].clientX;

    });

    track.addEventListener("touchend", e => {

        let endX =
            e.changedTouches[0].clientX;

        if(startX - endX > 50){

            nextSlide();

        }

        if(endX - startX > 50){

            prevSlide();

        }

    });

    // RESIZE
    window.addEventListener("resize", () => {

        updateSlider();

    });

});

</script>

<!-- =========================================
     MESSAGE SECTION
========================================= -->
<section class="message-section">

    <div class="message-container">

        <!-- IMAGE -->
        <div class="message-image">

            <img
                src="{{ asset('assets/img/12.png') }}"
                alt="Director">

        </div>

        <!-- CONTENT -->
        <div class="message-content">

            <span class="message-mini-title">
                MESSAGE FROM DIRECTOR
            </span>

            <h2>
                Harapan dan Terimakasih
            </h2>

            <p>
                Assalamu'alaikum Warahmatullah Wabarakatuh
            </p>

            <p>
                Kepada seluruh pemangku kepentingan yang kami hormati dan banggakan,
            </p>

            <p>
                Saya menyampaikan terima kasih kepada seluruh karyawan, mitra kerja, dan stakeholder atas dukungan, dedikasi, serta kepercayaan yang telah diberikan selama ini. 
                Kebersamaan dan kerja keras yang terjalin menjadi pondasi penting dalam kemajuan perusahaan.
            </p>

            <p>
                Ke depan, kami berkomitmen untuk terus meningkatkan kualitas pelayanan, keselamatan operasional, dan profesionalisme demi menghadirkan layanan transportasi yang aman, terpercaya, dan berkelanjutan.
            </p>

            <p>
                Mari kita terus melangkah bersama dengan semangat, integritas, dan optimisme untuk membangun masa depan yang lebih baik.
            </p>

            <p>
                Terima kasih. <BR>Wassalaamu'alaikum Warahmatullaahi Wabarakaatuh.</BR>
            </p>

            <!-- SIGNATURE -->
            <div class="message-signature">

                <h3>
                    Agus Supriyatno
                </h3>

                <span>
                    Direktur
                    PT. Pasca Dana Sundari
                </span>

            </div>

        </div>

    </div>

</section>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const messageSection = document.querySelector('.message-section');

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                entry.target.classList.add('is-visible');

                observer.unobserve(entry.target);

            }

        });

    }, {
        threshold: 0.2
    });

    observer.observe(messageSection);

});
</script>



<script src="{{ asset('assets/js/index.js') }}"></script>

@endsection