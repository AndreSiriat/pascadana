@extends('admin.layouts.app')

@section('content')

<style>
.management-page{padding:32px;}
.management-header{background:#fff;border-radius:18px;padding:26px;display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;box-shadow:0 10px 30px rgba(15,23,42,.06);}
.management-header span{color:#d99a00;font-size:13px;font-weight:800;letter-spacing:1px;}
.management-header h2{margin:6px 0 0;font-size:28px;color:#062b44;}
.management-add{background:#06456b;color:#fff;padding:14px 22px;border-radius:14px;text-decoration:none;font-weight:800;display:inline-flex;align-items:center;gap:10px;}
.management-card{background:#fff;border-radius:18px;padding:20px;box-shadow:0 10px 30px rgba(15,23,42,.06);}
.management-table{width:100%;border-collapse:collapse;}
.management-table th{text-align:left;padding:16px;font-size:13px;color:#64748b;text-transform:uppercase;border-bottom:1px solid #e5e7eb;}
.management-table td{padding:16px;border-bottom:1px solid #eef2f7;vertical-align:middle;}
.management-img{width:74px;height:74px;object-fit:cover;border-radius:16px;}
.management-badge{padding:8px 14px;border-radius:999px;font-size:12px;font-weight:800;background:#eef7ff;color:#06456b;}
.management-status.active{background:#dcfce7;color:#15803d;}
.management-status.inactive{background:#fee2e2;color:#b91c1c;}
.management-actions{display:flex;gap:8px;}
.management-btn{width:38px;height:38px;border:none;border-radius:12px;display:flex;align-items:center;justify-content:center;cursor:pointer;text-decoration:none;}
.management-edit{background:#fff1c7;color:#c77700;}
.management-delete{background:#ffe1e1;color:#dc2626;}
.management-empty{text-align:center;padding:35px;color:#64748b;}
</style>

<div class="management-page">

    <div class="management-header">
        <div>
            <span>CMS DOKUMEN</span>
            <h2>Dokumen Perusahaan</h2>
        </div>

        <a href="{{ route('admin.company-documents.create') }}" class="management-add">
            <i class="fa-solid fa-plus"></i>
            Tambah Dokumen
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="management-card">
        <table class="management-table">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Urutan</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse($documents as $item)
                    <tr>
                        <td>
                            @if($item->image)
                                <img
                                    src="{{ asset('assets/img/company-documents/' . $item->image) }}"
                                    class="management-img">
                            @else
                                -
                            @endif
                        </td>

                        <td>
                            <strong>{{ $item->title }}</strong>
                        </td>

                        <td>
                            <span class="management-badge management-status {{ $item->status }}">
                                {{ $item->status === 'active' ? 'Active' : 'Inactive' }}
                            </span>
                        </td>

                        <td>
                            {{ $item->urutan }}
                        </td>

                        <td>
                            <div class="management-actions">
                                <a href="{{ route('admin.company-documents.edit', $item->id) }}"
                                   class="management-btn management-edit">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form action="{{ route('admin.company-documents.destroy', $item->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Hapus dokumen ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="management-btn management-delete">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="management-empty">
                            Belum ada dokumen perusahaan.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection