<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */

    public function loginForm() {
        return view("login");
    }
    
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/notif-user-login');
        }
        // Jika otentikasi gagal, kembalikan pengguna ke halaman login
        // dengan pesan kesalahan
        return redirect()->back()->withInput($request->only('email'))->withErrors(['email']);
    }
}