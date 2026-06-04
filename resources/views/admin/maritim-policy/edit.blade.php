@extends('admin.layouts.app')

@section('page-title', 'Edit Peraturan')
@section('page-description', 'Perbarui produk hukum dari Direktorat Jenderal Perhubungan Laut')

@section('content')

<div class="berita-header">
    <div>
        <span>CMS PERATURAN</span>
        <h2>Edit Peraturan</h2>
    </div>

    <a href="{{ route('admin.maritim-policy.index') }}" class="btn-secondary">
        <i class="fa-solid fa-arrow-left"></i>
        Kembali
    </a>
</div>

<form action="{{ route('admin.maritim-policy.update', $policy->id) }}"
      method="POST"
      class="form-card">

    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Judul Dokumen</label>
        <input type="text"
               name="title"
               value="{{ old('title', $policy->title) }}"
               placeholder="Masukkan judul peraturan..."
               required>
    </div>

    <div class="form-group">
        <label>Kategori</label>
        <select name="category" required>
            <option value="Peraturan Menteri" {{ old('category', $policy->category) == 'Peraturan Menteri' ? 'selected' : '' }}>Peraturan Menteri</option>
            <option value="Peraturan Maritim" {{ old('category', $policy->category) == 'Peraturan Maritim' ? 'selected' : '' }}>Peraturan Maritim</option>
            <option value="Naskah Dinas" {{ old('category', $policy->category) == 'Naskah Dinas' ? 'selected' : '' }}>Naskah Dinas</option>
        </select>
    </div>

    <div class="form-group">
        <label>Nomor Dokumen</label>
        <input type="text"
               name="document_number"
               value="{{ old('document_number', $policy->document_number) }}"
               placeholder="Contoh: PM 15 Tahun 2023">
    </div>

    <div class="form-group">
        <label>Tahun Dokumen</label>
        <input type="number"
               name="document_year"
               value="{{ old('document_year', $policy->document_year) }}"
               placeholder="Contoh: 2023">
    </div>

    <div class="form-group">
        <label>Link Sumber Dokumen</label>
        <input type="url"
               name="source_url"
               value="{{ old('source_url', $policy->source_url) }}"
               placeholder="https://hubla.dephub.go.id/...">
    </div>

    <div class="form-group">
        <label>Ringkasan</label>
        <textarea name="summary"
                  rows="6"
                  placeholder="Tulis ringkasan singkat dokumen...">{{ old('summary', $policy->summary) }}</textarea>
    </div>

    <div class="form-group">
        <label>Status</label>
        <select name="status" required>
            <option value="published" {{ old('status', $policy->status) == 'published' ? 'selected' : '' }}>Published</option>
            <option value="draft" {{ old('status', $policy->status) == 'draft' ? 'selected' : '' }}>Draft</option>
        </select>
    </div>

    <div class="form-actions">
        <a href="{{ route('admin.maritim-policy.index') }}" class="btn-secondary">
            Batal
        </a>

        <button type="submit" class="btn-primary">
            <i class="fa-solid fa-floppy-disk"></i>
            Update Peraturan
        </button>
    </div>

</form>

@endsection