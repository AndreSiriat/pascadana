<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\MaritimPolicy;

class BerandaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()
            ->take(4)
            ->get();

        return view('index', compact('berita'));
    }

    public function berita()
    {
        $berita = Berita::latest()->paginate(7);

        return view('pages.berita', compact('berita'));
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
            ->paginate(6);

        return view('pages.maritim-policy', compact('policies'));
    }
}