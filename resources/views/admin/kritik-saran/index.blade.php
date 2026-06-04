@extends('admin.layouts.app')

@section('page-title', 'Kritik & Saran')
@section('page-description', 'Kelola masukan, kritik, dan saran dari pengguna layanan')

@section('content')

<div class="stats-grid">

    <div class="stats-card">
        <div>
            <span>Total Masukan</span>
            <h2>{{ $kritikSarans->total() }}</h2>
        </div>
        <i class="fa-solid fa-comments"></i>
    </div>

    <div class="stats-card">
        <div>
            <span>Baru</span>
            <h2>{{ \App\Models\KritikSaran::where('status', 'baru')->count() }}</h2>
        </div>
        <i class="fa-solid fa-inbox"></i>
    </div>

    <div class="stats-card">
        <div>
            <span>Selesai</span>
            <h2>{{ \App\Models\KritikSaran::where('status', 'selesai')->count() }}</h2>
        </div>
        <i class="fa-solid fa-circle-check"></i>
    </div>

</div>

<div class="berita-header">

    <div>
        <span>CMS FEEDBACK</span>
        <h2>Data Kritik & Saran</h2>
    </div>

</div>

<div class="table-card">

    <div class="table-wrapper">

        <table class="berita-table">

            <thead>
                <tr>
                    <th>Pengirim</th>
                    <th>Subjek</th>
                    <th>Kategori</th>
                    <th>Rating</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Pesan</th>
                </tr>
            </thead>

            <tbody>

                @forelse($kritikSarans as $item)

                <tr>

                    <td>
                        <div class="author-box">
                            <div class="author-avatar">
                                {{ strtoupper(substr($item->nama ?? 'U', 0, 1)) }}
                            </div>

                            <div>
                                <h5>{{ $item->nama }}</h5>
                                <span>{{ $item->email }}</span>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="judul-wrap">
                            <h4>{{ $item->subjek }}</h4>
                        </div>
                    </td>

                    <td>
                        <span class="category-badge">
                            {{ $item->kategori }}
                        </span>
                    </td>

                    <td>
                        <span class="rating-stars">
                            @for($i = 1; $i <= 5; $i++)
                                <i class="fa-solid fa-star {{ $i <= $item->rating ? 'active' : '' }}"></i>
                            @endfor
                        </span>
                    </td>

                    <td>
                        <span class="status {{ $item->status }}">
                            {{ ucfirst($item->status) }}
                        </span>
                    </td>

                    <td>
                        <div class="date-wrap">
                            <h5>{{ $item->created_at->format('d M Y') }}</h5>
                            <span>{{ $item->created_at->format('H:i') }} WIB</span>
                        </div>
                    </td>

                    <td>
                        <p class="feedback-message">
                            {{ Str::limit($item->pesan, 80) }}
                        </p>
                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="7">
                        <div class="empty-data">
                            <i class="fa-regular fa-folder-open"></i>
                            <h3>Belum Ada Kritik & Saran</h3>
                            <p>Data masukan dari pengguna akan tampil di sini.</p>
                        </div>
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

<div class="admin-pagination">
    {{ $kritikSarans->links() }}
</div>

@endsection