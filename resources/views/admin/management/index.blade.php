@extends('admin.layouts.app')

@section('page-title', 'Manajemen Perusahaan')
@section('page-description', 'Kelola data dewan, direksi, manajemen, dan nahkoda PDS Ferry')

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
            <span>Dewan Komisaris</span>
            <h2>{{ \App\Models\Management::where('group', 'dewan')->count() }}</h2>
        </div>
        <i class="fa-solid fa-building-columns"></i>
    </div>

    <div class="stats-card">
        <div>
            <span>Direksi</span>
            <h2>{{ \App\Models\Management::where('group', 'direksi')->count() }}</h2>
        </div>
        <i class="fa-solid fa-user-tie"></i>
    </div>

    <div class="stats-card">
        <div>
            <span>Nahkoda</span>
            <h2>{{ \App\Models\Management::where('group', 'nahkoda')->count() }}</h2>
        </div>
        <i class="fa-solid fa-ship"></i>
    </div>

</div>

<div class="berita-header">

    <div>
        <span>CMS MANAJEMEN</span>
        <h2>Data Manajemen</h2>
    </div>

    <a href="{{ route('admin.management.create') }}" class="add-btn">
        <i class="fa-solid fa-plus"></i>
        Tambah Data
    </a>

</div>

<div class="table-card">

    <div class="table-wrapper">

        <table class="berita-table">

            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Group</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @forelse($management as $item)

                    <tr>
                        <td>
                            @if($item->foto)
                                <img
                                    src="{{ asset('assets/img/management/' . $item->foto) }}"
                                    class="thumb"
                                    alt="{{ $item->nama }}">
                            @else
                                <img
                                    src="{{ asset('assets/img/no-image.png') }}"
                                    class="thumb"
                                    alt="No Image">
                            @endif
                        </td>

                        <td>
                            <div class="judul-wrap">
                                <h4>{{ $item->nama }}</h4>
                                <span>{{ $item->jabatan }}</span>
                            </div>
                        </td>

                        <td>{{ $item->jabatan }}</td>

                        <td>
                            <span class="category-badge">
                                @if($item->group === 'dewan')
                                    Dewan & Direksi
                                @elseif($item->group === 'nahkoda')
                                    Nahkoda
                                @else
                                    Manajemen
                                @endif
                            </span>
                        </td>

                        <td>
                            <span class="status {{ $item->status === 'active' ? 'publish' : 'draft' }}">
                                {{ $item->status === 'active' ? 'Active' : 'Inactive' }}
                            </span>
                        </td>

                        <td>
                            <div class="action-btns">

                                <a href="{{ route('admin.management.edit', $item->id) }}"
                                   class="edit-btn">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form action="{{ route('admin.management.destroy', $item->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Yakin ingin menghapus data ini?')">

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
                        <td colspan="6">
                            <div class="empty-data">
                                <i class="fa-regular fa-folder-open"></i>
                                <h3>Data Manajemen Kosong</h3>
                                <p>Belum ada data manajemen yang ditambahkan.</p>
                            </div>
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection