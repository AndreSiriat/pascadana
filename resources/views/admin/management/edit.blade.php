@extends('admin.layouts.app')

@section('content')

<style>
.form-card{background:#fff;border-radius:20px;padding:30px;box-shadow:0 10px 30px rgba(15,23,42,.06);}
.form-header{margin-bottom:25px;}
.form-header span{color:#d99a00;font-size:13px;font-weight:700;letter-spacing:1px;}
.form-header h2{margin-top:8px;color:#062b44;}
.form-grid{display:grid;grid-template-columns:1fr 1fr;gap:20px;}
.form-group{display:flex;flex-direction:column;}
.form-group label{margin-bottom:8px;font-weight:600;color:#334155;}
.form-group input,.form-group select{height:50px;border:1px solid #e2e8f0;border-radius:12px;padding:0 15px;font-size:14px;}
.preview-img{width:130px;height:130px;object-fit:cover;border-radius:18px;margin-bottom:12px;}
.form-action{margin-top:30px;display:flex;gap:12px;}
.btn-save{background:#06456b;color:#fff;border:none;padding:14px 25px;border-radius:12px;cursor:pointer;font-weight:700;}
.btn-back{background:#f1f5f9;color:#334155;padding:14px 25px;border-radius:12px;text-decoration:none;font-weight:700;}
</style>

<div class="form-card">

    <div class="form-header">
        <span>CMS MANAJEMEN</span>
        <h2>Edit Data Manajemen</h2>
    </div>

    <form action="{{ route('admin.management.update', $management->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="form-grid">

            <div class="form-group">
                <label>Nama</label>
                <input type="text"
                       name="nama"
                       value="{{ old('nama', $management->nama) }}"
                       required>
            </div>

            <div class="form-group">
                <label>Jabatan</label>
                <input type="text"
                       name="jabatan"
                       value="{{ old('jabatan', $management->jabatan) }}"
                       required>
            </div>

            <div class="form-group">
                <label>Group</label>
                <select name="group" required>
                    <option value="dewan" {{ $management->group == 'dewan' ? 'selected' : '' }}>
                        Dewan Komisaris & Direksi
                    </option>

                    <option value="manajemen" {{ $management->group == 'manajemen' ? 'selected' : '' }}>
                        Manajemen
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" required>
                    <option value="active" {{ $management->status == 'active' ? 'selected' : '' }}>
                        Active
                    </option>

                    <option value="inactive" {{ $management->status == 'inactive' ? 'selected' : '' }}>
                        Inactive
                    </option>
                </select>
            </div>


            <div class="form-group">
                <label>Foto</label>

                @if($management->foto)
                    <img src="{{ asset('assets/img/management/' . $management->foto) }}"
                         class="preview-img">
                @endif

                <input type="file"
                       name="foto"
                       accept="image/*">

                <small>Kosongkan jika tidak ingin mengganti foto.</small>
            </div>

        </div>

        <div class="form-action">

            <button type="submit" class="btn-save">
                Update Data
            </button>

            <a href="{{ route('admin.management.index') }}"
               class="btn-back">
                Kembali
            </a>

        </div>

    </form>

</div>

@endsection