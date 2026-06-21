<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CertificateStat;
use Illuminate\Http\Request;

class CertificateStatController extends Controller
{
    public function index()
    {
        $stats = CertificateStat::orderBy('urutan')->get();

        return view('admin.certificate-stats.index', compact('stats'));
    }

    public function create()
    {
        return view('admin.certificate-stats.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'urutan' => 'nullable|integer',
        ]);

        CertificateStat::create($data);

        return redirect()
            ->route('admin.certificate-stats.index')
            ->with('success', 'Data statistik berhasil ditambahkan.');
    }

    public function edit(CertificateStat $certificateStat)
    {
        return view('admin.certificate-stats.edit', compact('certificateStat'));
    }

    public function update(Request $request, CertificateStat $certificateStat)
    {
        $data = $request->validate([
            'label' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'urutan' => 'nullable|integer',
        ]);

        $certificateStat->update($data);

        return redirect()
            ->route('admin.certificate-stats.index')
            ->with('success', 'Data statistik berhasil diperbarui.');
    }

    public function destroy(CertificateStat $certificateStat)
    {
        $certificateStat->delete();

        return redirect()
            ->route('admin.certificate-stats.index')
            ->with('success', 'Data statistik berhasil dihapus.');
    }
}