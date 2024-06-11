<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Konsumen;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');  // Pastikan view 'auth.register' ada
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:konsumens',
            'name' => 'required|string|max:255',
            'umur' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'notelpon' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:konsumens',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $konsumen = new Konsumen([
            'username' => $request->username,
            'name' => $request->name,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'notelpon' => $request->notelpon,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($konsumen->save()) {
            return redirect()->route('login')->with('success', 'Registrasi berhasil!');
        } else {
            return redirect()->back()->withErrors(['error' => 'Registrasi gagal, silakan coba lagi.']);
        }
    }

    public function showLoginForm()
    {
        return view('auth.login');  // Pastikan view 'auth.login' ada
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required|string|min:8',
        ]);

        $login = $request->input('login');
        $password = $request->input('password');

        // Check if login is email or username
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::guard('konsumen')->attempt([$fieldType => $login, 'password' => $password])) {
            return redirect()->intended('home');
        } else {
            return redirect()->back()->withErrors(['error' => 'Email atau password salah.']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
