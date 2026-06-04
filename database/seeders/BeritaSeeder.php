<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    public function run()
    {
        DB::table('beritas')->insert([
            [
                'judul'     => 'Ferry Baru Beroperasi',
                'tanggal'   => now(),
                'gambar'    => 'berita1.jpg',
                'ringkasan' => 'Ferry A-B telah resmi beroperasi.',
                'isi'       => 'Isi lengkap berita di sini',
                'slug'      => Str::slug('Ferry Baru Beroperasi'),
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            // Tambah data lain di sini
        ]);
    }
}