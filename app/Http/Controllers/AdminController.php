<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\md_lowongan_pekerjaan;
use App\md_client;
use App\st_alamat_provinsi;
use App\st_alamat_kabkota;
use App\st_kategori_pekerjaan;
use App\st_spesialisasi_pekerjaan;
use App\st_lowongan_gaji;
use App\trans_lowongan_pekerjaan;
use Alert;
use Excel;
use PDF;
class AdminController extends Controller
{
    public function getDashboard(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      Alert::success('Selamat Datang di Sistem Recruitment SMI', 'Halo Admin SMI!!!');
      return view ('admin.dashboard.index');
    }

    public function getNotifikasi(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.notifikasi.index');
    }

    public function createNotifikasi(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.notifikasi.create');
    }

    public function getLowongan(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $lowongan_pekerjaan=md_lowongan_pekerjaan::all();
      return view ('admin.lowongan.index',compact('lowongan_pekerjaan'));
    }

    public function showLowongan($id){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $lowongan_pekerjaan=md_lowongan_pekerjaan::find($id);
      $pendaftar=trans_lowongan_pekerjaan::all()->where('md_lowongan_pekerjaan_id',$lowongan_pekerjaan->id);
      return view ('admin.lowongan.show',compact('lowongan_pekerjaan','pendaftar'));
    }

    public function createLowongan(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $md_client=md_client::all();
      $st_lowongan_gaji=st_lowongan_gaji::all();
      $st_kategori_pekerjaan=st_kategori_pekerjaan::all();
      $st_spesialisasi_pekerjaan=st_spesialisasi_pekerjaan::all();
      $st_alamat_provinsi=st_alamat_provinsi::all();
      $st_alamat_kabkota=st_alamat_kabkota::all();
      return view ('admin.lowongan.create',compact('md_client','st_alamat_kabkota','st_alamat_provinsi','st_lowongan_gaji','st_kategori_pekerjaan','st_spesialisasi_pekerjaan'));
    }

    public function getKlien(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $md_client=md_client::all();
      return view ('admin.klien.index',compact('md_client'));
    }

    public function createKlien(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.klien.create');
    }

    public function getSdm(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.sdm.index');
    }

    public function createSdm(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.sdm.create');
    }

    public function getManajemenuser(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.manajemenuser.index');
    }

    public function createManajemenuser(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.manajemenuser.create');
    }

    public function storeLowogan(Request $request){
      $this->validate($request,[
            // 'nama_alat' => 'required',
            // 'jenis_alat' => 'required',
            // 'jumlah' => 'required',
            // 'status_kepemilikan' => 'required',
            // 'status_kelaikan' => 'required'
        ]);
        $lowongan = md_lowongan_pekerjaan::create($request->all());
        $lowongan->save();
        Alert::success('Data berhasil tersimpan !');
        return redirect('admin/lowongan')->with('successMsg','Slider Successfully Saved');
    }

}
