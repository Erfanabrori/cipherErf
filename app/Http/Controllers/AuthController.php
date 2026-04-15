<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = Pengguna::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session([
                'user' => $user->email,
                'user_name' => $user->nama,
                'id' => $user->id,
            ]);

            return redirect('/dashboard');
        }

        return back()->with('error', 'Email atau Password salah');
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
}
