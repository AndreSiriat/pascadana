<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\MaritimPolicy;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()
            ->take(4)
            ->get();

        return view('index', compact('berita'));
    }

    public function berita(Request $request)
    {
        $query = Berita::latest();

        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        $berita = $query
            ->paginate(5)
            ->withQueryString();

        $latestBerita = Berita::latest()
            ->take(4)
            ->get();

        $categories = Berita::select('kategori')
            ->whereNotNull('kategori')
            ->distinct()
            ->orderBy('kategori')
            ->get();

        return view('pages.berita', compact(
            'berita',
            'latestBerita',
            'categories'
        ));
    }

    public function detail($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        $latestBerita = Berita::where('id', '!=', $berita->id)
            ->latest()
            ->take(4)
            ->get();

        $categories = Berita::select('kategori')
            ->whereNotNull('kategori')
            ->distinct()
            ->orderBy('kategori')
            ->get();

        return view('pages.detail-berita', compact(
            'berita',
            'latestBerita',
            'categories'
        ));
    }

    public function maritimPolicy()
    {
        $policies = MaritimPolicy::where('status', 'published')
            ->latest()
            ->paginate(3);

        return view('pages.maritim-policy', compact('policies'));
    }
}