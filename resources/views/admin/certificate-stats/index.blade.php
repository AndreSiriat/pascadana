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
.management-value{font-size:28px;font-weight:900;color:#06456b;}
.management-actions{display:flex;gap:8px;}
.management-btn{width:38px;height:38px;border:none;border-radius:12px;display:flex;align-items:center;justify-content:center;cursor:pointer;text-decoration:none;}
.management-edit{background:#fff1c7;color:#c77700;}
.management-delete{background:#ffe1e1;color:#dc2626;}
.management-empty{text-align:center;padding:35px;color:#64748b;}
</style>

<div class="management-page">

    <div class="management-header">
        <div>
            <span>CMS SERTIFIKASI</span>
            <h2>Certificate Status</h2>
        </div>

        <a href="{{ route('admin.certificate-stats.create') }}" class="management-add">
            <i class="fa-solid fa-plus"></i>
            Tambah Data
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
                    <th>Value</th>
                    <th>Label</th>
                    <th>Urutan</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse($stats as $item)
                    <tr>
                        <td>
                            <span class="management-value">{{ $item->value }}</span>
                        </td>

                        <td>
                            <strong>{{ $item->label }}</strong>
                        </td>

                        <td>
                            {{ $item->urutan }}
                        </td>

                        <td>
                            <div class="management-actions">
                                <a href="{{ route('admin.certificate-stats.edit', $item->id) }}"
                                   class="management-btn management-edit">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form action="{{ route('admin.certificate-stats.destroy', $item->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Yakin hapus data ini?')">
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
                        <td colspan="4" class="management-empty">
                            Belum ada data sertifikasi.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection