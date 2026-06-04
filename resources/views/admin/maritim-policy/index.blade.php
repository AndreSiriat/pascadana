@extends('admin.layouts.app')

@section('page-title', 'Manajemen Peraturan')
@section('page-description', 'Kelola regulasi menteri dan regulasi maritim')

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
            <span>Total Peraturan</span>
            <h2>{{ $policies->total() }}</h2>
        </div>
        <i class="fa-solid fa-file-contract"></i>
    </div>

    <div class="stats-card">
        <div>
            <span>Regulasi Menteri</span>
            <h2>{{ \App\Models\MaritimPolicy::where('category', 'Regulasi Menteri')->count() }}</h2>
        </div>
        <i class="fa-solid fa-scale-balanced"></i>
    </div>

    <div class="stats-card">
    <div>
        <span>Peraturan Maritim & Naskah Dinas</span>

        <h2>
            {{
                \App\Models\MaritimPolicy::whereIn('category', [
                    'Peraturan Maritim',
                    'Naskah Dinas'
                ])->count()
            }}
        </h2>
    </div>

    <i class="fa-solid fa-anchor"></i>
</div>

</div>

<div class="berita-header">

    <div>
        <span>CMS PERATURAN</span>
        <h2>Data Peraturan</h2>
    </div>

    <a href="{{ route('admin.maritim-policy.create') }}" class="add-btn">
        <i class="fa-solid fa-plus"></i>
        Tambah Peraturan
    </a>

</div>

<form method="GET"
      action="{{ route('admin.maritim-policy.index') }}"
      class="cms-filter-card">

    <div class="cms-search">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Cari judul, nomor dokumen, kategori...">
    </div>

    <select name="category">
        <option value="">Semua Kategori</option>
        <option value="Peraturan Menteri" {{ request('category') == 'Peraturan Menteri' ? 'selected' : '' }}>Peraturan Menteri</option>
        <option value="Peraturan Maritim" {{ request('category') == 'Peraturan Maritim' ? 'selected' : '' }}>Peraturan Maritim</option>
        <option value="Naskah Dinas" {{ request('category') == 'Naskah Dinas' ? 'selected' : '' }}>Naskah Dinas</option>
    </select>

    <select name="status">
        <option value="">Semua Status</option>
        <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>
            Published
        </option>
        <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>
            Draft
        </option>
    </select>

    <button type="submit" class="btn-primary">
        Filter
    </button>

    <a href="{{ route('admin.maritim-policy.index') }}" class="btn-secondary">
        Reset
    </a>

</form>

<div class="table-card">

    <div class="table-wrapper">

        <table class="berita-table">

            <thead>
                <tr>
                    <th>Dokumen</th>
                    <th>Kategori</th>
                    <th>Nomor</th>
                    <th>Tahun</th>
                    <th>Sumber</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @forelse($policies as $policy)

                <tr>

                    <td>
                        <div class="judul-wrap">
                            <h4>{{ $policy->title }}</h4>
                            <span>/maritim-policy/{{ $policy->slug }}</span>
                        </div>
                    </td>

                    <td>
                        <span class="category-badge">
                            {{ $policy->category ?? 'Regulasi Maritim' }}
                        </span>
                    </td>

                    <td>
                        <div class="date-wrap">
                            <h5>{{ $policy->document_number ?? '-' }}</h5>
                            <span>Nomor Dokumen</span>
                        </div>
                    </td>

                    <td>
                        <div class="date-wrap">
                            <h5>{{ $policy->document_year ?? '-' }}</h5>
                            <span>Tahun</span>
                        </div>
                    </td>

                    <td>
                        <div class="date-wrap">
                            <h5>{{ $policy->source_name ?? '-' }}</h5>

                            @if($policy->source_url)
                                <span>URL tersedia</span>
                            @else
                                <span>Tidak ada URL</span>
                            @endif
                        </div>
                    </td>

                    <td>
                        <span class="status {{ $policy->status === 'published' ? 'publish' : 'draft' }}">
                            {{ ucfirst($policy->status ?? 'draft') }}
                        </span>
                    </td>

                    <td>
                        <div class="date-wrap">
                            <h5>{{ $policy->created_at->format('d M Y') }}</h5>
                            <span>{{ $policy->created_at->format('H:i') }} WIB</span>
                        </div>
                    </td>

                    <td>
                        <div class="action-btns">

                            @if($policy->source_url)
                                <a href="{{ $policy->source_url }}"
                                   target="_blank"
                                   class="view-btn">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            @else
                                <a href="{{ route('admin.maritim-policy.show', $policy->id) }}"
                                   class="view-btn">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            @endif

                            <a href="{{ route('admin.maritim-policy.edit', $policy->id) }}"
                               class="edit-btn">
                                <i class="fa-solid fa-pen"></i>
                            </a>

                            <form action="{{ route('admin.maritim-policy.destroy', $policy->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus peraturan ini?')">

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
                    <td colspan="8">
                        <div class="empty-data">
                            <i class="fa-regular fa-folder-open"></i>
                            <h3>Belum Ada Peraturan</h3>
                            <p>Tambahkan regulasi menteri atau regulasi maritim pertama.</p>
                        </div>
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

<div class="admin-pagination">
    {{ $policies->links() }}
</div>

@endsection