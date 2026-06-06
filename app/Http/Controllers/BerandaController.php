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
        // Kiri hanya 5 berita per halaman
        $berita = Berita::latest()
            ->paginate(5);

        // Sidebar kanan 4 berita terbaru
        $latestBerita = Berita::latest()
            ->take(4)
            ->get();

        // Kategori sidebar
        $categories = Berita::select('kategori')
            ->whereNotNull('kategori')
            ->distinct()
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