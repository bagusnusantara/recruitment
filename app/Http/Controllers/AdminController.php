<?php

namespace App\Http\Controllers;

use App\st_jabatan;
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
use App\st_Spesialisasipekerjaan;
use App\st_lowongan_gaji;
use App\trans_lowongan_pekerjaan;
use App\st_Negara;
use App\md_lowongan_jenis_tes;
use Alert;
use Excel;
use PDF;
use DB;
use Carbon\Carbon;
class AdminController extends Controller
{
    public function getDashboard(){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $loker_aktif = DB::table('md_lowongan_pekerjaan')->where('status','on')->count();
      $client=DB::table('md_client')->count();
      $users=DB::table('users')->count();
      //dd($loker_aktif);
      Alert::success('Selamat Datang di Sistem Recruitment SMI', 'Halo Admin SMI!!!');
      return view ('admin.dashboard.index',compact('loker_aktif','client','users'));
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
      //$lowongan_pekerjaan=md_lowongan_pekerjaan::all();
      $lowongan_pekerjaan=DB::table('md_lowongan_pekerjaan')
                     ->join('md_client', 'md_lowongan_pekerjaan.md_client_id', '=', 'md_client.id')
                     ->select('md_lowongan_pekerjaan.*', 'md_client.nama_client')
                     ->get();
      return view ('admin.lowongan.index',compact('lowongan_pekerjaan'));
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

      return view ('admin.lowongan.show',compact('lowongan_pekerjaan','pendaftar','detail','id'));
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
      $lowongan=DB::table('md_lowongan_pekerjaan')->where('id',$jobid)->get();
      $nilai=DB::table('trans_lowongan_pekerjaan')
          ->join('md_jobseeker','trans_lowongan_pekerjaan.users_id','md_jobseeker.users_id')
          ->select('trans_lowongan_pekerjaan.*','md_jobseeker.*')
          ->where('md_lowongan_pekerjaan_id',$jobid)
          ->orderByRaw('nilai_administrasi DESC')
          ->get();
        $md_client=md_client::all();
        $st_kabkota = st_Kabkota::all();
        $st_jabatan = st_jabatan::all();

      //dd($pelamar);
      $check = trans_lowongan_pekerjaan::where('md_lowongan_pekerjaan_id',$jobid)
                                        ->where('users_id',$userid)->count();
      if($check){
        //dd($jobid);

        //dd($lowongan);
        return view ('admin.lowongan.show_penilaian',compact('status','lowongan','nilai','md_client','st_kabkota','st_jabatan'));
      }else {
        Alert::warning('Penilaian Tidak Tersedia !');
        return redirect()->route('showAdminLowongan',['id'=>$jobid]);
      }
    }

