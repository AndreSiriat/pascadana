@extends('admin.layouts.app')

@section('page-title', 'Tambah Peraturan')
@section('page-description', 'Tambahkan produk hukum dari Direktorat Jenderal Perhubungan Laut')

@section('content')



<div class="berita-header">
    <div>
        <span>CMS PERATURAN</span>
        <h2>Tambah Peraturan</h2>
    </div>

    <a href="{{ route('admin.maritim-policy.index') }}" class="btn-secondary">
        <i class="fa-solid fa-arrow-left"></i>
        Kembali
    </a>
</div>

<form action="{{ route('admin.maritim-policy.store') }}"
      method="POST"
      class="form-card">

    @csrf

    <div class="form-group">
        <label>Judul Dokumen</label>
        <input type="text"
               name="title"
               value="{{ old('title') }}"
               placeholder="Masukkan judul peraturan..."
               required>
    </div>

    <div class="form-group">
        <label>Kategori</label>
        <select name="category" required>
            <option value="">Pilih Kategori</option>
            <option value="Peraturan Menteri" {{ old('category') == 'Peraturan Menteri' ? 'selected' : '' }}>Peraturan Menteri</option>
            <option value="Peraturan Maritim" {{ old('category') == 'Peraturan Maritim' ? 'selected' : '' }}>Peraturan Maritim</option>
            <option value="Naskah Dinas" {{ old('category') == 'Naskah Dinas' ? 'selected' : '' }}>Naskah Dinas</option>
        </select>
    </div>

    <div class="form-group">
        <label>Nomor Dokumen</label>
        <input type="text"
               name="document_number"
               value="{{ old('document_number') }}"
               placeholder="Contoh: PM 15 Tahun 2023">
    </div>

    <div class="form-group">
        <label>Tahun Dokumen</label>
        <input type="number"
               name="document_year"
               value="{{ old('document_year') }}"
               placeholder="Contoh: 2023">
    </div>

    <div class="form-group">
        <label>Link Sumber Dokumen</label>
        <input type="url"
               name="source_url"
               value="{{ old('source_url') }}"
               placeholder="https://hubla.dephub.go.id/...">
    </div>

    <div class="form-group">
        <label>Ringkasan</label>
        <textarea name="summary"
                  rows="6"
                  placeholder="Tulis ringkasan singkat dokumen...">{{ old('summary') }}</textarea>
    </div>

    <div class="form-group">
        <label>Status</label>
        <select name="status" required>
            <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
            <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
        </select>
    </div>

    <div class="form-actions">
        <a href="{{ route('admin.maritim-policy.index') }}" class="btn-secondary">
            Batal
        </a>

        <button type="submit" class="btn-primary">
            <i class="fa-solid fa-floppy-disk"></i>
            Simpan Peraturan
        </button>
    </div>

</form>

@endsection