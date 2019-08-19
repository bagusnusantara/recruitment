<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\md_lowongan_pekerjaan;
use App\st_Negara;
use App\st_Provinsi;
use App\st_Kabkota;

use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function getLowonganpublic($id){
      
        $lowongan = md_lowongan_pekerjaan::find($id);
        return view ('public.dashboard.showpublic',compact('lowongan'));
    }

    public function showhome(){
      $tableLowongan = "md_lowongan_pekerjaan";
      $tableKategori = "st_kategoripekerjaan";
      $tableSpesialisasi ="st_spesialisasipekerjaan";
      
      $Kategori     =     DB::table($tableKategori)
                              ->leftjoin($tableLowongan, $tableLowongan.".st_kategori_pekerjaan_id",$tableKategori.".id")
                              ->select(DB::raw("count($tableLowongan.id) as length, deskripsi,$tableKategori.id"))
                              ->groupBy($tableKategori.".id")->orderBy('length','desc')
                              ->take(5)
                              ->get();

      $Spesialisasi = DB::table($tableSpesialisasi)->leftjoin($tableLowongan, $tableLowongan.".st_spesialisasi_pekerjaan_id",$tableSpesialisasi.".id")
                          ->select(DB::raw("count($tableLowongan.id) as length, spesial,$tableSpesialisasi.id"))
                          ->groupBy($tableSpesialisasi.".id")->orderBy('length','desc')
                          ->take(5)
                          ->get();
      
      $lowongan = md_lowongan_pekerjaan::orderBy('end_date', 'desc')
                                        ->take(6)
                                        ->get();
      //dump($lowongan);
      
      return view('public.welcome',compact("Kategori","Spesialisasi","lowongan"));
    }

    public function showLowonganpublic(Request $request){
      $kategori = $request->kategori;
      $spesial = $request->spesial;
      //dump($kategori,$spesial);
      // if($kategori && $spesial)
      // $lowongan_pekerjaan = md_lowongan_pekerjaan::where("st_kategori_pekerjaan_id",$kategori)->where("st_spesialisasi_pekerjaan_id",$spesial)->paginate(10);

      if($kategori)
      $lowongan_pekerjaan = md_lowongan_pekerjaan::where("st_kategori_pekerjaan_id",$kategori)->paginate(10);
      elseif($spesial)
      $lowongan_pekerjaan = md_lowongan_pekerjaan::where("st_spesialisasi_pekerjaan_id",$spesial)->paginate(10);
      else
      $lowongan_pekerjaan = md_lowongan_pekerjaan::paginate(10);

      $provinsi=st_Provinsi::all();
      $kota_all=st_Kabkota::all();
      
      return view ('public.dashboard.index',compact('lowongan_pekerjaan','provinsi','kota_all'));
    }

    
}
