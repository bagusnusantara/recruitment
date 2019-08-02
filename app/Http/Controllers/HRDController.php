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
use App\md_karyawan;
use Alert;
use DB;
class HRDController extends Controller
{
    public function getDashboard(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      Alert::success('Selamat Datang di Sistem Recruitment SMI', 'Halo HRD SMI!!!');
      return view ('hrd.dashboard.index');
    }
    public function getSMI(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $md_karyawan=md_karyawan::where('status',1)->get();
      return view ('hrd.sdm.smi.index',compact('md_karyawan'));
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
    public function storeKomponengaji(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $komponen_gaji=st_komponen_gaji::create($request->all());
      $komponen_gaji->save();
      Alert::success('Komponen Gaji Berhasil ditambahkan');
      return redirect()->back();
    }
    public function updateKomponengaji(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_komponen_gaji')->where('kode_komponen_gaji',$request->kode_komponen_gaji)->update([
    		'kode_komponen_gaji' => $request->kode_komponen_gaji,
    		'desc_komponen_gaji' => $request->desc_komponen_gaji,
    		'label_slip_gaji' => $request->label_slip_gaji,
    		'id_pendapatan' => $request->id_pendapatan
    	]);
      Alert::success('Komponen Gaji Berhasil diupdate');
      return redirect()->back();
    }
    public function destroyKomponengaji($id)
    {
    	//$st_komponen_gaji = st_komponen_gaji::findOrfail($request->kode_komponen_gaji);
      $st_komponen_gaji = st_komponen_gaji::find($id);
      $st_komponen_gaji->delete();
      Alert::success('Komponen Gaji Berhasil dihapus');
    	return redirect()->back();
    }


    public function getGajiperlokasi(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('hrd.setup.gajiperlokasi.index');
    }

}
