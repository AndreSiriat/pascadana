<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    private function authorizeMainAdmin()
    {
        abort_unless(
            auth()->user()->email === 'info@pascadanasundari.com',
            403,
            'Akses ditolak.'
        );
    }

    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $this->authorizeMainAdmin();

        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $this->authorizeMainAdmin();

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User admin berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $this->authorizeMainAdmin();

        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $this->authorizeMainAdmin();

        $user = User::findOrFail($id);

        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'password' => ['nullable', 'confirmed', 'min:8'],
        ]);

        $user->name = $data['name'];
        $user->email = $data['email'];

        if (! empty($data['password'])) {
            $user->password = Hash::make($data['password']);
        }

        $user->save();

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User admin berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $this->authorizeMainAdmin();

        $user = User::findOrFail($id);

        if (auth()->id() === $user->id) {
            return back()->withErrors([
                'delete' => 'Akun yang sedang digunakan tidak bisa dihapus.',
            ]);
        }

        $user->delete();

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User admin berhasil dihapus.');
    }
}