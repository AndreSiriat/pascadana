<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $query = Berita::query();

        /*
        |--------------------------------------------------------------------------
        | SEARCH
        |--------------------------------------------------------------------------
        */

        if ($request->search) {

            $query->where(function ($q) use ($request) {

                $q->where('judul', 'like', '%' . $request->search . '%')
                    ->orWhere('kategori', 'like', '%' . $request->search . '%')
                    ->orWhere('isi', 'like', '%' . $request->search . '%');

            });

        }

        /*
        |--------------------------------------------------------------------------
        | FILTER KATEGORI
        |--------------------------------------------------------------------------
        */

        if ($request->kategori) {

            $query->where('kategori', $request->kategori);

        }

        /*
        |--------------------------------------------------------------------------
        | FILTER STATUS
        |--------------------------------------------------------------------------
        */

        if ($request->status) {

            $query->where('status', $request->status);

        }

        /*
        |--------------------------------------------------------------------------
        | PAGINATION
        |--------------------------------------------------------------------------
        */

        $berita = $query
            ->latest()
            ->paginate(7)
            ->withQueryString();

        return view('admin.berita.index', compact('berita'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'status' => 'required',
            'thumbnail' => 'required|image',
            'isi' => 'required',
        ]);

        $thumbnail = time() . '.' . $request->thumbnail->extension();

        $request->thumbnail->move(
            public_path('assets/img/news'),
            $thumbnail
        );

        Berita::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'slug' => Str::slug($request->judul) . '-' . time(),
            'thumbnail' => $thumbnail,
            'isi' => $request->isi,
            'author' => 'Admin',
            'status' => $request->status,
        ]);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'status' => 'required',
            'thumbnail' => 'nullable|image',
            'isi' => 'required',
        ]);

        $thumbnail = $berita->thumbnail;

        if ($request->hasFile('thumbnail')) {

            $thumbnail = time() . '.' . $request->thumbnail->extension();

            $request->thumbnail->move(
                public_path('assets/img/news'),
                $thumbnail
            );
        }

        $berita->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'slug' => Str::slug($request->judul) . '-' . $berita->id,
            'thumbnail' => $thumbnail,
            'isi' => $request->isi,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil dihapus');
    }
}