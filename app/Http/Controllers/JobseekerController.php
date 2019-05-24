<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\md_lowongan_pekerjaan;
use App\st_alamat_provinsi;
use App\st_alamat_kabkota;;
use App\md_jobseeker;
use App\trans_lowongan_pekerjaan;
use Alert;
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
    public function getProfil(){
      if(!Gate::allows('isJobseeker')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $profil=md_jobseeker::all()->where('users_id',\Auth::user()->id);
      return view ('jobseeker.profil.index',compact('profil'));
    }

    public function getNotifikasi(){
      if(!Gate::allows('isJobseeker')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('jobseeker.notifikasi.index');
    }

    public function showLowongan($id){
      if(!Gate::allows('isJobseeker')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $lowongan = md_lowongan_pekerjaan::find($id);
      //$trans_lowongan = trans_lowongan_pekerjaan::all()->where('md_lowongan_pekerjaan_id',$lowongan->id);
      return view ('jobseeker.dashboard.show',compact('lowongan'));
    }
    public function storeLamaran(Request $request){
      $this->validate($request,[
            // 'nama_alat' => 'required',
            // 'jenis_alat' => 'required',
            // 'jumlah' => 'required',
            // 'status_kepemilikan' => 'required',
            // 'status_kelaikan' => 'required'
        ]);
        $lowongan = trans_lowongan_pekerjaan::create($request->all());
        $lowongan->save();
        Alert::success('Lowongan Pekerjaan berhasil terkirim');
        return redirect()->back()->with('successMsg','Slider Successfully Saved');
    }


}
