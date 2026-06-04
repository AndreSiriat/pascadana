(() => {
    document.addEventListener("DOMContentLoaded", () => {

        /* =====================================
            ELEMENTS
        ===================================== */
        const track = document.getElementById('cardsTrack');
        const mainImage = document.getElementById('mainImage');
        const nextBtn = document.getElementById('nilaiNextBtn'); // ID disesuaikan
        const prevBtn = document.getElementById('nilaiPrevBtn'); // ID disesuaikan

        if (!track || !nextBtn || !prevBtn) return;

        let isAnimating = false;

        // Ditambahkan parameter nextImage untuk handle delay pergantian gambar utama khusus tombol next
        function setActiveCard(nextImage = null) {
            const cards = track.querySelectorAll('.nilai-card');

            cards.forEach(card => {
                card.classList.remove('active');
                card.classList.remove('second-active');
            });

            // CARD PERTAMA
            if (cards[0]) {
                cards[0].classList.add('active');
                
                if (nextImage) {
                    // Jika diclick dari tombol NEXT, tunggu transisi bergeser sedikit baru ganti fotonya biar soft
                    setTimeout(() => {
                        mainImage.src = nextImage;
                    }, 150);
                } else {
                    // Untuk inisialisasi awal dan tombol PREV / KLIK KARTU langsung ganti
                    mainImage.src = cards[0].dataset.image;
                }
            }

            // CARD KEDUA
            if (cards[1]) {
                cards[1].classList.add('second-active');
            }
        }

        function getMoveDistance() {
            const firstCard = track.querySelector('.nilai-card');
            const gap = window.innerWidth <= 991 ? 18 : 32;
            return firstCard.offsetWidth + gap;
        }

        /* =====================================
            NEXT BUTTON
        ===================================== */
        nextBtn.addEventListener('click', () => {
            if (isAnimating) return;
            isAnimating = true;

            const moveDistance = getMoveDistance();

            // Ambil data image dari kartu kedua (yang akan maju menjadi kartu pertama) sebelum dipindah
            const cards = track.querySelectorAll('.nilai-card');
            const nextImageSrc = cards[1] ? cards[1].dataset.image : null;

            // Matikan transisi untuk pemindahan instan
            track.style.transition = 'none';

            // Card aktif langsung dipindah dari depan ke belakang
            track.appendChild(track.firstElementChild);

            // Didorong ke kanan sejauh jarak kartu agar bersiap meluncur kembali ke kiri
            track.style.transform = `translateX(${moveDistance}px)`;

            // Set active card dengan membawa data foto kartu berikutnya
            setActiveCard(nextImageSrc);

            // Beri jeda micro-task agar browser sempat membaca posisi translateX awal sebelum dianimasikan
            setTimeout(() => {
                track.style.transition = 'transform .45s cubic-bezier(0.25, 1, 0.5, 1)'; // Menggunakan bezier agar lebih soft
                track.style.transform = 'translateX(0)';
            }, 25);

            setTimeout(() => {
                isAnimating = false;
            }, 470);
        });

        /* =====================================
            PREV BUTTON
        ===================================== */
        prevBtn.addEventListener('click', () => {
            if (isAnimating) return;
            isAnimating = true;

            const moveDistance = getMoveDistance();

            track.style.transition = 'none';
            track.prepend(track.lastElementChild);
            track.style.transform = `translateX(-${moveDistance}px)`;

            setActiveCard();

            setTimeout(() => {
                track.style.transition = 'transform .45s cubic-bezier(0.25, 1, 0.5, 1)';
                track.style.transform = 'translateX(0)';
            }, 25);

            setTimeout(() => {
                isAnimating = false;
            }, 470);
        });

        /* =====================================
            CLICK CARD DIRECTLY
        ===================================== */
        track.addEventListener('click', (e) => {
            const clickedCard = e.target.closest('.nilai-card');
            if (!clickedCard || isAnimating || clickedCard.classList.contains('active')) return;

            // Jika kartu yang di-klik adalah kartu kedua (second-active), kita buat dia bergeser mulus
            if (clickedCard.classList.contains('second-active')) {
                nextBtn.click(); // Alihkan ke fungsi nextBtn yang sudah mulus
                return;
            }

            // Untuk kartu di luar urutan ke-2, eksekusi instan bawaan kode Anda
            while (track.firstElementChild !== clickedCard) {
                track.appendChild(track.firstElementChild);
            }

            setActiveCard();
        });

        // Efek transisi halus (fade) pada gambar utama saat berganti sumber (src)
        if (mainImage) {
            mainImage.style.transition = 'opacity 0.3s ease';
        }

        // Jalankan saat pertama kali halaman dimuat
        setActiveCard();

    });
})();