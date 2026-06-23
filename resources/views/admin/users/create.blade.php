@extends('admin.layouts.app')

@section('page-title', 'Tambah User Admin')
@section('page-description', 'Tambahkan akun baru untuk login CMS')

@section('content')

<div class="berita-header">
    <div>
        <span>CMS USER</span>
        <h2>Tambah User Admin</h2>
    </div>

    <a href="{{ route('admin.users.index') }}" class="btn-secondary">
        Kembali
    </a>
</div>

<form action="{{ route('admin.users.store') }}" method="POST" class="cms-filter-card" style="display:block;">
    @csrf

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        @error('name') <small class="form-error">{{ $message }}</small> @enderror
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email') <small class="form-error">{{ $message }}</small> @enderror
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" required>
        @error('password') <small class="form-error">{{ $message }}</small> @enderror
    </div>

    <div class="form-group">
        <label>Konfirmasi Password</label>
        <input type="password" name="password_confirmation" required>
    </div>

    <button type="submit" class="btn-primary">
        Simpan User
    </button>
</form>

@endsection