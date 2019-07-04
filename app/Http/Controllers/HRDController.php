<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\md_lowongan_pekerjaan;
use App\md_client;
use App\st_Provinsi;
use App\st_Kabkota;
use App\st_kategori_pekerjaan;
use App\st_spesialisasi_pekerjaan;
use App\st_lowongan_gaji;
use App\trans_lowongan_pekerjaan;
use App\st_komponen_gaji;
use Alert;
class HRDController extends Controller
{
    public function getDashboard(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      Alert::success('Selamat Datang di Sistem Recruitment SMI', 'Halo HRD SMI!!!');
      return view ('hrd.dashboard.index');
    }
    public function getPayroll(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $client=md_client::all();
      return view ('hrd.payroll.index',compact('client'));
    }
    public function getSlipgaji(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('hrd.payroll.slip');
    }
    public function getKomponengaji(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $komponen_gaji=st_komponen_gaji::all();
      return view ('hrd.setup.komponengaji.index',compact('komponen_gaji'));
    }
    public function getGajiperlokasi(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('hrd.setup.gajiperlokasi.index');
    }

}
