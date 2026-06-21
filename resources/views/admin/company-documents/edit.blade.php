@extends('admin.layouts.app')

@section('page-title', 'Status')
@section('page-description', 'Status')

@section('content')

<div class="admin-page-header">

    <h1>Edit Dokumen</h1>

</div>

<div class="admin-card">

<form
    action="{{ route('admin.company-documents.update',$companyDocument->id) }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="form-group">

        <label>Judul</label>

        <input
            type="text"
            name="title"
            value="{{ old('title',$companyDocument->title) }}"
            required>

    </div>

    <div class="form-group">

        <label>Foto Saat Ini</label>

        <br>

        <img
            src="{{ asset('assets/img/company-documents/' . $companyDocument->image) }}"
            width="220">

    </div>

    <div class="form-group">

        <label>Ganti Foto</label>

        <input
            type="file"
            name="image">

    </div>

    <div class="form-group">

        <label>Status</label>

        <select name="status">

            <option
                value="active"
                {{ $companyDocument->status == 'active' ? 'selected' : '' }}>
                Active
            </option>

            <option
                value="inactive"
                {{ $companyDocument->status == 'inactive' ? 'selected' : '' }}>
                Inactive
            </option>

        </select>

    </div>

    <div class="form-group">

        <label>Urutan</label>

        <input
            type="number"
            name="urutan"
            value="{{ $companyDocument->urutan }}">

    </div>

    <button
        type="submit"
        class="btn btn-primary">

        Update

    </button>

</form>

</div>

@endsection