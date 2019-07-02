<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\md_lowongan_pekerjaan;
use App\md_jobseeker;
use App\trans_lowongan_pekerjaan;
use Alert;
//---- st
use App\st_Agama;
use App\st_Negara;
use App\st_Provinsi;
use App\st_Kabkota;
use App\st_Kecamatan;
use App\st_Kelamin;
use App\st_Tingkatpendidikan;
use App\st_Statuskeluarga;
use App\st_Spesialisasipekerjaan;
use App\st_Kategoripekerjaan;
use App\st_Bisnisperusahaan;
use App\st_Idcard;
use App\st_Kemampuan;
use App\st_Lingkungankerja;
use App\st_Leveljabatan;
use App\st_Posisikerja;

class JobseekerController extends Controller
{
    public function getDashboard(){
      if(!Gate::allows('isJobseeker')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $lowongan_pekerjaan=md_lowongan_pekerjaan::paginate(10);
      $provinsi=st_Provinsi::all();
      $kota_all=st_Kabkota::all();
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

    //Lamaran Section
    public function showDataDiri(){
      $st_data = [];
      $st_data['Agama'] = st_Agama::all();
      $st_data['JenisKelamin'] = st_Kelamin::all();
      $st_data['Negara'] = st_Negara::all();
      $st_data['Idcard'] = st_Idcard::all();
      $st_data['TingkatPendidikan'] = st_Tingkatpendidikan::all();
      $st_data['Kemampuan'] = st_Kemampuan::all();
      $st_data['BisnisPerusahaan'] = st_Bisnisperusahaan::all();
      $st_data['kategoriPekerjaan'] = st_Kategoripekerjaan::all();
      $st_data['SpesialisasiPekerjaan']=st_Spesialisasipekerjaan::all();
      $st_data['StatusKeluarga']= st_Statuskeluarga::all();
      $st_data['LingkunganKerja']= st_Lingkungankerja::all();
      $st_data['LevelJabatan']= st_Leveljabatan::all();
      $st_data['PosisiKerja']= st_Posisikerja::all();
      
      return view('jobseeker.datadiri.index',compact('st_data'));
    }

    public function getSt(Request $request){
      
      if($request->st_category=="JenisKelamin"){
        $response = st_Kelamin::all();
        return response()->json(['data'=>$response]);
      }
      return response()->json(['data'=>$request->st_category]);
    }

    public function storeDataDiri(Request $request){
      return response()->json(["success"=>$request->namalengkap]);
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
