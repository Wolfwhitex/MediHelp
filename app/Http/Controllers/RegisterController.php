<?php
namespace App\Http\Controllers;
use App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Konsumen;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // public function register(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required|string|max:255',
    //         'name' => 'required|string|max:255',
    //         'umur' => 'required|integer',
    //         'alamat' => 'required|string|max:255',
    //         'notelpon' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:konsumen',
    //         'password' => 'required|string|min:8|confirmed',
    //     ]);

    //     $konsumen = new Konsumen([
    //         'username' => $request->username,
    //         'name' => $request->name,
    //         'umur' => $request->umur,
    //         'alamat' => $request->alamat,
    //         'notelpon' => $request->notelpon,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     if ($konsumen->save()) {
    //         return redirect()->back()->with('success', 'Registrasi berhasil!');
    //     } else {
    //         return redirect()->back()->withErrors(['error' => 'Registrasi gagal, silakan coba lagi.']);
    //     }
    // }

    // public function authenticate(Request $request){
    //     if(Auth::attempt(
    //         [
    //             'email' => $request->email,
    //             'password' => $request->password
    //         ]
    //     ))
    //     $credentials = $request->only('email', 'password');

    //     // Periksa apakah pengguna ada dalam basis data
    //     $konsumen = Konsumen::where('email', $request->customer_email)->first();
        
    //     if(!$konsumen) {
    //         return redirect(route('login'))->with("error", "User not found!");
    //     }

    //     // Jika pengguna ada dalam basis data, coba untuk melakukan autentikasi
    //     if(Auth::attempt($credentials)){
    //         return redirect()->intended(route('home'));
    //     }

    //     // Jika autentikasi gagal, berarti password salah
    //     return redirect(route('login'))->with("error", "Wrong password!");

    // }

    // public function logout(Request $request){
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect('login');
    // }




public function index()
    {
		$konsumen = '';
        return view('konsumen.index', array('konsumen' => $konsumen, 'title' => 'User Page'));
    }

    public function register()
    {
        return view('konsumen.register', array('title' => 'Register'));
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
			'username' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'umur' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'notelpon' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:konsumen',
            'password' => 'required|string|min:8|confirmed',
							)
						);
		
        //$input = $request->all();        
        //dd($request->email);
        //dd($input); // dd() helper function is print_r alternative
		
		Konsumen::create(array(
						// 'name' => $request->name, 
						// 'email' => $request->email,
						// 'password' => bcrypt($request->password),

            'username' => $request->username,
            'name' => $request->name,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'notelpon' => $request->notelpon,
            'email' => $request->email,
            'password' => Hash::make($request->password),
					));
		
		Session::flash('flash_message', 'User registration successful!');

		//return redirect()->back();
		//return redirect('user');
		return redirect()->route('konsumen.login');
    }

    public function login()
    {
        return view('konsumen.login', array('title' => 'Login'));
    }

    public function authenticate(Request $request)
    {		
		if (Auth::attempt(array('email' => $request->email, 'password' => $request->password))) {
			return redirect()->route('konsumen.index');
		} else {
			return redirect()->route('konsumen.login');
		}		
    }

    public function logout() {
		Auth::logout();		
		return redirect()->route('konsumen.login');
	}

    public function account()
    {
        return view('konsumen.account', array('title' => 'My Account'));
    }
    
}