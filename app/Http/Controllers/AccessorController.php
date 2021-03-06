<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use App\User;
use App\md_jobseeker;
use App\md_lowongan_pekerjaan;
use App\md_client;
use App\st_Provinsi;
use App\st_Kabkota;
use App\st_Kecamatan;
use App\st_Kategoripekerjaan;
use App\st_spesialisasipekerjaan;
use App\st_spesialisasi_pekerjaan;
use App\st_lowongan_gaji;
use App\trans_lowongan_pekerjaan;
use App\st_Negara;
use Alert;
use Excel;
use PDF;
use DB;
use Carbon\Carbon;
class AccessorController extends Controller
{
    

    public function getLowongan(){
      if(!Gate::allows('isAccessor')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $lowongan_pekerjaan=DB::table('md_lowongan_pekerjaan')
                     ->join('md_client', 'md_lowongan_pekerjaan.md_client_id', '=', 'md_client.id')
                     ->select('md_lowongan_pekerjaan.*', 'md_client.nama_client')
                     ->get();
      return view ('accessor.lowongan.index',compact('lowongan_pekerjaan'));
    }

    public function showLowongan($id){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $lowongan_pekerjaan=md_lowongan_pekerjaan::find($id);
      
      $pendaftar=DB::table('trans_lowongan_pekerjaan')
                     ->join('md_jobseeker', 'trans_lowongan_pekerjaan.users_id', '=', 'md_jobseeker.users_id')
                     ->select('trans_lowongan_pekerjaan.*', 'md_jobseeker.nama_lengkap','md_jobseeker.nik')
                     ->where('md_lowongan_pekerjaan_id',$lowongan_pekerjaan->id)
                     ->get();
      $detail=DB::table('md_lowongan_pekerjaan')
                  ->join('st_lowongan_gaji','md_lowongan_pekerjaan.st_lowongan_gaji_id','st_lowongan_gaji.id')
                  ->select('st_lowongan_gaji.deskripsi')
                  ->where('md_lowongan_pekerjaan.id',$lowongan_pekerjaan->id)
                  ->get();
      
      return view ('accessor.lowongan.show',compact('lowongan_pekerjaan','pendaftar','detail','id'));
    }

    public function showPelamar($id){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      //$pendaftar=trans_lowongan_pekerjaan::all()->where('md_lowongan_pekerjaan_id',$lowongan_pekerjaan->id);

      $pendaftar=DB::table('trans_lowongan_pekerjaan')
                     ->join('md_jobseeker', 'trans_lowongan_pekerjaan.users_id', '=', 'md_jobseeker.users_id')
                     ->select('trans_lowongan_pekerjaan.*', 'md_jobseeker.nama_lengkap','md_jobseeker.nik')
                     ->where('md_lowongan_pekerjaan_id',$lowongan_pekerjaan->id)
                     ->get();
      $pelamar=md_lowongan_pekerjaan::find($id);

      $detail=DB::table('md_lowongan_pekerjaan')
                  ->join('st_lowongan_gaji','md_lowongan_pekerjaan.st_lowongan_gaji_id','st_lowongan_gaji.id')
                  ->select('st_lowongan_gaji.deskripsi')
                  ->where('md_lowongan_pekerjaan.id',$lowongan_pekerjaan->id)
                  ->get();
      return view ('admin.lowongan.show',compact('lowongan_pekerjaan','pendaftar','detail'));
    }

    public function showPenilaian($jobid,$userid){
      $status = [1,0,0,0,1];
      $check = trans_lowongan_pekerjaan::where('md_lowongan_pekerjaan_id',$jobid)
                                        ->where('users_id',$userid)->count();
      if($check){
        return view ('admin.lowongan.show_penilaian',compact('status')); 
      }else {
        Alert::warning('Penilaian Tidak Tersedia !');
        return redirect()->route('showAdminLowongan',['id'=>$jobid]);
      }
    }

    public function createLowongan(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $now = \Carbon\Carbon::now()->format('Y-m-d');
      $md_client=md_client::all();
      $st_lowongan_gaji=st_lowongan_gaji::all();
      $st_kategori_pekerjaan=st_Kategoripekerjaan::all();
      $st_spesialisasi_pekerjaan=st_spesialisasipekerjaan::all();
      $st_negara = st_Negara::all();
      $st_provinsi = st_Provinsi::all();
      $st_kabkota = st_Kabkota::all();

      return view ('admin.lowongan.create',compact('md_client','st_negara','st_lowongan_gaji','st_kategori_pekerjaan','st_spesialisasi_pekerjaan','st_provinsi','st_kabkota'));
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
      // $sdm=DB::select('select * from md_jobseeker');
      $sdm = DB::table('md_jobseeker')
            // ->join('riwayat_pendidikan', 'users.id', '=', 'contacts.user_id')
            // ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('md_jobseeker.*')
            ->get();
      //dd($sdm);
      return view ('admin.sdm.index',compact('sdm'));
    }

    public function cetak_pkwt()
    {
    	$pegawai = md_jobseeker::all();
      $pdf = PDF::loadview('pkwt',['pegawai'=>$pegawai]);
	    return $pdf->stream();
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
      $user=User::all();
      return view ('admin.manajemenuser.index',compact('user'));
    }

    public function createManajemenuser(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.manajemenuser.create');
    }

    public function getManajementes(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      return view ('admin.manajementes.index');
    }

    public function storeLowogan(Request $request){
        $lowongan = new md_lowongan_pekerjaan;
        $lowongan->job_tittle = $request->job_tittle;
        $lowongan->md_client_id = $request->md_client_id;
        $lowongan->st_spesialisasi_pekerjaan_id = $request->st_spesialisasi_pekerjaan_id;
        $lowongan->st_kategori_pekerjaan_id = $request->st_kategori_pekerjaan_id;
        $lowongan->persyaratan = $request->persyaratan;
        $lowongan->deskripsi_pekerjaan = $request->deskripsi_pekerjaan;
        $lowongan->st_provinsi_id = $request->st_provinsi_id;
        $lowongan->st_kabkota_id = $request->st_kabkota_id;
        $lowongan->st_lowongan_gaji_id = $request->st_lowongan_gaji_id;
        $lowongan->status = $request->status;
        $lowongan->st_pengalaman_id = $request->st_pengalaman_id; 
        $lowongan->st_nilai_administrasi = $request->st_nilai_administrasi;
        $lowongan->st_nilai_interview_walk = $request->st_nilai_interview_walk;
        $lowongan->st_nilai_psikotes = $request->st_nilai_psikotes;
        $lowongan->st_nilai_interview_regular = $request->st_nilai_interview_regular;
        $lowongan->st_nilai_interview_user = $request->st_nilai_interview_user;
        $lowongan->start_date=Carbon::parse($request['start_date'])->format('Y-m-d');
        $lowongan->end_date=Carbon::parse($request['end_date'])->format('Y-m-d');

        $lowongan->save();
        Alert::success('Data berhasil tersimpan !');
        return redirect('admin/lowongan')->with('successMsg','Slider Successfully Saved');
    }

    
}