    public function showDatapelamar($jobid,$userid){
      $status = [1,0,0,0,1];
      // $check = trans_lowongan_pekerjaan::where('md_lowongan_pekerjaan_id',$jobid)
      //                                   ->where('users_id',$userid)->count();
      $pelamar=DB::table('md_jobseeker')->where('users_id',$userid)->get();
      $pekerjaan=DB::table('st_jobseeker_pengalamankerja')->where('user_id',$userid)->get();
      $pendidikan=DB::table('st_jobseeker_pendidikanformal')
                ->where('user_id',$userid)
                ->join('st_tingkatpendidikan', 'st_jobseeker_pendidikanformal.tingkat_pendidikan', '=', 'st_tingkatpendidikan.id')
                ->select('st_jobseeker_pendidikanformal.*','st_tingkatpendidikan.strata')->get();
      $minat=DB::table('st_jobseeker_minatkerja')
                ->join('st_bisnisperusahaan','st_jobseeker_minatkerja.bidang_bisnis','=','st_bisnisperusahaan.id')
                ->join('st_lingkungankerja','st_jobseeker_minatkerja.lingkungan_kerja', '=', 'st_lingkungankerja.id')
                ->join('st_spesialisasipekerjaan','st_jobseeker_minatkerja.spesialisasi', '=', 'st_spesialisasipekerjaan.id')
                ->join('st_posisikerja','st_jobseeker_minatkerja.posisi_kerja','=','st_posisikerja.id')
                ->join('st_leveljabatan','st_jobseeker_minatkerja.level_jabatan','=','st_leveljabatan.id')
                ->where('user_id', $userid)
                ->select('st_jobseeker_minatkerja.*',
                         'st_bisnisperusahaan.name as name_bidangbisnis',
                         'st_lingkungankerja.lingkungan',
                         'st_spesialisasipekerjaan.spesial',
                         'st_posisikerja.posisi',
                         'st_leveljabatan.jabatan')
                ->get();
      $pendidikan_bahasa=DB::table('st_jobseeker_pendidikanbahasa')
                ->where('user_id', $userid)
                ->join('st_bahasa','st_jobseeker_pendidikanbahasa.bahasa', '=', 'st_bahasa.id')
                ->join('st_kemampuan as st_lisan','st_jobseeker_pendidikanbahasa.kemampuan_lisan','=','st_lisan.id')
                ->join('st_kemampuan as st_tulis','st_jobseeker_pendidikanbahasa.kemampuan_tertulis','=','st_tulis.id')
                ->select('st_jobseeker_pendidikanbahasa.*',
                         'st_bahasa.deskripsi as deskripsi_bahasa',
                         'st_lisan.tingkat as tingkat_lisan',
                         'st_tulis.tingkat as tingkat_tulis')
                ->get();
      $pendidikan_nonformal=DB::table('st_jobseeker_pendidikaninformal')
                ->where('user_id', $userid)
                ->select('st_jobseeker_pendidikaninformal.*')
                ->get();
      $pengalaman_organisasi=DB::table('st_jobseeker_pengalamanorganisasi')
                ->where('user_id', $userid)
                ->select('st_jobseeker_pengalamanorganisasi.*')
                ->get();
      $riwayat_penyakit=DB::table('st_jobseeker_riwayatpenyakit')
                ->select('st_jobseeker_riwayatpenyakit.*')
                ->where('user_id',$userid)
                ->get();
      $check = trans_lowongan_pekerjaan::where('md_lowongan_pekerjaan_id',$jobid)
                                        ->where('users_id',$userid)->count();
      if($check){
        //dd($pelamar);

        return view ('admin.lowongan.show_data_pelamar',
          compact('status','pelamar','pendidikan','pekerjaan','minat','pendidikan_bahasa',
            'pendidikan_nonformal','pengalaman_organisasi','riwayat_penyakit'));
      }else {
        Alert::warning('Data Tidak Tersedia !');
        return redirect()->route('showAdminLowongan',['id'=>$jobid]);
      }
    }

