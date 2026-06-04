@extends('admin.layouts.app')

@section('page-title', 'Edit Berita')
@section('page-description', 'Perbarui data berita website PDS Ferry')

@section('content')

<div class="berita-header">

    <div>
        <span>CMS BERITA</span>
        <h2>Edit Berita</h2>
    </div>

    <a href="{{ route('admin.berita.index') }}" class="btn-secondary">
        <i class="fa-solid fa-arrow-left"></i>
        Kembali
    </a>

</div>

<form
    action="{{ route('admin.berita.update', $berita->id) }}"
    method="POST"
    enctype="multipart/form-data"
    class="form-card">

    @csrf
    @method('PUT')

    <!-- JUDUL -->
    <div class="form-group">

        <label>Judul Berita</label>

        <input
            type="text"
            name="judul"
            value="{{ old('judul', $berita->judul) }}"
            placeholder="Masukkan judul berita..."
            required>

    </div>

    <!-- KATEGORI -->
    <div class="form-group">

        <label>Kategori Berita</label>

        <select name="kategori" required>

            <option value="Operasional"
                {{ $berita->kategori == 'Operasional' ? 'selected' : '' }}>
                Operasional
            </option>

            <option value="Siaran Pers"
                {{ $berita->kategori == 'Siaran Pers' ? 'selected' : '' }}>
                Siaran Pers
            </option>

            <option value="Keselamatan"
                {{ $berita->kategori == 'Keselamatan' ? 'selected' : '' }}>
                Keselamatan
            </option>

            <option value="Perusahaan"
                {{ $berita->kategori == 'Perusahaan' ? 'selected' : '' }}>
                Perusahaan
            </option>

            <option value="Armada"
                {{ $berita->kategori == 'Armada' ? 'selected' : '' }}>
                Armada
            </option>

        </select>

    </div>

    <!-- STATUS -->
    <div class="form-group">

        <label>Status</label>

        <select name="status" required>

            <option value="publish"
                {{ $berita->status == 'publish' ? 'selected' : '' }}>
                Publish
            </option>

            <option value="draft"
                {{ $berita->status == 'draft' ? 'selected' : '' }}>
                Draft
            </option>

        </select>

    </div>

    <!-- THUMBNAIL -->
    <div class="form-group">

        <label>Thumbnail</label>

        <div class="upload-box">

            <input
                type="file"
                name="thumbnail"
                id="thumbnailInput"
                accept="image/*">

            <div class="upload-content">

                <i class="fa-solid fa-cloud-arrow-up"></i>

                <p>
                    Upload Thumbnail Baru
                </p>

                <span>
                    JPG, PNG maksimal 5MB
                </span>

            </div>

        </div>

        <!-- CURRENT IMAGE -->
        <img
            src="{{ asset('assets/img/news/' . $berita->thumbnail) }}"
            id="previewImage"
            class="preview-image"
            style="display:block;">

    </div>

    <!-- ISI -->
    <div class="form-group">

        <label>Isi Berita</label>

        <textarea
            name="isi"
            id="editor"
            rows="12"
            placeholder="Tulis isi berita..."
            required>{{ old('isi', $berita->isi) }}</textarea>

    </div>

    <!-- ACTION -->
    <div class="form-actions">

        <a href="{{ route('admin.berita.index') }}"
           class="btn-secondary">

            Batal

        </a>

        <button
            type="submit"
            class="btn-primary">

            <i class="fa-solid fa-floppy-disk"></i>

            Update Berita

        </button>

    </div>

</form>

<script>

    const input =
        document.getElementById('thumbnailInput');

    const preview =
        document.getElementById('previewImage');

    input.addEventListener('change', function(e){

        const file = e.target.files[0];

        if(file){

            preview.src =
                URL.createObjectURL(file);

            preview.style.display = 'block';

        }

    });

</script>

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection