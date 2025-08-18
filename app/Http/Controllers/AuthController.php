<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('dashboard.login');
    }
    public function register(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:54',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'password_confirm' => 'required|same:password'
        ]);

        $user = User::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'role' => 'admin',
        ]);

        return redirect('/dashboard/user')->with('success', 'Registrasi berhasil!');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // untuk keamanan sesi
            return redirect()->intended('/dashboard/jumbotron')->with('success', 'Login berhasil!');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logout berhasil!');
    }
}
