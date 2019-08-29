<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use DB;
use App\User;
use Carbon\Carbon;
use Auth;
use Redirect;
use App\md_karyawan;
use App\cuti;

class PegawaiController extends Controller
{
    public function getDashboard(){
        return view('pegawai.dashboard.index');
    }
    public function getPresensi(){
        return view('pegawai.presensi.index');
    }
    public function getCuti(){

        $md_karyawan=md_karyawan::all();
        $cuti=DB::table('cuti')
        ->join('md_karyawan','cuti.karyawan_id','=','md_karyawan.users_id')
        ->select('cuti.*','md_karyawan.NIK','md_karyawan.nama_lengkap')
        ->get();
        return view('pegawai.cuti.index', compact('cuti','md_karyawan'));
    }

    public function storeCuti(Request $request){
      $cuti = new cuti;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $cuti->karyawan_id = $request->karyawan_id;
      $cuti->tanggal_awal = $request->tanggal_awal;
      $cuti->tanggal_akhir = $request->tanggal_akhir;
      $cuti->keterangan = $request->keterangan;
      $cuti->status = $request->status;
      $cuti->notes = $request->notes;
      $cuti->created_at = $date_time;
      $cuti->created_by = $user;
      $cuti->updated_at = $date_time;
      $cuti->updated_by = $user;
      $cuti->deleted_at = $date_time;
      $cuti->deleted_by = $user;
      $cuti->save();

      Alert::success('Cuti Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateCuti(Request $request){
        $user = Auth::user()->id;
        $date_time = Carbon::now()->toDateTimeString();
        $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
        DB::table('cuti')
        ->where('id', $request->id)
        ->update([
         'karyawan_id' => $request->karyawan_id,
         'tanggal_awal' => $request->tanggal_awal,
         'tanggal_akhir' => $request->tanggal_akhir,
         'keterangan' => $request->keterangan,
         'status' => $request->status,
         'notes' => $request->notes,
         'updated_at' => $date_time,
         'updated_by' => $user,
        ]);
        Alert::success('Cuti Berhasil diupdate');
        return redirect()->back();
    }

    public function deleteCuti(Request $request){
        $id = $request->id;
        $cuti= DB::select(DB::raw(" DELETE FROM cuti 
                                      WHERE id = '$id' "));
        Alert::success('Cuti Berhasil dihapus');
        return redirect()->back();
    }



    public function getLembur(){
        return view('pegawai.lembur.index');
    }
    public function getSanksi(){
        return view('pegawai.sanksi.index');
    }
    public function getTraining(){
        return view('pegawai.training.index');
    }

}
