@extends('admin.layouts.app')

@section('page-title', 'Manajemen User Admin')
@section('page-description', 'Kelola akun admin CMS PDS Ferry')

@section('content')

@php
    $isMainAdmin = auth()->user()->email === 'info@pascadanasundari.com';
@endphp

@if(session('success'))
    <div class="admin-alert success">
        <i class="fa-solid fa-circle-check"></i>
        <span>{{ session('success') }}</span>
    </div>
@endif

@if($errors->any())
    <div class="admin-alert danger">
        <i class="fa-solid fa-triangle-exclamation"></i>
        <span>{{ $errors->first() }}</span>
    </div>
@endif

<div class="stats-grid">
    <div class="stats-card">
        <div>
            <span>Total User</span>
            <h2>{{ $users->total() }}</h2>
        </div>
        <i class="fa-solid fa-users"></i>
    </div>
</div>

<div class="berita-header">
    <div>
        <span>CMS USER</span>
        <h2>Data User Admin</h2>
    </div>

    @if($isMainAdmin)
        <a href="{{ route('admin.users.create') }}" class="add-btn">
            <i class="fa-solid fa-plus"></i>
            Tambah User
        </a>
    @endif
</div>

<div class="table-card">
    <div class="table-wrapper">
        <table class="berita-table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Dibuat</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>
                            <div class="author-box">
                                <div class="author-avatar">
                                    {{ strtoupper(substr($user->name ?? 'U', 0, 1)) }}
                                </div>

                                <div>
                                    <h5>{{ $user->name }}</h5>
                                    <span>
                                        {{ auth()->id() === $user->id ? 'Akun sedang digunakan' : 'Admin CMS' }}
                                    </span>
                                </div>
                            </div>
                        </td>

                        <td>{{ $user->email }}</td>

                        <td>
                            <div class="date-wrap">
                                <h5>{{ $user->created_at->format('d M Y') }}</h5>
                                <span>{{ $user->created_at->format('H:i') }} WIB</span>
                            </div>
                        </td>

                        <td>
                            <div class="action-btns">

                                @if($isMainAdmin)
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="edit-btn">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>

                                    @if(auth()->id() !== $user->id)
                                        <form action="{{ route('admin.users.destroy', $user->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="delete-btn">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    @endif
                                @else
                                    <span class="status draft">View Only</span>
                                @endif

                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            <div class="empty-data">
                                <i class="fa-regular fa-folder-open"></i>
                                <h3>Data User Tidak Ditemukan</h3>
                                <p>Belum ada user admin yang tersedia.</p>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div class="admin-pagination">
    {{ $users->links() }}
</div>

@endsection