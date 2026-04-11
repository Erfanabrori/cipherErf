<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all();
        return view('daftarPengguna', compact('pengguna'));
    }

    public function profil()
    {
        return view('profil');
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pengguna,email',
            'password' => 'required|string|min:6',
        ]);

        return Pengguna::create($request->only(['nama', 'email', 'password']));
    }
}
