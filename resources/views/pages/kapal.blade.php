@extends('layouts.app')

@section('title', 'Kapal')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/kapal.css') }}">

<div class="pds-ship-page">


    <div class="pds-about-premium">
    <div class="pds-about-bg"></div>

    <div class="pds-about-inner">
        <div class="pds-about-content">
            <span class="pds-about-label">ARMADA KAPAL</span>

            <h1>Kapal Operasional Kami</h1>
            <p>
                PT Pasca Dana Sundari mengoperasikan armada kapal penyeberangan
                yang mendukung konektivitas antarwilayah dengan layanan yang aman,
                profesional, dan terpercaya.
            </p>
        </div>
    </div>
</div>

    <div id="armada-kami" class="pds-ship-section">
        <div class="pds-ship-heading">
            <span>ARMADA KAMI</span>
            <h2>Armada Penyeberangan</h2>
            <p>
                Dua kapal utama kami melayani kebutuhan transportasi penyeberangan
                dengan standar operasional yang berorientasi pada keselamatan,
                kenyamanan, dan ketepatan layanan.
            </p>
        </div>

        <div class="pds-ship-grid">

            <div class="pds-ship-card">
                <div class="pds-ship-image">
                    <img src="assets/img/13.png" alt="KMP Tunu">
                    <span>KMP TUNU</span>
                </div>

                <div class="pds-ship-body">
                    <h3>KMP Tunu</h3>
                    <p>
                        KMP Tunu merupakan salah satu armada utama yang mendukung
                        layanan penyeberangan dengan kapasitas dan performa operasional
                        yang andal.
                    </p>

                    <div class="pds-ship-info">
                        <div>
                            <strong>Trayek</strong>
                            <span>Balikpapan – Penajam</span>
                        </div>
                        <div>
                            <strong>Layanan</strong>
                            <span>Penumpang & Kendaraan</span>
                        </div>
                        <div>
                            <strong>Status</strong>
                            <span>Aktif Beroperasi</span>
                        </div>
                    </div>

                    <a href="#" class="pds-ship-btn">Lihat Detail</a>
                </div>
            </div>

            <div class="pds-ship-card">
                <div class="pds-ship-image">
                    <img src="assets/img/5.jpeg" alt="KMP Tawes">
                    <span>KMP TAWES</span>
                </div>

                <div class="pds-ship-body">
                    <h3>KMP Tawes</h3>
                    <p>
                        KMP Tawes melengkapi armada operasional perusahaan dalam
                        menunjang konektivitas penyeberangan yang efisien,
                        aman, dan berkelanjutan.
                    </p>

                    <div class="pds-ship-info">
                        <div>
                            <strong>Trayek</strong>
                            <span>Tampo – Torobulu</span>
                        </div>
                        <div>
                            <strong>Layanan</strong>
                            <span>Penumpang & Kendaraan</span>
                        </div>
                        <div>
                            <strong>Status</strong>
                            <span>Aktif Beroperasi</span>
                        </div>
                    </div>

                    <a href="#" class="pds-ship-btn">Lihat Detail</a>
                </div>
            </div>

        </div>
    </div>

    <div class="pds-ship-feature-section">
        <div class="pds-ship-feature">
            <h2>Standar Layanan Armada</h2>
            <p>
                Seluruh operasional kapal didukung oleh prosedur keselamatan,
                perawatan berkala, serta pengawasan teknis untuk memastikan
                layanan tetap optimal.
            </p>

            <div class="pds-feature-list">
                <div>Keselamatan Penumpang</div>
                <div>Perawatan Berkala</div>
                <div>Awak Kapal Profesional</div>
                <div>Operasional Terjadwal</div>
                <div>Kapasitas Kendaraan</div>
                <div>Layanan Penyeberangan Andal</div>
            </div>
        </div>
    </div>

</div>

@endsection