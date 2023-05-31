<?php

namespace App\Http\Controllers;
use App\Models\Kriteria;
use App\Models\Himpunan;
use App\Models\Kost;
use App\Models\Hasil;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function home(){
        $jumkriteria = Kriteria::count();
        $jumhimpunan = Himpunan::count();
        $jumKost = Kost::count();
        $hasil = Hasil::all();
        return view('home', compact('jumkriteria','jumhimpunan','jumKost','hasil'));
    }
}
