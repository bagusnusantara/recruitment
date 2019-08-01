<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\md_lowongan_pekerjaan;
use App\st_Negara;
use App\st_Provinsi;
use App\st_Kabkota;

class PublicController extends Controller
{
    public function getLowonganpublic($id){
      
        $lowongan = md_lowongan_pekerjaan::find($id);
        return view ('public.dashboard.showpublic',compact('lowongan'));
    }

    public function showLowonganpublic(){
      $lowongan_pekerjaan=md_lowongan_pekerjaan::paginate(10);
      $provinsi=st_Provinsi::all();
      $kota_all=st_Kabkota::all();
      return view ('public.dashboard.index',compact('lowongan_pekerjaan','provinsi','kota_all'));
    }
}
