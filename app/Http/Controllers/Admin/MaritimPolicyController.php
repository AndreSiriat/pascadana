<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MaritimPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MaritimPolicyController extends Controller
{
    public function index(Request $request)
        {
            $query = MaritimPolicy::query();

            if ($request->search) {
                $query->where(function ($q) use ($request) {
                    $q->where('title', 'like', '%' . $request->search . '%')
                    ->orWhere('category', 'like', '%' . $request->search . '%')
                    ->orWhere('document_number', 'like', '%' . $request->search . '%')
                    ->orWhere('summary', 'like', '%' . $request->search . '%');
                });
            }

            if ($request->category) {
                $query->where('category', $request->category);
            }

            if ($request->status) {
                $query->where('status', $request->status);
            }

            $policies = $query->latest()->paginate(10)->withQueryString();

            return view('admin.maritim-policy.index', compact('policies'));
        }

    public function create()
    {
        return view('admin.maritim-policy.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        MaritimPolicy::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'document_number' => $request->document_number,
            'document_year' => $request->document_year,
            'source_name' => 'Direktorat Jenderal Perhubungan Laut',
            'source_url' => $request->source_url,
            'summary' => $request->summary,
            'status' => $request->status ?? 'published',
        ]);

        return redirect('/admin/maritim-policy')
            ->with('success', 'Maritim Policy berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $policy = MaritimPolicy::findOrFail($id);

        return view('admin.maritim-policy.show', compact('policy'));
    }

    public function edit(string $id)
    {
        $policy = MaritimPolicy::findOrFail($id);

        return view('admin.maritim-policy.edit', compact('policy'));
    }

    public function update(Request $request, string $id)
    {
        $policy = MaritimPolicy::findOrFail($id);

        $request->validate([
            'title' => 'required',
        ]);

        $policy->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'document_number' => $request->document_number,
            'document_year' => $request->document_year,
            'source_name' => 'Direktorat Jenderal Perhubungan Laut',
            'source_url' => $request->source_url,
            'summary' => $request->summary,
            'status' => $request->status ?? 'published',
        ]);

        return redirect('/admin/maritim-policy')
            ->with('success', 'Maritim Policy berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $policy = MaritimPolicy::findOrFail($id);
        $policy->delete();

        return redirect('/admin/maritim-policy')
            ->with('success', 'Maritim Policy berhasil dihapus');
    }
}