    public function showDatapelamarpdf($jobid,$userid){
        $status = [1,0,0,0,1];
        // $check = trans_lowongan_pekerjaan::where('md_lowongan_pekerjaan_id',$jobid)
        //                                   ->where('users_id',$userid)->count();
        $pelamar=DB::table('md_jobseeker')->where('users_id',$userid)->get();
        $pekerjaan=DB::table('st_jobseeker_pengalamankerja')->where('user_id',$userid)->get();
        $pendidikan=DB::table('st_jobseeker_pendidikanformal')->where('user_id',$userid)
            ->join('st_tingkatpendidikan', 'st_jobseeker_pendidikanformal.tingkat_pendidikan', '=', 'st_tingkatpendidikan.id')
            ->select('st_jobseeker_pendidikanformal.*','st_tingkatpendidikan.strata')->get();
        $check = trans_lowongan_pekerjaan::where('md_lowongan_pekerjaan_id',$jobid)
            ->where('users_id',$userid)->count();
        if($check){
            //dd($pelamar);
            $pdf = PDF::loadview('admin.lowongan.show_data_pelamar_pdf',compact('status','pelamar','pendidikan','pekerjaan'));
            return $pdf->stream();
            //return view ('admin.lowongan.show_data_pelamar',compact('status','pelamar','pendidikan','pekerjaan'));
        }else {
            Alert::warning('Data Tidak Tersedia !');
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
      $st_spesialisasi_pekerjaan=st_Spesialisasipekerjaan::all();
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

    public function getDetailSdm($userid){
      if(!Gate::allows('isAdmin')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $pelamar=DB::table('md_jobseeker')->where('users_id',$userid)->get();
      $pekerjaan=DB::table('st_jobseeker_pengalamankerja')->where('user_id',$userid)->get();
      $pendidikan=DB::table('st_jobseeker_pendidikanformal')
                ->where('user_id',$userid)
                ->join('st_tingkatpendidikan', 'st_jobseeker_pendidikanformal.tingkat_pendidikan', '=', 'st_tingkatpendidikan.id')
                ->select('st_jobseeker_pendidikanformal.*','st_tingkatpendidikan.strata')->get();
      $minat=DB::table('st_jobseeker_minatkerja')
                ->join('st_bisnisperusahaan','st_jobseeker_minatkerja.bidang_bisnis','=','st_bisnisperusahaan.id')
                ->join('st_lingkungankerja','st_jobseeker_minatkerja.lingkungan_kerja', '=', 'st_lingkungankerja.id')
                ->join('st_spesialisasipekerjaan','st_jobseeker_minatkerja.spesialisasi', '=', 'st_spesialisasipekerjaan.id')
                ->join('st_posisikerja','st_jobseeker_minatkerja.posisi_kerja','=','st_posisikerja.id')
                ->join('st_leveljabatan','st_jobseeker_minatkerja.level_jabatan','=','st_leveljabatan.id')
                ->where('user_id', $userid)
                ->select('st_jobseeker_minatkerja.*',
                         'st_bisnisperusahaan.name as name_bidangbisnis',
                         'st_lingkungankerja.lingkungan',
                         'st_spesialisasipekerjaan.spesial',
                         'st_posisikerja.posisi',
                         'st_leveljabatan.jabatan')
                ->get();
      $pendidikan_bahasa=DB::table('st_jobseeker_pendidikanbahasa')
                ->where('user_id', $userid)
                ->join('st_bahasa','st_jobseeker_pendidikanbahasa.bahasa', '=', 'st_bahasa.id')
                ->join('st_kemampuan as st_lisan','st_jobseeker_pendidikanbahasa.kemampuan_lisan','=','st_lisan.id')
                ->join('st_kemampuan as st_tulis','st_jobseeker_pendidikanbahasa.kemampuan_tertulis','=','st_tulis.id')
                ->select('st_jobseeker_pendidikanbahasa.*',
                         'st_bahasa.deskripsi as deskripsi_bahasa',
                         'st_lisan.tingkat as tingkat_lisan',
                         'st_tulis.tingkat as tingkat_tulis')
                ->get();
      $pendidikan_nonformal=DB::table('st_jobseeker_pendidikaninformal')
                ->where('user_id', $userid)
                ->select('st_jobseeker_pendidikaninformal.*')
                ->get();
      $pengalaman_organisasi=DB::table('st_jobseeker_pengalamanorganisasi')
                ->where('user_id', $userid)
                ->select('st_jobseeker_pengalamanorganisasi.*')
                ->get();
      $riwayat_penyakit=DB::table('st_jobseeker_riwayatpenyakit')
                ->select('st_jobseeker_riwayatpenyakit.*')
                ->where('user_id',$userid)
                ->get();

        return view ('admin.sdm.detail',
          compact('pelamar','pendidikan','pekerjaan','minat','pendidikan_bahasa',
            'pendidikan_nonformal','pengalaman_organisasi','riwayat_penyakit'));
    
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
        $lowongan->status = 'on';
        $namaFoto = $lowongan->id.'_foto'.time().'.'.request()->foto->getClientOriginalExtension();

        $request->foto->storeAs('foto',$namaFoto);

        $lowongan->foto = $namaFoto;
        $lowongan->st_pengalaman_id = $request->st_pengalaman_id;
        if($request->st_nilai_administrasi === null)
            $lowongan->st_nilai_administrasi = 0;
        else
        $lowongan->st_nilai_administrasi = $request->st_nilai_administrasi;
        if($request->st_nilai_interview_walk === null)
            $lowongan->st_nilai_interview_walk = 0;
        else
        $lowongan->st_nilai_interview_walk = $request->st_nilai_interview_walk;
        if($request->st_nilai_psikotes === null)
        $lowongan->st_nilai_psikotes = 0;
        else
        $lowongan->st_nilai_psikotes = $request->st_nilai_psikotes;
        $lowongan->st_nilai_interview_psikolog = $request->st_nilai_interview_psikolog;
        $lowongan->st_nilai_interview_user = $request->st_nilai_interview_user;
        $lowongan->start_date=Carbon::parse($request['start_date'])->format('Y-m-d');
        $lowongan->end_date=Carbon::parse($request['end_date'])->format('Y-m-d');

        $lowongan->save();
        Alert::success('Data berhasil tersimpan !');
        return redirect('admin/lowongan/create')->with('successMsg','Slider Successfully Saved');
    }
    public function createLowongandetailtes($id){
      $lowongan_pekerjaan=md_lowongan_pekerjaan::find($id);
      //dd($lowongan_pekerjaan->id);
      $st_jenis_tes = DB::select('select * from st_jenis_tes');
      $md_lowongan_jenis_tes = DB::table('md_lowongan_jenis_tes')
                              ->join('st_jenis_tes','md_lowongan_jenis_tes.st_jenis_tes_id','st_jenis_tes.id')
                              ->select('st_jenis_tes.deskripsi')
                              ->where('md_lowongan_pekerjaan_id',$lowongan_pekerjaan->id)
                              ->get();
      return view('admin.lowongan.create_detail_tes',compact('st_jenis_tes','md_lowongan_jenis_tes','lowongan_pekerjaan'));
    }
    public function storeLowongandetailtes(Request $request){
      $detail_tes = new md_lowongan_jenis_tes;
      $detail_tes->md_lowongan_pekerjaan_id = $request->md_lowongan_pekerjaan_id;
      $detail_tes->st_jenis_tes_id = $request->st_jenis_tes_id;
      $detail_tes->save();
      return redirect()->back();
    }
    public function updatePenilaian(Request $request){
        if(!Gate::allows('isAdmin')){
            abort(404,"Maaf Anda tidak memiliki akses");
        }
        DB::table('trans_lowongan_pekerjaan')->where('id',$request->id)->update([
            'id' => $request->id,
            'nilai_administrasi' => $request->nilai_administrasi,
            'nilai_walk_in' => $request->nilai_walk_in,
            'nilai_eas10' => $request->nilai_eas10,
            'nilai_eas5' => $request->nilai_eas5,
            'nilai_eas7' => $request->nilai_eas7,
            'nilai_apm' => $request->nilai_apm,
            'nilai_tkd_1' => $request->nilai_tkd_1,
            'nilai_tkd_2' => $request->nilai_tkd_2,
            'nilai_tkd_3' => $request->nilai_tkd_3,
            'nilai_tkd_4' => $request->nilai_tkd_4,
            'nilai_tkd_5' => $request->nilai_tkd_5,
            'nilai_tkd_6' => $request->nilai_tkd_6,
            'nilai_tkd_7' => $request->nilai_tkd_7,
            'nilai_tkd_8' => $request->nilai_tkd_8,
            'nilai_tkd_9' => $request->nilai_tkd_9,
            'nilai_tkd_10' => $request->nilai_tkd_10,
            'nilai_psi_se' => $request->nilai_psi_se,
            'nilai_psi_wa' => $request->nilai_psi_wa,
            'nilai_psi_an' => $request->nilai_psi_an,
            'nilai_psi_ge' => $request->nilai_psi_ge,
            'nilai_psi_ra' => $request->nilai_psi_ra,
            'nilai_psi_zr' => $request->nilai_psi_zr,
            'nilai_psi_fa' => $request->nilai_psi_fa,
            'nilai_psi_wu' => $request->nilai_psi_wu,
            'nilai_psi_me' => $request->nilai_psi_me,
            'nilai_psi_iq' => $request->nilai_psi_iq,
            'nilai_tintum' => $request->tintum,
            'nilai_army_alfa' => $request->nilai_army_alfa,
            'nilai_tpp_5' => $request->nilai_tpp_5,
            'nilai_tpp_6' => $request->nilai_tpp_6,
            'nilai_tpp_7' => $request->nilai_tpp_7,
            'nilai_tpp_8' => $request->nilai_tpp_8,
            'nilai_tiki_f1' => $request->nilai_tiki_f1,
            'nilai_tiki_f2' => $request->nilai_tiki_f2,
            'nilai_tiki_f3' => $request->nilai_tiki_f3,
                    ]);
        Alert::success('Komponen Gaji Berhasil diupdate');
        return redirect()->back();
    }
    public function profile()
    {
        $user = \Auth::user();
        return view('profile',compact('user',$user));
    }

    public function update_avatar(Request $request){

      $request->validate([
          'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      $user = \Auth::user();

      $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

      $request->avatar->storeAs('avatars',$avatarName);

      $user->avatar = $avatarName;
      $user->save();

      return back()
         ->with('success','You have successfully upload image.');

  }


}
