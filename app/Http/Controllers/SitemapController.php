<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $berita = Berita::where('status', 'publish')
            ->latest()
            ->get();

        $xml = view('sitemap', compact('berita'))->render();

        return Response::make($xml, 200, [
            'Content-Type' => 'application/xml',
        ]);
    }
}