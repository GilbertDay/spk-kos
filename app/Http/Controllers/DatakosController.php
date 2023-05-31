<?php

namespace App\Http\Controllers;
use App\Models\Kost;
use App\Models\Himpunan;
use Illuminate\Http\Request;

class DatakosController extends Controller
{

    public function index(){
        $dataKost = Kost::all();
        $biaya = Himpunan::where('nama_kriteria','Biaya')->get();
        $jarak = Himpunan::where('nama_kriteria','Jarak')->get();
        $fasilitas = Himpunan::where('nama_kriteria','Fasilitas')->get();
        $luas = Himpunan::where('nama_kriteria','Luas Kamar')->get();
        return view('dataKos', compact('dataKost','biaya','jarak','fasilitas','luas'));
    }
    public function tambah(Request $req){
        $dataKos = new Kost;
        $dataKos->nama_kost = $req->nama_kost;
        $dataKos->no_hp = $req->no_hp;
        $dataKos->alamat = $req->alamat;
        $dataKos->jarak = $req->jarak;
        $dataKos->biaya = $req->biaya;
        $dataKos->fasilitas = $req->fasilitas;
        $dataKos->luas_kamar = $req->luas_kamar;
        $dataKos->save();
        return redirect('/');
    }

    public function edit(Request $req, $id){
        $dataKos =Kost::find($idsdf);
        $dataKos->nama_kost = $req->nama_kost;
        $dataKos->no_hp = $req->no_hp;
        $dataKos->alamat = $req->alamat;
        $dataKos->jarak = $req->jarak;
        $dataKos->biaya = $req->biaya;
        $dataKos->fasilitas = $req->fasilitas;
        $dataKos->luas_kamar = $req->luas_kamar;
        $dataKos->save();
        return redirect('/');
    }

    public function hapus($id){
        $dataKos = Kost::where('id_kost',$id)->delete();
        return redirect('/datakos');
    }
}
