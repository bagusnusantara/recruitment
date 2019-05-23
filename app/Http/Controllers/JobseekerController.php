<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\md_lowongan_pekerjaan;
use App\st_alamat_provinsi;
use App\st_alamat_kabkota;
class JobseekerController extends Controller
{
    public function getDashboard(){
      if(!Gate::allows('isJobseeker')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $lowongan_pekerjaan=md_lowongan_pekerjaan::all();
      $provinsi=st_alamat_provinsi::all();
      $kota_all=st_alamat_kabkota::all();
      return view ('jobseeker.dashboard.index',compact('lowongan_pekerjaan','provinsi','kota_all'));
    }

    public function getNotifikasi(){
      if(!Gate::allows('isJobseeker')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('jobseeker.notifikasi.index');
    }

    public function getTentangsaya(){
      if(!Gate::allows('isJobseeker')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('jobseeker.profil.tentangsaya.index');
    }
}
