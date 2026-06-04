@extends('admin.layouts.app')

@section('page-title', 'Manajemen Berita')
@section('page-description', 'Kelola berita dan informasi website PDS Ferry')

@section('content')

@if(session('success'))
    <div class="admin-alert success">
        <i class="fa-solid fa-circle-check"></i>
        <span>{{ session('success') }}</span>
    </div>
@endif

<div class="stats-grid">

    <div class="stats-card">
        <div>
            <span>Total Berita</span>
            <h2>{{ $berita->total() }}</h2>
        </div>
        <i class="fa-regular fa-newspaper"></i>
    </div>

    <div class="stats-card">
        <div>
            <span>Published</span>
            <h2>{{ \App\Models\Berita::where('status', 'publish')->count() }}</h2>
        </div>
        <i class="fa-solid fa-check"></i>
    </div>

    <div class="stats-card">
        <div>
            <span>Draft</span>
            <h2>{{ \App\Models\Berita::where('status', 'draft')->count() }}</h2>
        </div>
        <i class="fa-solid fa-file-lines"></i>
    </div>

</div>

<div class="berita-header">

    <div>
        <span>CMS BERITA</span>
        <h2>Data Berita</h2>
    </div>

    <a href="{{ route('admin.berita.create') }}" class="add-btn">
        <i class="fa-solid fa-plus"></i>
        Tambah Berita
    </a>

</div>

<form method="GET" action="{{ route('admin.berita.index') }}" class="cms-filter-card">

    <div class="cms-search">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Cari judul, kategori, atau isi berita...">
    </div>

    <select name="kategori">
        <option value="">Semua Kategori</option>
        <option value="Operasional" {{ request('kategori') == 'Operasional' ? 'selected' : '' }}>Operasional</option>
        <option value="Siaran Pers" {{ request('kategori') == 'Siaran Pers' ? 'selected' : '' }}>Siaran Pers</option>
        <option value="Keselamatan" {{ request('kategori') == 'Keselamatan' ? 'selected' : '' }}>Keselamatan</option>
        <option value="Perusahaan" {{ request('kategori') == 'Perusahaan' ? 'selected' : '' }}>Perusahaan</option>
        <option value="Armada" {{ request('kategori') == 'Armada' ? 'selected' : '' }}>Armada</option>
    </select>

    <select name="status">
        <option value="">Semua Status</option>
        <option value="publish" {{ request('status') == 'publish' ? 'selected' : '' }}>Publish</option>
        <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
    </select>

    <button type="submit" class="btn-primary">
        Filter
    </button>

    <a href="{{ route('admin.berita.index') }}" class="btn-secondary">
        Reset
    </a>

</form>

<div class="table-card">

    <div class="table-wrapper">

        <table class="berita-table">

            <thead>
                <tr>
                    <th>Thumbnail</th>
                    <th>Judul Berita</th>
                    <th>Kategori</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th>Publish Date</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @forelse($berita as $item)

                <tr>

                    <td>
                        <img
                            src="{{ $item->thumbnail ? asset('assets/img/news/' . $item->thumbnail) : asset('assets/img/no-image.png') }}"
                            class="thumb"
                            alt="{{ $item->judul }}">
                    </td>

                    <td>
                        <div class="judul-wrap">
                            <h4>{{ $item->judul }}</h4>
                            <span>/berita/{{ $item->slug }}</span>
                        </div>
                    </td>

                    <td>
                        <span class="category-badge">
                            {{ $item->kategori ?? 'Operasional' }}
                        </span>
                    </td>

                    <td>
                        <div class="author-box">
                            <div class="author-avatar">
                                {{ strtoupper(substr($item->author ?? 'A', 0, 1)) }}
                            </div>

                            <div>
                                <h5>{{ $item->author ?? 'Admin' }}</h5>
                                <span>Content Writer</span>
                            </div>
                        </div>
                    </td>

                    <td>
                        <span class="status {{ $item->status === 'publish' ? 'publish' : 'draft' }}">
                            {{ ucfirst($item->status ?? 'draft') }}
                        </span>
                    </td>

                    <td>
                        <div class="date-wrap">
                            <h5>{{ $item->created_at->format('d M Y') }}</h5>
                            <span>{{ $item->created_at->format('H:i') }} WIB</span>
                        </div>
                    </td>

                    <td>
                        <div class="action-btns">

                            <a href="{{ route('berita.detail', $item->slug) }}"
                               target="_blank"
                               class="view-btn">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="{{ route('admin.berita.edit', $item->id) }}"
                               class="edit-btn">
                                <i class="fa-solid fa-pen"></i>
                            </a>

                            <form action="{{ route('admin.berita.destroy', $item->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus berita ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="delete-btn">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                            </form>

                        </div>
                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="7">
                        <div class="empty-data">
                            <i class="fa-regular fa-folder-open"></i>
                            <h3>Data Tidak Ditemukan</h3>
                            <p>Coba ubah kata kunci pencarian atau filter berita.</p>
                        </div>
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

<div class="admin-pagination">
    {{ $berita->links() }}
</div>

@endsection