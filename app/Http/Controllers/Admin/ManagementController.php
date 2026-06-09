<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Management;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ManagementController extends Controller
{
    public function index()
    {
        $management = Management::orderBy('group')
            ->orderBy('id', 'asc')
            ->paginate(12);

        return view(
            'admin.management.index',
            compact('management')
        );
    }

    public function create()
    {
        return view('admin.management.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'    => 'required',
            'jabatan' => 'required',
            'group'   => 'required',
            'foto'    => 'required|image|mimes:jpg,jpeg,png,webp|max:7096',
            'status'  => 'required',
        ]);

        $fotoName = null;

        if ($request->hasFile('foto')) {

            $fotoName = time() . '.' .
                $request->foto->extension();

            $request->foto->move(
                public_path('assets/img/management'),
                $fotoName
            );
        }

        Management::create([
            'nama'    => $request->nama,
            'jabatan' => $request->jabatan,
            'group'   => $request->group,
            'foto'    => $fotoName,
            'urutan'  => $request->urutan ?? 0,
            'status'  => $request->status,
        ]);

        return redirect()
            ->route('admin.management.index')
            ->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $management = Management::findOrFail($id);

        return view(
            'admin.management.edit',
            compact('management')
        );
    }

    public function update(Request $request, $id)
    {
        $management = Management::findOrFail($id);

        $request->validate([
            'nama'    => 'required',
            'jabatan' => 'required',
            'group'   => 'required',
            'status'  => 'required',
        ]);

        $fotoName = $management->foto;

        if ($request->hasFile('foto')) {

            if (
                $management->foto &&
                File::exists(
                    public_path(
                        'assets/img/management/' .
                        $management->foto
                    )
                )
            ) {
                File::delete(
                    public_path(
                        'assets/img/management/' .
                        $management->foto
                    )
                );
            }

            $fotoName = time() . '.' .
                $request->foto->extension();

            $request->foto->move(
                public_path('assets/img/management'),
                $fotoName
            );
        }

        $management->update([
            'nama'    => $request->nama,
            'jabatan' => $request->jabatan,
            'group'   => $request->group,
            'foto'    => $fotoName,
            'urutan'  => $request->urutan ?? 0,
            'status'  => $request->status,
        ]);

        return redirect()
            ->route('admin.management.index')
            ->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $management = Management::findOrFail($id);

        if (
            $management->foto &&
            File::exists(
                public_path(
                    'assets/img/management/' .
                    $management->foto
                )
            )
        ) {
            File::delete(
                public_path(
                    'assets/img/management/' .
                    $management->foto
                )
            );
        }

        $management->delete();

        return redirect()
            ->route('admin.management.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}