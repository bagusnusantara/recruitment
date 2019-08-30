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
use App\lembur;
use App\st_waktu_lembur;
use App\tbl_pelatihan;
use App\st_pelatihan;

class PegawaiController extends Controller
{
    public function getDashboard(){
        return view('pegawai.dashboard.index');
    }
    public function getPresensi(){
        $md_karyawan= md_karyawan::all();
        $absensi = DB::table('absensi')
        ->join('md_karyawan','absensi.karyawan_id','=','md_karyawan.users_id')
        ->select('absensi.*','md_karyawan.nama_lengkap','md_karyawan.NIK')
        ->get();
        return view('pegawai.presensi.index', compact('absensi'));
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
        $st_waktu_lembur = st_waktu_lembur::all();
        $md_karyawan=md_karyawan::all();
        $lembur=DB::table('lembur')
        ->join('md_karyawan','lembur.karyawan_id','=','md_karyawan.users_id')
        ->join('st_waktu_lembur', 'lembur.waktu_lembur' , '=', 'st_waktu_lembur.kode')
        ->select('lembur.*','md_karyawan.NIK','md_karyawan.nama_lengkap','st_waktu_lembur.deskripsi')
        ->get();
        return view('pegawai.lembur.index', compact('lembur','md_karyawan','st_waktu_lembur'));
    }

    public function storeLembur(Request $request){
      $lembur = new lembur;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $lembur->karyawan_id = $request->karyawan_id;
      $lembur->waktu_awal = $request->waktu_awal;
      $lembur->waktu_akhir = $request->waktu_akhir;
      $lembur->waktu_lembur = $request->waktu_lembur;
      $lembur->keterangan = $request->keterangan;
      $lembur->status = $request->status;
      $lembur->notes = $request->notes;
      $lembur->created_at = $date_time;
      $lembur->created_by = $user;
      $lembur->updated_at = $date_time;
      $lembur->updated_by = $user;
      $lembur->deleted_at = $date_time;
      $lembur->deleted_by = $user;
      $lembur->save();

      Alert::success('Lembur Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateLembur(Request $request){
        $user = Auth::user()->id;
        $date_time = Carbon::now()->toDateTimeString();
        $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
        DB::table('lembur')
        ->where('id', $request->id)
        ->update([
         'karyawan_id' => $request->karyawan_id,
         'waktu_awal' => $request->waktu_awal,
         'waktu_akhir' => $request->waktu_akhir,
         'waktu_lembur' => $request->waktu_lembur,
         'keterangan' => $request->keterangan,
         'status' => $request->status,
         'notes' => $request->notes,
         'updated_at' => $date_time,
         'updated_by' => $user,
        ]);
        Alert::success('Lembur Berhasil diupdate');
        return redirect()->back();
    }

    public function deleteLembur(Request $request){
        $id = $request->id;
        $lembur= DB::select(DB::raw(" DELETE FROM lembur 
                                      WHERE id = '$id' "));
        Alert::success('Lembur Berhasil dihapus');
        return redirect()->back();
    }

    public function getSanksi(){
        $tbl_sanksi = DB::table('tbl_sanksi')
        ->join('md_karyawan','tbl_sanksi.nik','=','md_karyawan.NIK')
        ->join('st_sanksi','tbl_sanksi.kode','=','st_sanksi.kode')
        ->select('tbl_sanksi.*','md_karyawan.nama_lengkap','st_sanksi.deskripsi')
        ->get();
        return view('pegawai.sanksi.index', compact('tbl_sanksi'));
    }
    public function getTraining(){
        $st_pelatihan = st_pelatihan::all();
        $md_karyawan = md_karyawan::all();
        $tbl_pelatihan = DB::table('tbl_pelatihan')
        ->join('md_karyawan','tbl_pelatihan.nik','=','md_karyawan.NIK')
        ->join('st_pelatihan','tbl_pelatihan.kode_pelatihan', '=','st_pelatihan.kode')
        ->select('tbl_pelatihan.*','md_karyawan.nama_lengkap','st_pelatihan.deskripsi')
        ->get();
        return view('pegawai.training.index', compact('tbl_pelatihan','md_karyawan','st_pelatihan'));
    }

    public function storeTraining(Request $request){
      $training = new tbl_pelatihan;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $training->nik = $request->nik;
      $training->sdate = $request->sdate;
      $training->edate = $request->edate;
      $training->kode_pelatihan = $request->kode_pelatihan;
      $training->target_pelatihan = $request->target_pelatihan;
      $training->realisasi_hasil = $request->realisasi_hasil;
      $training->nilai_pelatihan = $request->nilai_pelatihan;
      $training->vendor_pelatihan = $request->vendor_pelatihan;
      $training->biaya_pelatihan = $request->biaya_pelatihan;
      $training->entry_date = $date_time;
      $training->entry_user = $user;
      $training->save();

      Alert::success('Training Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateTraining(Request $request){
        DB::table('tbl_pelatihan')
        ->where('nik', $request->hnik)
        ->where('sdate', $request->hsdate)
        ->where('edate', $request->hedate)
        ->where('kode_pelatihan', $request->hkode_pelatihan)
        ->update([
         'target_pelatihan' => $request->target_pelatihan,
         'realisasi_hasil' => $request->realisasi_hasil,
         'nilai_pelatihan' => $request->nilai_pelatihan,
         'vendor_pelatihan' => $request->vendor_pelatihan,
         'biaya_pelatihan' => $request->biaya_pelatihan,
        ]);
        Alert::success('Training Berhasil diupdate');
        return redirect()->back();
    }

    public function deleteTraining(Request $request){
        $nik = $request->hnik;
        $sdate = $request->hsdate;
        $edate = $request->hedate;
        $kode_pelatihan = $request->hkode_pelatihan;
        $training= DB::select(DB::raw(" DELETE FROM tbl_pelatihan 
                                      WHERE nik = '$nik'
                                      AND sdate = '$sdate'
                                      AND edate = '$edate'
                                      AND kode_pelatihan = '$kode_pelatihan' "));
        Alert::success('Training Berhasil dihapus');
        return redirect()->back();
    }

}
