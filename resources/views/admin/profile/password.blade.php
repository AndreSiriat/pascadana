@extends('admin.layouts.app')

@section('content')
<div class="admin-page-header">
    <div>
        <h1>Ganti Password</h1>
        <p>Perbarui password akun admin CMS.</p>
    </div>
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('admin.password.update') }}" method="POST" class="admin-form">
    @csrf

    <div class="form-group">
        <label>Password Lama</label>
        <input type="password" name="current_password" required>

        @error('current_password')
            <small class="form-error">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label>Password Baru</label>
        <input type="password" name="password" required>

        @error('password')
            <small class="form-error">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label>Konfirmasi Password Baru</label>
        <input type="password" name="password_confirmation" required>
    </div>

    <button type="submit" class="btn-primary">
        Simpan Password
    </button>
</form>
@endsection