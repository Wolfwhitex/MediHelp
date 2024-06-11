<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsultasi;
use App\Models\Konsultan;

class KonsultasiController extends Controller
{
//     public function index()
//     {
//         // Logika untuk menampilkan halaman konsultasi
//         return view('konsultasi');
//     }

    

//     public function datasubmit(Request $request)
//     {
//         $request->validate([
//             'Nama' => 'required|string|max:255',
//             'KonsultanID' => 'required|exists:konsultans,id',
//             'jadwal' => 'required|date',
//             'Konsultasi' => 'required|string|max:255',
//         ]);

//         Konsultasi::create($request->all());

//         return redirect()->back()->with('success', 'Data konsultasi berhasil disimpan.');
//     }

//     public function store(Request $request)
// {
//     // Validasi dan simpan data sesuai kebutuhan
//     // Contoh:
//     $validatedData = $request->validate([
//         'spesialisasi' => 'required|string',
//     ]);

//     // Simpan data ke tabel konsultasi (sesuai kebutuhan Anda)
//     // Misalnya:
//     // Konsultasi::create($validatedData);

//     return redirect()->route('datasubmit')->with('success', 'Konsultasi berhasil dibuat.');
// }
public function create()
{
    // Mengambil semua spesialisasi dari tabel konsultan
    $spesialisasi = Konsultan::select('spesialisasi')->distinct()->get();
    
    // Mengirim data spesialisasi ke view
    return view('konsultasi', compact('spesialisasi'));
}

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jadwal' => 'required|date',
            'spesialisasi' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Konsultasi::create([
            'name' => $request->name,
            'jadwal' => $request->jadwal,
            'spesialisasi' => $request->spesialisasi,
            'message' => $request->message,
        ]);

        return redirect()->route('create')->with('success', 'Konsultasi berhasil dibuat.');
    }
}