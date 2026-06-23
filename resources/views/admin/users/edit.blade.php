@extends('admin.layouts.app')

@section('page-title', 'Edit User Admin')
@section('page-description', 'Perbarui data akun admin CMS')

@section('content')

<div class="berita-header">
    <div>
        <span>CMS USER</span>
        <h2>Edit User Admin</h2>
    </div>

    <a href="{{ route('admin.users.index') }}" class="btn-secondary">
        Kembali
    </a>
</div>

<form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="cms-filter-card" style="display:block;">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
        @error('name') <small class="form-error">{{ $message }}</small> @enderror
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
        @error('email') <small class="form-error">{{ $message }}</small> @enderror
    </div>

    <div class="form-group">
        <label>Password Baru</label>
        <input type="password" name="password">
        <small>Kosongkan jika tidak ingin mengganti password.</small>
        @error('password') <small class="form-error">{{ $message }}</small> @enderror
    </div>

    <div class="form-group">
        <label>Konfirmasi Password Baru</label>
        <input type="password" name="password_confirmation">
    </div>

    <button type="submit" class="btn-primary">
        Simpan Perubahan
    </button>
</form>

@endsection