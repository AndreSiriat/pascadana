@extends('admin.layouts.app')

@section('page-title', 'Status')
@section('page-description', 'Status')

@section('content')
<div class="admin-page-header">

    <h1>Tambah Dokumen</h1>

</div>

<div class="admin-card">

<form
    action="{{ route('admin.company-documents.store') }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf

    <div class="form-group">

        <label>Judul</label>

        <input
            type="text"
            name="title"
            value="{{ old('title') }}"
            required>

    </div>

    <div class="form-group">

        <label>Foto Dokumen</label>

        <input
            type="file"
            name="image"
            required>

    </div>

    <div class="form-group">

        <label>Status</label>

        <select name="status">

            <option value="active">
                Active
            </option>

            <option value="inactive">
                Inactive
            </option>

        </select>

    </div>

    <div class="form-group">

        <label>Urutan</label>

        <input
            type="number"
            name="urutan"
            value="0">

    </div>

    <button
        type="submit"
        class="btn btn-primary">

        Simpan

    </button>

</form>

</div>

@endsection