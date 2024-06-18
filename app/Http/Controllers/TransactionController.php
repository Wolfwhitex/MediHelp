<?php

namespace App\Http\Controllers;





use Illuminate\Support\Facades\Log;
use App\Models\Transaksi;
use App\Models\Obatapotek;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    

    public function store(Request $request)
    {
        $data = new Transaksi;
        $data->ObatapotekID = $request->input('ObatapotekID');
        $data->Jumlah_obat = $request->input('Jumlah_obat');
        // $data->total_harga = $request->input('total_harga');

        $obatapotek = Obatapotek::findOrFail($request->ObatapotekID);
        $total_harga = $request->Jumlah_obat * $obatapotek->Hargaobat;
        $data->total_harga = $total_harga;
        
        $data->save();
    // $request->validate([
    //     'Namaobat' => 'required|string|exists:namaobat',
    //     'Jumlah_obat' => 'required|integer|min:1',
    //     'total_harga' => 'required|integer',
    // ]);

    

        // $transaksi = new Transaksi([
        //     'Namaobat' => $request->Namaobat,
        //     'Jumlah_obat' => $request->Jumlah_obat,
        //     'total_harga' => $total_harga,
        // ]);

        // if($transaksi->save())
        // {
        //     return redirect()->back()->with('success', 'Transaksi berhasil ditambah');
        // } else {
        //     return redirect()->back()->withErrors(['error' => 'Transaksi gagal ditambah']);
        // }
        dd($total_harga);
        return view('transaksi', compact('total_harga'));
    }

    public function create()
    {
        $obatapotek = Obatapotek::all(); // Ambil semua data obat dari database
        return view('transaksi', compact('obatapotek'));
    }
}
