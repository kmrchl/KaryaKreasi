<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // coba login user
        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ])->onlyInput('email');
        }

        // regenerate session 
        $request->session()->regenerate();

        // redirect ke dashboard admin
        return redirect()->intended('/admin/dashboard');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        // Hapus session
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        // Redirect ke halaman login
        return redirect('/login');
    }

    public function showLoginForm()
    {
        return inertia('Auth/Login');
    }
}
