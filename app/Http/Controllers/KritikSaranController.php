<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use Illuminate\Http\Request;

class KritikSaranController extends Controller
{
    public function index()
    {
        return view('pages.kritik-saran');
    }

    public function store(Request $request)
    {
        $request->validate([

            'nama' => 'required',
            'email' => 'required|email',
            'subjek' => 'required',
            'kategori' => 'required',
            'rating' => 'nullable|integer|min:1|max:5',
            'pesan' => 'required',

        ]);

        KritikSaran::create([

            'nama' => $request->nama,

            'email' => $request->email,

            'subjek' => $request->subjek,

            'kategori' => $request->kategori,

            'rating' => $request->rating,

            'pesan' => $request->pesan,

            'status' => 'baru',

        ]);

        return back()->with(
            'success',
            'Terima kasih, kritik & saran berhasil dikirim.'
        );
    }
}