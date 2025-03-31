<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function memeriksa() {
        $obats = Obat::all(); // Ambil semua data obat
        return view('dokter.memeriksa', compact('obats'));
    }
}
