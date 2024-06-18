<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    // public function index()
    // {
    //     $obat = Obat::paginate(10);
    //     return response()->json([
    //         'obat' => $obat
    //     ]);
    // }
    // public function show(Obat $obat)
    // {
    //     return response()->json([
    //         'obat' => $obat
    //     ]);
    // }
    public function search(Request $request)
    {
        $search = $request->search;
        $obat = Obat::where('keterangan_penyakit','Like','%'.$search.'%')
        ->get();

        return view('saranobat',compact('obat'));
    }
    public function saranobat()
    {
        return view("saranobat", [
            "obat" => Obat::get(),
        ]);
    }
     
}