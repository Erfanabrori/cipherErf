<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = Pengguna::where('email', $request->email)
                ->where('password', $request->password)
                ->first();

        if ($user) {
            session([
                'user' => $user->email,
                'id' => $user->id
            ]);

            return redirect('/dashboard');
        }

        return back()->with('error','Email atau Password salah');
    }

    public function dashboard()
    {
        if (!session()->has('user')) {
            return redirect('/login');
        }

        return view('dashboard');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }

    public function index()
    {
        return view('daftarPengguna');
    }

    public function profil()
    {
        return view('profil');
    }

    public function create(Request $request)
    {
        // Simpan pengguna baru
        return Pengguna::create($request->all());
    }
}