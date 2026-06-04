@extends('admin.layouts.app')

@section('page-title', 'Tambah Berita')
@section('page-description', 'Tambahkan berita baru untuk website PDS Ferry')

@section('content')

<div class="berita-header">

    <div>
        <span>CMS BERITA</span>
        <h2>Tambah Berita</h2>
    </div>

    <a href="{{ route('admin.berita.index') }}" class="btn-secondary">
        <i class="fa-solid fa-arrow-left"></i>
        Kembali
    </a>

</div>

<form
    action="{{ route('admin.berita.store') }}"
    method="POST"
    enctype="multipart/form-data"
    class="form-card">

    @csrf

    <div class="form-group">
        <label>Judul Berita</label>

        <input
            type="text"
            name="judul"
            value="{{ old('judul') }}"
            placeholder="Masukkan judul berita..."
            required>

        @error('judul')
            <small class="form-error">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label>Kategori Berita</label>

        <select name="kategori" required>
            <option value="">-- Pilih Kategori --</option>
            <option value="Operasional" {{ old('kategori') == 'Operasional' ? 'selected' : '' }}>Operasional</option>
            <option value="Siaran Pers" {{ old('kategori') == 'Siaran Pers' ? 'selected' : '' }}>Siaran Pers</option>
            <option value="Keselamatan" {{ old('kategori') == 'Keselamatan' ? 'selected' : '' }}>Keselamatan</option>
            <option value="Perusahaan" {{ old('kategori') == 'Perusahaan' ? 'selected' : '' }}>Perusahaan</option>
            <option value="Armada" {{ old('kategori') == 'Armada' ? 'selected' : '' }}>Armada</option>
        </select>

        @error('kategori')
            <small class="form-error">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label>Status Berita</label>

        <select name="status" required>
            <option value="publish" {{ old('status') == 'publish' ? 'selected' : '' }}>Publish</option>
            <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
        </select>

        @error('status')
            <small class="form-error">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label>Thumbnail</label>

        <div class="upload-box">

            <input
                type="file"
                name="thumbnail"
                id="thumbnailInput"
                accept="image/*"
                required>

            <div class="upload-content">
                <i class="fa-solid fa-cloud-arrow-up"></i>
                <p>Upload Thumbnail</p>
                <span>JPG, PNG maksimal 5MB</span>
            </div>

        </div>

        <img

        @error('thumbnail')
            <small class="form-error">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label>Isi Berita</label>

        <textarea
    name="isi"
    id="editor"
    rows="10"
    placeholder="Tulis isi berita...">{{ old('isi') }}</textarea>

        @error('isi')
            <small class="form-error">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-actions">

        <a href="{{ route('admin.berita.index') }}" class="btn-secondary">
            Batal
        </a>

        <button type="submit" class="btn-primary">
            <i class="fa-solid fa-paper-plane"></i>
            Simpan Berita
        </button>

    </div>

</form>

<script>
    const input = document.getElementById('thumbnailInput');
    const preview = document.getElementById('previewImage');

    input.addEventListener('change', function(e) {
        const file = e.target.files[0];

        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        }
    });
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editorElement = document.querySelector('#editor');

        if (editorElement) {
            ClassicEditor
                .create(editorElement)
                .catch(error => console.error(error));
        }
    });
</script>

@endsection