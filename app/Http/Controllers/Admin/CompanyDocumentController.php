<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompanyDocumentController extends Controller
{
    public function index()
    {
        $documents = CompanyDocument::orderBy('urutan')->get();

        return view('admin.company-documents.index', compact('documents'));
    }

    public function create()
    {
        return view('admin.company-documents.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:4096',
            'status' => 'required|in:active,inactive',
            'urutan' => 'nullable|integer',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('assets/img/company-documents'), $filename);

            $data['image'] = $filename;
        }

        CompanyDocument::create($data);

        return redirect()
            ->route('admin.company-documents.index')
            ->with('success', 'Dokumen perusahaan berhasil ditambahkan.');
    }

    public function edit(CompanyDocument $companyDocument)
    {
        return view('admin.company-documents.edit', compact('companyDocument'));
    }

    public function update(Request $request, CompanyDocument $companyDocument)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'status' => 'required|in:active,inactive',
            'urutan' => 'nullable|integer',
        ]);

        if ($request->hasFile('image')) {
            $oldPath = public_path('assets/img/company-documents/' . $companyDocument->image);

            if ($companyDocument->image && File::exists($oldPath)) {
                File::delete($oldPath);
            }

            $file = $request->file('image');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('assets/img/company-documents'), $filename);

            $data['image'] = $filename;
        }

        $companyDocument->update($data);

        return redirect()
            ->route('admin.company-documents.index')
            ->with('success', 'Dokumen perusahaan berhasil diperbarui.');
    }

    public function destroy(CompanyDocument $companyDocument)
    {
        $oldPath = public_path('assets/img/company-documents/' . $companyDocument->image);

        if ($companyDocument->image && File::exists($oldPath)) {
            File::delete($oldPath);
        }

        $companyDocument->delete();

        return redirect()
            ->route('admin.company-documents.index')
            ->with('success', 'Dokumen perusahaan berhasil dihapus.');
    }
}