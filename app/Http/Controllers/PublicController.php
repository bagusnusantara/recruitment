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
                              ->select(DB::raw("count($tableLowongan.id) as length, deskripsi"))
                              ->groupBy($tableKategori.".id")->orderBy('length','desc')
                              ->take(7)
                              ->get();

      $Spesialisasi = DB::table($tableSpesialisasi)->leftjoin($tableLowongan, $tableLowongan.".st_spesialisasi_pekerjaan_id",$tableSpesialisasi.".id")
                          ->select(DB::raw("count($tableLowongan.id) as length, spesial"))
                          ->groupBy($tableSpesialisasi.".id")->orderBy('length','desc')
                          ->take(7)
                          ->get();
      
      $lowongan = DB::table($tableLowongan)
                      ->orderBy('end_date','desc')
                      ->join($tableKategori, $tableKategori.".id",$tableLowongan.".st_spesialisasi_pekerjaan_id")
                      ->join($tableSpesialisasi, $tableSpesialisasi.".id",$tableLowongan.".st_kategori_pekerjaan_id")
                      ->take(4)
                      ->get();
      //dump($lowongan);
      return view('public.welcome',compact("Kategori","Spesialisasi","lowongan"));
    }

    public function showLowonganpublic(){
      $lowongan_pekerjaan=md_lowongan_pekerjaan::paginate(10);
      $provinsi=st_Provinsi::all();
      $kota_all=st_Kabkota::all();
      return view ('public.dashboard.index',compact('lowongan_pekerjaan','provinsi','kota_all'));
    }
}
