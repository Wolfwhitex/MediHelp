<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $konsumen = Konsumen::where('email', $req->email)->first();

        if ($konsumen && Hash::check($req->password, $konsumen->password)) {
            // Jika berhasil login, set session atau token sesuai kebutuhan
            Auth::login($konsumen);
            return redirect()->intended('home'); // Ubah 'dashboard' ke halaman yang sesuai
        } else {
            return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
        }
    }
}
