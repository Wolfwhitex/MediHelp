<?php
namespace App\Http\Controllers;
use App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Konsumen;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'umur' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'notelpon' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:konsumen',
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
            return redirect()->back()->with('success', 'Registrasi berhasil!');
        } else {
            return redirect()->back()->withErrors(['error' => 'Registrasi gagal, silakan coba lagi.']);
        }
    }

    // public function authenticate(Request $request){
    //     $credentials = $request->only('email', 'password');
    //     // if(Auth::attempt(
    //     //     [
    //     //         'email' => $request->email,
    //     //         'password' => $request->password
    //     //     ]
    //     // ))
        

    //     // Periksa apakah pengguna ada dalam basis data
    //     $konsumen = Konsumen::where('email', $request->email)->first();
        
    //     if(!$konsumen) {
    //         return redirect(route('login'))->with("error", "User not found!");
    //     }

    //     // Jika pengguna ada dalam basis data, coba untuk melakukan autentikasi
    //     if(Auth::attempt($credentials)){
    //         return redirect()->intended(route('home'));
    //     }

    //     // if(Auth::attempt($credentials)){
    //     //     return redirect()->intended(route('home'));
    //     // }

    //     // Jika autentikasi gagal, berarti password salah
    //     return redirect(route('login'))->with("error", "Wrong password!");

    // }

    public function authenticate(Request $request)
{
    $credentials = $request->only('email', 'password');

    // Periksa apakah pengguna ada dalam basis data
    $konsumen = Konsumen::where('email', $request->email)->first();

    if (!$konsumen) {
        return redirect(route('login'))->with('error', 'Pengguna tidak ditemukan!');
    }

    // Periksa apakah password sesuai dengan password di database
    if (\Hash::check($request->password, $konsumen->password)) {
        // Autentikasi berhasil, login pengguna
        Auth::login($konsumen);
        return redirect()->intended(route('home'));
    }

    // Autentikasi gagal, password salah
    return redirect(route('login'))->with('error', 'Password salah!');
}


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}