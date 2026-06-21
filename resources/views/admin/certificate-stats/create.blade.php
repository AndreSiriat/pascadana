@extends('admin.layouts.app')

@section('page-title', 'Status')
@section('page-description', 'Status')

@section('content')

<div class="admin-page-header">
    <h1>Tambah Certificate Stat</h1>

    <a href="{{ route('admin.certificate-stats.index') }}" class="btn btn-secondary">
        Kembali
    </a>
</div>

<div class="admin-card">
    <form action="{{ route('admin.certificate-stats.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Value</label>
            <input type="text" name="value" value="{{ old('value') }}" required>
            @error('value') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label>Label</label>
            <input type="text" name="label" value="{{ old('label') }}" required>
            @error('label') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label>Urutan</label>
            <input type="number" name="urutan" value="{{ old('urutan', 0) }}">
            @error('urutan') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>
    </form>
</div>

@endsection