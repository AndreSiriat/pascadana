@extends('layouts.app')

@section('title', 'Kritik & Saran')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/kritik-saran.css') }}">

<section class="feedback-page">

    <div class="feedback-wrapper">

        <div class="feedback-container">

            <div class="feedback-info">

                <div class="brand-tag">
                    PDS FERRY
                </div>

                <h1>
                    Suara Anda, <br>
                    <span>Masa Depan Kami.</span>
                </h1>

                <p class="feedback-lead">
                    Kami berkomitmen untuk terus meningkatkan layanan transportasi laut yang aman dan nyaman.
                    Berikan kritik membangun atau saran terbaik Anda untuk PDS Ferry yang lebih baik.
                </p>

                <div class="info-cards">

                    <a href="https://wa.me/628123456789"
                       target="_blank"
                       class="info-card-item">

                        <div class="icon-box icon-wa">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>

                        <div>
                            <h5>Layanan Pengaduan WA</h5>
                            <p>Direct chat ke operasional</p>
                        </div>

                    </a>

                    <a href="https://instagram.com/pds_ferry"
                       target="_blank"
                       class="info-card-item">

                        <div class="icon-box icon-ig">
                            <i class="fa-brands fa-instagram"></i>
                        </div>

                        <div>
                            <h5>Instagram Resmi</h5>
                            <p>DM via media sosial</p>
                        </div>

                    </a>

                </div>

            </div>

            <div class="feedback-form-box">

                @if(session('success'))
                    <div class="feedback-alert">
                        <i class="fa-solid fa-circle-check"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('kritik-saran.store') }}" method="POST">

                    @csrf

                    <div class="form-group center-group">

                        <label>
                            Berikan Penilaian Anda Untuk PDS Ferry
                        </label>

                        <div class="star-rating">

                            <input type="radio" id="star5" name="rating" value="5">
                            <label for="star5" title="Sempurna"></label>

                            <input type="radio" id="star4" name="rating" value="4">
                            <label for="star4" title="Sangat Baik"></label>

                            <input type="radio" id="star3" name="rating" value="3">
                            <label for="star3" title="Cukup"></label>

                            <input type="radio" id="star2" name="rating" value="2">
                            <label for="star2" title="Buruk"></label>

                            <input type="radio" id="star1" name="rating" value="1">
                            <label for="star1" title="Sangat Buruk"></label>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>

                            <input
                                type="text"
                                id="nama"
                                name="nama"
                                value="{{ old('nama') }}"
                                placeholder="Contoh: Andi Wijaya"
                                required>

                            @error('nama')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="andi@email.com"
                                required>

                            @error('email')
                                <small>{{ $message }}</small>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="subjek">Subjek</label>

                        <input
                            type="text"
                            id="subjek"
                            name="subjek"
                            value="{{ old('subjek') }}"
                            placeholder="Contoh: Saran peningkatan layanan"
                            required>

                        @error('subjek')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori Masukan</label>

                        <select id="kategori" name="kategori" required>
                            <option value="" disabled selected hidden>Pilih Kategori...</option>
                            <option value="Fasilitas" {{ old('kategori') == 'Fasilitas' ? 'selected' : '' }}>Fasilitas Kapal</option>
                            <option value="Pelayanan" {{ old('kategori') == 'Pelayanan' ? 'selected' : '' }}>Pelayanan Crew</option>
                            <option value="Kebersihan" {{ old('kategori') == 'Kebersihan' ? 'selected' : '' }}>Kebersihan</option>
                            <option value="Keselamatan" {{ old('kategori') == 'Keselamatan' ? 'selected' : '' }}>Keamanan & Keselamatan</option>
                            <option value="Operasional" {{ old('kategori') == 'Operasional' ? 'selected' : '' }}>Operasional</option>
                            <option value="Umum" {{ old('kategori') == 'Umum' ? 'selected' : '' }}>Lainnya</option>
                        </select>

                        @error('kategori')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="pesan">Pesan Kritik / Saran</label>

                        <textarea
                            id="pesan"
                            name="pesan"
                            rows="5"
                            placeholder="Tuliskan masukan Anda secara detail di sini..."
                            required>{{ old('pesan') }}</textarea>

                        @error('pesan')
                            <small>{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn-submit">
                        Kirim Masukan Berkualitas
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection