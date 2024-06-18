<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obatapotek;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApotekController extends Controller
{
    public function show(Request $request)
{
    $show = $request->show;
    $obatapotek = Obatapotek::get();

    return view('obatapotek', compact('obatapotek'));
}

    // public function show(Obatapotek $obatapotek)
    // {
    //     return response()->json([
    //         'obatapotek' => $obatapotek
    //     ]);
    // }
}
