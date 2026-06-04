<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KritikSaran;

class KritikSaranController extends Controller
{
    public function index()
    {
        $kritikSarans = KritikSaran::latest()->paginate(10);

        return view('admin.kritik-saran.index', compact('kritikSarans'));
    }
}