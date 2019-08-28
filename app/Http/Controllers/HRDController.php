<?php

namespace App\Http\Controllers;

use App\st_Negara;
use Illuminate\Http\Request;
use Gate;
use App\md_lowongan_pekerjaan;
use App\md_client;
use App\md_karyawan;
use App\st_Provinsi;
use App\st_Kabkota;
use App\st_Kategoripekerjaan;
use App\st_spesialisasi_pekerjaan;
use App\st_lowongan_gaji;
use App\trans_lowongan_pekerjaan;
use App\st_komponen_gaji;
use App\st_Umk;
use App\st_Tunjanganjabatan;
use App\st_Tunjangantransport;
use App\st_Tunjanganmakan;
use App\st_Periodecutoffgaji;
use App\st_Tunjanganprestasi;
use App\st_gp_jabatan_site;
use App\st_tt_payroll;
use App\st_asuransi;
use App\st_pot_bpjs;
use App\st_tunj_kjk;
use App\st_tunj_otn;
use App\st_tunj_otr;
use App\st_tunj_shift_malam;
use App\st_lokasi_kerja;
use App\st_kjk_jab;
use App\st_jabatan;
use App\st_otn_jab;
use App\st_klp_gaji;
use App\st_tunj_masa_kerja_thn;
use App\st_payment_req_pengajuan;
use App\st_payment_req_sn_pic;
use App\hari_libur;
use App\md_kalender_libur;
use App\st_hari_lembur;
use App\st_waktu_lembur;
use App\st_sanksi;
use App\st_alasan_absen;
use App\schclass;
use App\schpola;
use App\st_jadwalgroup;
use App\st_group;
use App\st_jadwalpersonal;
use App\st_periode;
use App\tbl_sisacuti;
use App\departemen;
use App\groups;
use App\st_shift;
use App\st_staff;
use App\st_golongan;
use App\st_level_jabatan;
use App\st_status_karyawan;
use App\st_alasan_resign;
use App\st_Spesialisasipekerjaan;
use App\st_pelatihan;
use App\st_pekerjaan;
use App\md_jobseeker;
use App\tbl_lokasi_kerja_hist;

use Alert;
use DB;
use App\User;
use Carbon\Carbon;
use Auth;
use Redirect;
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
	public function getPresensi(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $client=md_client::all();
	  $presensi=DB::table('absensi_online')
	  ->join('users', 'absensi_online.karyawan_id', '=', 'users.id')
      ->select('absensi_online.*','users.name','users.avatar')
      ->get();
      return view ('hrd.presensi.index',compact('client','presensi'));
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
    public function destroyKomponengaji(Request $request)
    {
    	$id = $request->kode_komponen_gaji;
      $komponengaji = DB::select(DB::raw(" DELETE FROM st_komponen_gaji WHERE kode_komponen_gaji = '$id'"));
      Alert::success('Komponen Gaji Berhasil dihapus');
    	return redirect()->back();
    }


    public function getUMK(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_md_client = md_client::all();
      $umk=DB::table('st_umk')
      ->join('md_client', 'st_umk.md_client_id', '=', 'md_client.id')
      ->select('st_umk.*', 'md_client.nama_client')
      ->get();
      return view ('hrd.setup.umk.index',compact('umk','st_md_client'));
    }

    public function editUMK($id){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_md_client = md_client::all();
      $umk=DB::table('st_umk')
      ->join('md_client', 'st_umk.md_client_id', '=', 'md_client.id')
      ->select('st_umk.*', 'md_client.nama_client')
      ->where('st_umk.id','=', $id )
      ->get();
      return view ('hrd.setup.umk.edit',compact('umk','st_md_client'));
    }

    public function storeUMK(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $umk = new st_Umk;
      $id = st_Umk::max('id') + 1;

      $user = Auth::user()->id;

      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $umk->id = $id;
      $umk->tanggal = $request->input('tanggal_umk');
      $umk->md_client_id = $request->input('md_client_id_umk');
      $umk->umk = $request->input('umk_umk');
      $umk->umk_bpjs_sehat = $request->input('umk_bpjs_sehat');
      $umk->entry_user = $user;
      $umk->entry_date = $date_time;
      $umk->save();

      Alert::success('UMK Berhasil ditambahkan');
      return redirect()->back();
    }

    public function destroyUmk(Request $request)
    {
      $id = $request->id_umk;
      $umk = DB::select(DB::raw(" DELETE FROM st_umk WHERE id = '$id'"));
      Alert::success('Komponen Gaji Berhasil dihapus');
      return redirect()->back();
    }

    public function updateUmk(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_umk')->where('id',$request->id_umk)->update([
        'tanggal' => $request->tanggal_umk,
        'md_client_id' => $request->md_client_id_umk,
        'umk' => $request->umk_umk,
        'umk_bpjs_sehat' => $request->umk_bpjs_sehat
      ]);
      Alert::success('UMK Berhasil diupdate');
      return Redirect::to('/hrd/setup/umk');
    }

    public function getTunjanganjabatan(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $md_client = DB::table('md_client')->select('md_client.*')->get();
      $st_jabatan = DB::table('st_jabatan')->select('st_jabatan.*')->get();
      $st_tunj_jabatan=DB::table('st_tunj_jabatan')
      ->join('md_client','st_tunj_jabatan.kode_site', '=', 'md_client.id')
      ->join('st_jabatan', 'st_tunj_jabatan.kode_jabatan', '=','st_jabatan.kode')
      ->select('st_tunj_jabatan.*','st_jabatan.Deskripsi','md_client.nama_client')
      ->get();
      return view ('hrd.setup.tunjanganjabatan.index',compact('st_tunj_jabatan','md_client','st_jabatan'));
    }

    public function editTunjanganjabatan($jab,$site){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $md_client = DB::table('md_client')->select('md_client.*')->get();
      $st_jabatan = DB::table('st_jabatan')->select('st_jabatan.*')->get();
      $st_tunj_jabatan=DB::table('st_tunj_jabatan')
      ->join('md_client','st_tunj_jabatan.kode_site', '=', 'id')
      ->join('st_jabatan', 'st_tunj_jabatan.kode_jabatan', '=','kode')
      ->select('st_tunj_jabatan.*','st_jabatan.Deskripsi','md_client.nama_client')
      ->where('st_tunj_jabatan.kode_jabatan','=',$jab)
      ->where('st_tunj_jabatan.kode_site', '=', $site)
      ->get();
      return view ('hrd.setup.tunjanganjabatan.edit',compact('st_tunj_jabatan','md_client','st_jabatan'));
    }

    public function storeTunjanganjabatan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $user = Auth::user()->id;

      $tunj = new st_Tunjanganjabatan;

      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $tunj->kode_jabatan = $request->kode_jabatan;
      $tunj->kode_site = $request->kode_site;
      $tunj->tunj_jabatan = $request->tunjangan_jabatan;
      $tunj->entry_user = $user;
      $tunj->entry_date = $date_time;
      $tunj->tgl_berlaku = $request->tanggal_berlaku;
      $tunj->save();

      Alert::success('UMK Berhasil ditambahkan');
      return redirect()->back();
    }

    public function destroyTunjanganjabatan(Request $request)
    {
      $kode_jabatan = $request->uukode_jabatan;
      $kode_site = $request->uukode_site;
      $tunj = DB::select(DB::raw(" DELETE FROM st_tunj_jabatan WHERE kode_jabatan = '$kode_jabatan' AND kode_site = '$kode_site'"));
      Alert::success('Tunjangan Jabatan Berhasil dihapus');
      return redirect()->back();
    }

    public function updateTunjanganjabatan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_tunj_jabatan')
        ->where('kode_jabatan',$request->uukode_jabatan)
        ->where('kode_site',$request->uukode_site)
        ->update([
        'tunj_jabatan' => $request->tunjangan_jabatan,
        'tgl_berlaku' => $request->tanggal_berlaku
      ]);
      Alert::success('Tunjangan Jabatan Berhasil diupdate');
      return Redirect::to('/hrd/setup/tunjanganjabatan');
    }

    public function getTunjangantransport(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_md_client = md_client::all();
      $st_tunjtransport=DB::table('st_tunjtransport')
      ->join('md_client', 'st_tunjtransport.md_client_id', '=', 'md_client.id')
      ->select('st_tunjtransport.*', 'md_client.nama_client')
      ->get();
      return view ('hrd.setup.tunjangantransport.index',compact('st_tunjtransport','st_md_client'));
    }

    public function storeTunjangantransport(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $user = Auth::user()->id;

      $tunj = new st_Tunjangantransport;

      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $tunj->md_client_id = $request->nama_client;
      $tunj->tunj_transport = $request->tunj_transport;
      $tunj->entry_user = $user;
      $tunj->entry_date = $date_time;
      $tunj->save();

      Alert::success('Tunjangan Transport Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateTunjangantransport(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_tunjtransport')
        ->where('md_client_id', $request->nama_client)
        ->update([
        'md_client_id' => $request->nama_client,
        'tunj_transport' => $request->tunj_transport,
      ]);
      Alert::success('Tunjangan Transport Berhasil diupdate');
      return redirect()->back();
    }

     public function destroyTunjangantransport(Request $request)
      {
        $id = $request->id;
        $tunj = DB::select(DB::raw(" DELETE FROM st_tunjtransport WHERE md_client_id = '$id'"));
        Alert::success('Tunjangan Transport Berhasil dihapus');
        return redirect()->back();
      }


    public function getTunjanganmakan(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_md_client = md_client::all();
      $st_tunjmakan=DB::table('st_tunjmakan')
      ->join('md_client', 'st_tunjmakan.md_client_id', '=', 'md_client.id')
      ->select('st_tunjmakan.*', 'md_client.nama_client')
      ->get();
      return view ('hrd.setup.tunjanganmakan.index',compact('st_tunjmakan','st_md_client'));
    }

    public function storeTunjanganmakan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $user = Auth::user()->id;
      $tunj = new  st_Tunjanganmakan;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $tunj->md_client_id = $request->nama_client;
      $tunj->tunj_makan = $request->tunj_makan;
      $tunj->entry_user = $user;
      $tunj->entry_date = $date_time;
      $tunj->save();

      Alert::success('Tunjangan Makan Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateTunjanganmakan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_tunjmakan')
        ->where('md_client_id', $request->nama_client)
        ->update([
        'md_client_id' => $request->nama_client,
        'tunj_makan' => $request->tunj_makan,
      ]);
      Alert::success('Tunjangan Makan Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyTunjanganmakan(Request $request)
      {
        $id = $request->id;
        $tunj = DB::select(DB::raw(" DELETE FROM st_tunjmakan WHERE md_client_id = '$id'"));
        Alert::success('Tunjangan Transport Berhasil dihapus');
        return redirect()->back();
      }


    public function getPeriodecutoff(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_cutoff_gaji=DB::table('st_cutoff_gaji')
      ->select('st_cutoff_gaji.*')
      ->get();
      return view ('hrd.setup.periodecutoffgaji.index',compact('st_cutoff_gaji'));
    }

    public function editPeriodecutoffgaji($bulan, $tahun){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_cutoff_gaji=DB::table('st_cutoff_gaji')
      ->select('st_cutoff_gaji.*')
      ->where('st_cutoff_gaji.bln', '=', $bulan)
      ->where('st_cutoff_gaji.thn', '=', $tahun)
      ->get();
      return view ('hrd.setup.periodecutoffgaji.edit',compact('st_cutoff_gaji'));
    }

    public function storePeriodecutoffgaji(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $user = Auth::user()->id;
      $tunj = new  st_Periodecutoffgaji;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $tunj->bln = $request->bulan;
      $tunj->thn= $request->tahun;
      $tunj->sd_prd = $request->sdate;
      $tunj->ed_prd= $request->edate;
      $tunj->entry_user = $user;
      $tunj->entry_date = $date_time;
      $tunj->save();

      Alert::success('Periode cut off gaji Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updatePeriodecutoffgaji(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_cutoff_gaji')
        ->where('bln', $request->uubulan)
        ->where('thn', $request->uutahun)
        ->update([
        'sd_prd' => $request->sdate,
        'ed_prd' => $request->edate,
      ]);
      Alert::success('Periode cut off gaji Berhasil diupdate');
      return Redirect::to('/hrd/setup/periodecutoffgaji');
    }

    public function destroyPeriodecutoffgaji(Request $request)
      {
        $bln = $request->uubulan;
        $thn = $request->uutahun;
        $tunj = DB::select(DB::raw(" DELETE FROM st_cutoff_gaji WHERE bln = '$bln' AND thn = '$thn' "));
        Alert::success('periode cut off gaji Berhasil dihapus');
        return redirect()->back();
      }

    public function getTunjanganprestasi(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_tunj_prestasi=DB::table('st_tunj_prestasi')
      ->select('st_tunj_prestasi.*')
      ->get();
      return view ('hrd.setup.tunjanganprestasi.index',compact('st_tunj_prestasi'));
    }

    public function storeTunjanganprestasi(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $user = Auth::user()->id;
      $tunj = new  st_Tunjanganprestasi;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $tunj->kode = $request->kode;
      $tunj->deskripsi= $request->deskripsi;
      $tunj->tunj_prestasi = $request->tunj_prestasi;
      $tunj->entry_user = $user;
      $tunj->entry_date = $date_time;
      $tunj->save();

      Alert::success('Tunjangan Prestasi Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateTunjanganprestasi(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_tunj_prestasi')
        ->where('kode', $request->hkode)
        ->update([
        'deskripsi' => $request->deskripsi,
        'tunj_prestasi' => $request->tunj_prestasi,
      ]);
      Alert::success('Tunjangan Prestasi Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyTunjanganprestasi(Request $request)
      {
        $kode = $request->hkode;
        $tunj = DB::select(DB::raw(" DELETE FROM st_tunj_prestasi WHERE kode = '$kode'"));
        Alert::success('Tunjangan Prestasi Berhasil dihapus');
        return redirect()->back();
      }

    public function getGpjabatansite(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_jabatan = st_jabatan::all();
      $md_client = md_client::all();
      $st_gp_jabatan_site=DB::table('st_gp_jabatan_site')
      ->join('md_client', 'st_gp_jabatan_site.kode_lokasi', '=', 'id')
      ->join('st_jabatan', 'st_gp_jabatan_site.kode_jabatan', '=', 'kode')
      ->select('st_gp_jabatan_site.*', 'md_client.nama_client','st_jabatan.Deskripsi')
      ->get();
      return view ('hrd.setup.gpjabatansite.index',compact('st_gp_jabatan_site','md_client','st_jabatan'));
    }

    public function storeGpjabatansite(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $user = Auth::user()->id;
      $tunj = new  st_gp_jabatan_site;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $tunj->tgl_berlaku = $request->tgl_berlaku;
      $tunj->kode_lokasi= $request->kode_lokasi;
      $tunj->kode_jabatan = $request->kode_jabatan;
      $tunj->nilai = $request->nilai;
      $tunj->entry_user = $user;
      $tunj->entry_date = $date_time;
      $tunj->save();

      Alert::success('Gaji Pokok per jabatan (site) Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateGpjabatansite(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_gp_jabatan_site')
        ->where('tgl_berlaku', $request->htgl_berlaku)
        ->where('kode_lokasi', $request->hkode_lokasi)
        ->where('kode_jabatan', $request->hkode_jabatan)
        ->update([
         'nilai' => $request->nilai,
      ]);
      Alert::success('Gaji poko per Jabatan (site) Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyGpjabatansite(Request $request)
      {
        $tgl_berlaku = $request->htgl_berlaku;
        $kode_lokasi = $request->hkode_lokasi;
        $kode_jabatan = $request->hkode_jabatan;
        $tunj = DB::select(DB::raw(" DELETE FROM st_gp_jabatan_site 
                                      WHERE tgl_berlaku = '$tgl_berlaku' 
                                      AND kode_lokasi = '$kode_lokasi' 
                                      AND kode_jabatan = '$kode_jabatan'"));
        Alert::success('Gaji Pokok per Jabatan (site) Berhasil dihapus');
        return redirect()->back();
      }

    public function getPenandatanganangaji(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_jabatan = st_jabatan::all();
      $st_tt_payroll=DB::table('st_tt_payroll')
      ->select('st_tt_payroll.*')
      ->get();
      return view ('hrd.setup.penandatanganangaji.index',compact('st_tt_payroll','st_jabatan'));
    }

    public function storePenandatanganangaji(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $tunj = new  st_tt_payroll;
      $tunj->nama= $request->nama;
      $tunj->jabatan = $request->jabatan;
      $tunj->save();

      Alert::success('Penandatanganan Gaji Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updatePenandatanganangaji(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_tt_payroll')
        ->where('seq', $request->hseq)
        ->update([
         'nama' => $request->nama,
         'jabatan' => $request->jabatan,
      ]);
      Alert::success('Penandatanganan Gaji Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyPenandatanganangaji(Request $request)
      {
        $seq = $request->hseq;
        $tunj = DB::select(DB::raw(" DELETE FROM st_tt_payroll 
                                      WHERE seq = '$seq'"));
        Alert::success('Penandatanganan Gaji Berhasil dihapus');
        return redirect()->back();
      }

    public function getJkslain(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_asuransi=DB::table('st_asuransi')
      ->select('st_asuransi.*')
      ->get();
      return view ('hrd.setup.jkslain.index',compact('st_asuransi'));
    }

    public function storeJkslain(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $user = Auth::user()->id;
      $tunj = new  st_asuransi;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $tunj->kode = $request->kode;
      $tunj->deskripsi= $request->deskripsi;
      $tunj->nilai_premi = $request->nilai_premi;
      $tunj->entry_user = $user;
      $tunj->entry_date = $date_time;
      $tunj->save();

      Alert::success('JKS Lain Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateJkslain(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_asuransi')
        ->where('kode', $request->hkode)
        ->update([
         'deskripsi' => $request->deskripsi,
         'nilai_premi' => $request->nilai_premi,
      ]);
      Alert::success('JKS Lain Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyJkslain(Request $request)
    {
        $kode = $request->hkode;
        $tunj = DB::select(DB::raw(" DELETE FROM st_asuransi 
                                      WHERE kode = '$kode'"));
        Alert::success('JKS Lain Berhasil dihapus');
        return redirect()->back();
    }

    public function getBpjs(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_pot_bpjs=DB::table('st_pot_bpjs')
      ->select('st_pot_bpjs.*')
      ->get();
      return view ('hrd.setup.bpjs.index',compact('st_pot_bpjs'));
    }

    public function storeBpjs(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $tunj = new  st_pot_bpjs;
      $tunj->kode_bpjs = $request->kode_bpjs;
      $tunj->deskripsi= $request->deskripsi;
      $tunj->prosen_potongan= $request->prosen_potongan;
      $tunj->prosen_pend_pph= $request->prosen_pend_pph;
      $tunj->id_jht= $request->id_jht;
      $tunj->id_jkk= $request->id_jkk;
      $tunj->id_jkm= $request->id_jkm;
      $tunj->id_jp= $request->id_jp;
      $tunj->id_bpjs_kes= $request->id_bpjs_kes;
      $tunj->id_jht_prshn= $request->id_jht_prshn;
      $tunj->id_jkk_prshn= $request->id_jkk_prshn;
      $tunj->id_jkm_prshn= $request->id_jkm_prshn;
      $tunj->id_jp_prshn= $request->id_jp_prshn;
      $tunj->id_bpjs_kes_prshn= $request->id_bpjs_kes_prshn;
      $tunj->save();

      Alert::success('BPJS Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateBpjs(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_pot_bpjs')
        ->where('kode_bpjs', $request->hkode_bpjs)
        ->update([
         'deskripsi' => $request->deskripsi,
         'prosen_potongan' => $request->prosen_potongan,
         'prosen_pend_pph' => $request->prosen_pend_pph,
         'id_jht' => $request->id_jht,
         'id_jkk' => $request->id_jkk,
         'id_jkm' => $request->id_jkm,
         'id_jp' => $request->id_jp,
         'id_bpjs_kes' => $request->id_bpjs_kes,
         'id_jht_prshn' => $request->id_jht_prshn,
         'id_jkk_prshn' => $request->id_jkk_prshn,
         'id_jkm_prshn' => $request->id_jkm_prshn,
         'id_jp_prshn' => $request->id_jp_prshn,
         'id_bpjs_kes_prshn' => $request->id_bpjs_kes_prshn,
      ]);
      Alert::success('BPJS Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyBpjs(Request $request)
    {
        $kode_bpjs = $request->hkode_bpjs;
        $tunj = DB::select(DB::raw(" DELETE FROM st_pot_bpjs 
                                      WHERE kode_bpjs = '$kode_bpjs'"));
        Alert::success('JKS Lain Berhasil dihapus');
        return redirect()->back();
    }

    public function getTunjangankjk(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $md_client = md_client::all();
      $st_tunj_kjk=DB::table('st_tunj_kjk')
      ->join('md_client', 'st_tunj_kjk.kode_lokasi', '=', 'id')
      ->select('st_tunj_kjk.*','md_client.nama_client')
      ->get();
      return view ('hrd.setup.tunjangankjk.index',compact('st_tunj_kjk','md_client'));
    }

    public function storeTunjangankjk(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $tunj = new  st_tunj_kjk;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $tunj->tanggal = $request->tanggal;
      $tunj->kode_lokasi = $request->kode_lokasi;
      $tunj->kjk = $request->kjk;
      $tunj->kjk_paket = $request->kjk_paket;
      $tunj->entry_user = $request->user;
      $tunj->entry_date = $request->date_time;
      $tunj->save();

      Alert::success('Tunjangan kjk Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateTunjangankjk(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_tunj_kjk')
        ->where('tanggal', $request->htanggal)
        ->where('kode_lokasi', $request->hkode_lokasi)
        ->where('kjk', $request->hkjk)
        ->where('kjk_paket', $request->hkjk_paket)
        ->update([
         'tanggal' => $request->tanggal,
         'kode_lokasi' => $request->kode_lokasi,
         'kjk' => $request->kjk,
         'kjk_paket' => $request->kjk_paket,
      ]);
      Alert::success('Tunjangan KJK Berhasil diupdate');
      return redirect()->back();

    }

    public function destroyTunjangankjk(Request $request)
    {
        $tanggal = $request->htanggal;
        $kode_lokasi = $request->hkode_lokasi;
        $kjk = $request->hkjk;
        $kjk_paket = $request->hkjk_paket;
        $tunj = DB::select(DB::raw(" DELETE FROM st_tunj_kjk 
                                      WHERE tanggal = '$tanggal'
                                      AND kode_lokasi = '$kode_lokasi'
                                      And kjk = '$kjk'
                                      AND kjk_paket = '$kjk_paket' "));
        Alert::success('Tunjnagan kjk Berhasil dihapus');
        return redirect()->back();
    }

    public function getTunjanganotn(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $md_client = md_client::all();
      $st_tunj_otn=DB::table('st_tunj_otn')
      ->join('md_client', 'st_tunj_otn.kode_lokasi', '=', 'id')
      ->select('st_tunj_otn.*','md_client.nama_client')
      ->get();
      return view ('hrd.setup.tunjanganotn.index',compact('st_tunj_otn','md_client'));
    }

    public function storeTunjanganotn(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $tunj = new  st_tunj_otn;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $tunj->tanggal = $request->tanggal;
      $tunj->kode_lokasi = $request->kode_lokasi;
      $tunj->otn = $request->otn;
      $tunj->otn_paket = $request->otn_paket;
      $tunj->entry_user = $request->user;
      $tunj->entry_date = $request->date_time;
      $tunj->save();

      Alert::success('Tunjangan OTN Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateTunjanganotn(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_tunj_otn')
        ->where('tanggal', $request->htanggal)
        ->where('kode_lokasi', $request->hkode_lokasi)
        ->where('otn', $request->hotn)
        ->where('otn_paket', $request->hotn_paket)
        ->update([
         'tanggal' => $request->tanggal,
         'kode_lokasi' => $request->kode_lokasi,
         'otn' => $request->otn,
         'otn_paket' => $request->otn_paket,
      ]);
      Alert::success('Tunjangan KJK Berhasil diupdate');
      return redirect()->back();

    }

    public function destroyTunjanganotn(Request $request)
    {
        $tanggal = $request->htanggal;
        $kode_lokasi = $request->hkode_lokasi;
        $otn = $request->hotn;
        $otn_paket = $request->hotn_paket;
        $tunj = DB::select(DB::raw(" DELETE FROM st_tunj_otn 
                                      WHERE tanggal = '$tanggal'
                                      AND kode_lokasi = '$kode_lokasi'
                                      AND otn = '$otn'
                                      AND otn_paket = '$otn_paket' "));
        Alert::success('Tunjangan OTN Berhasil dihapus');
        return redirect()->back();
    }

    public function getTunjanganotr(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $md_client = md_client::all();
      $st_tunj_otr=DB::table('st_tunj_otr')
      ->join('md_client', 'st_tunj_otr.kode_lokasi', '=', 'id')
      ->select('st_tunj_otr.*','md_client.nama_client')
      ->get();
      return view ('hrd.setup.tunjanganotr.index',compact('st_tunj_otr','md_client'));
    }

    public function storeTunjanganotr(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $tunj = new  st_tunj_otr;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $tunj->tanggal = $request->tanggal;
      $tunj->kode_lokasi = $request->kode_lokasi;
      $tunj->otr = $request->otr;
      $tunj->entry_user = $request->user;
      $tunj->entry_date = $request->date_time;
      $tunj->save();

      Alert::success('Tunjangan OTR Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateTunjanganotr(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_tunj_otr')
        ->where('tanggal', $request->htanggal)
        ->where('kode_lokasi', $request->hkode_lokasi)
        ->where('otr', $request->hotr)
        ->update([
         'tanggal' => $request->tanggal,
         'kode_lokasi' => $request->kode_lokasi,
         'otr' => $request->otr,
      ]);
      Alert::success('Tunjangan OTR Berhasil diupdate');
      return redirect()->back();

    }

    public function destroyTunjanganotr(Request $request)
    {
        $tanggal = $request->htanggal;
        $kode_lokasi = $request->hkode_lokasi;
        $otr = $request->hotr;
        $tunj = DB::select(DB::raw(" DELETE FROM st_tunj_otr 
                                      WHERE tanggal = '$tanggal'
                                      AND kode_lokasi = '$kode_lokasi'
                                      AND otr = '$otr' "));
        Alert::success('Tunjangan OTR Berhasil dihapus');
        return redirect()->back();
    }

    public function getTunjanganshiftmalam(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $md_client = md_client::all();
      $st_tunj_shift_malam = DB::table('st_tunj_shift_malam')
      ->join('md_client', 'st_tunj_shift_malam.kode_lokasi', '=', 'id')
      ->select('st_tunj_shift_malam.*', 'md_client.nama_client')
      ->get();
      return view ('hrd.setup.tunjanganshiftmalam.index',compact('st_tunj_shift_malam','md_client'));
    }

    public function storeTunjanganshiftmalam(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $tunj = new  st_tunj_shift_malam;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $tunj->tanggal = $request->tanggal;
      $tunj->kode_lokasi = $request->kode_lokasi;
      $tunj->shift_malam = $request->shift_malam;
      $tunj->entry_user = $request->user;
      $tunj->entry_date = $request->date_time;
      $tunj->save();

      Alert::success('Tunjangan Shift Malam Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateTunjanganshiftmalam(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_tunj_shift_malam')
        ->where('tanggal', $request->htanggal)
        ->where('kode_lokasi', $request->hkode_lokasi)
        ->where('shift_malam', $request->hshift_malam)
        ->update([
         'tanggal' => $request->tanggal,
         'kode_lokasi' => $request->kode_lokasi,
         'shift_malam' => $request->shift_malam,
      ]);
      Alert::success('Tunjangan Shift Malam Berhasil diupdate');
      return redirect()->back();

    }

    public function destroyTunjanganshiftmalam(Request $request)
    {
        $tanggal = $request->htanggal;
        $kode_lokasi = $request->hkode_lokasi;
        $shift_malam = $request->hshift_malam;
        $tunj = DB::select(DB::raw(" DELETE FROM st_tunj_shift_malam 
                                      WHERE tanggal = '$tanggal'
                                      AND kode_lokasi = '$kode_lokasi'
                                      AND shift_malam = '$shift_malam' "));
        Alert::success('Tunjangan Shift Malam Berhasil dihapus');
        return redirect()->back();
    }

    public function getKjkperjabatansite(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $md_client = md_client::all();
      $st_jabatan = st_jabatan::all();
      $st_kjk_jab = DB::table('st_kjk_jab')
      ->join('md_client', 'st_kjk_jab.kode_lokasi', '=', 'id')
      ->join('st_jabatan', 'st_kjk_jab.kode_jab', '=', 'kode')
      ->select('st_kjk_jab.*', 'md_client.nama_client', 'st_jabatan.deskripsi')
      ->get();
      return view ('hrd.setup.kjkperjabatansite.index',compact('st_kjk_jab','md_client','st_jabatan'));
    }

    public function storeKjkperjabatansite(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $tunj = new  st_kjk_jab;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $tunj->kode_jab = $request->kode_jab;
      $tunj->kode_lokasi = $request->kode_lokasi;
      $tunj->id_kjk_paket = $request->id_kjk_paket;
      $tunj->save();

      Alert::success('Tunjangan KJK Perjabatan Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateKjkperjabatansite(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_kjk_jab')
        ->where('kode_jab', $request->hkode_jab)
        ->update([
         'kode_lokasi' => $request->kode_lokasi,
         'id_kjk_paket' => $request->id_kjk_paket,
      ]);
      Alert::success('Tunjangan KJK perjabatan Berhasil diupdate');
      return redirect()->back();

    }

    public function destroyKjkperjabatansite(Request $request)
    {
        $kode_jab = $request->hkode_jab;
        $tunj = DB::select(DB::raw(" DELETE FROM st_kjk_jab 
                                      WHERE kode_jab = '$kode_jab' "));
        Alert::success('Tunjangan KJK Perjabatan Site Berhasil dihapus');
        return redirect()->back();
    }

    public function getOtnperjabatansite(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $md_client = md_client::all();
      $st_jabatan = st_jabatan::all();
      $st_otn_jab = DB::table('st_otn_jab')
      ->join('md_client', 'st_otn_jab.kode_lokasi', '=', 'id')
      ->join('st_jabatan', 'st_otn_jab.kode_jab', '=', 'kode')
      ->select('st_otn_jab.*', 'md_client.nama_client', 'st_jabatan.deskripsi')
      ->get();
      return view ('hrd.setup.otnperjabatansite.index',compact('st_otn_jab','md_client','st_jabatan'));
    }

    public function storeOtnperjabatansite(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $tunj = new st_otn_jab;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $tunj->kode_jab = $request->kode_jab;
      $tunj->kode_lokasi = $request->kode_lokasi;
      $tunj->id_otn_paket = $request->id_otn_paket;
      $tunj->save();

      Alert::success('Tunjangan OTN Perjabatan Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateOtnperjabatansite(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_otn_jab')
        ->where('kode_jab', $request->hkode_jab)
        ->where('kode_lokasi', $request->hkode_lokasi)
        ->update([
         'id_otn_paket' => $request->id_otn_paket,
      ]);
      Alert::success('Tunjangan OTN perjabatan Berhasil diupdate');
      return redirect()->back();

    }

    public function destroyOtnperjabatansite(Request $request)
    {
        $kode_jab = $request->hkode_jab;
        $kode_lokasi = $request->hkode_lokasi;
        $tunj = DB::select(DB::raw(" DELETE FROM st_otn_jab 
                                      WHERE kode_jab = '$kode_jab'
                                      AND kode_lokasi = '$kode_lokasi' "));
        Alert::success('Tunjangan OTN Perjabatan Site Berhasil dihapus');
        return redirect()->back();
    }

    public function getMasakerjatahunansite(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $md_client = md_client::all();
      $md_karyawan = md_karyawan::all();
      $st_tunj_masa_kerja_thn = DB::table('st_tunj_masa_kerja_thn')
      ->join('md_client', 'st_tunj_masa_kerja_thn.kode_lokasi', '=', 'id')
      ->join('md_karyawan', 'st_tunj_masa_kerja_thn.nik', '=', 'md_karyawan.NIK')
      ->select('st_tunj_masa_kerja_thn.*', 'md_client.nama_client','md_karyawan.nama_lengkap','md_karyawan.NIK','md_karyawan.users_id')
      ->get();
      return view ('hrd.setup.masakerjatahunansite.index',compact('st_tunj_masa_kerja_thn','md_client','md_karyawan'));
    }

    public function storeMasakerjatahunansite(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $tunj = new st_tunj_masa_kerja_thn;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $tunj->tgl_berlaku = $request->tgl_berlaku;
      $tunj->kode_lokasi = $request->kode_lokasi;
      $tunj->nik = $request->nik;
      $tunj->nilai = $request->nilai;
      $tunj->entry_user = $user;
      $tunj->entry_date = $date_time;
      $tunj->save();

      Alert::success('Tunjangan Masa Kerja Tahunan Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateMasakerjatahunansite(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_tunj_masa_kerja_thn')
        ->where('tgl_berlaku', $request->htgl_berlaku)
        ->where('kode_lokasi', $request->hkode_lokasi)
        ->where('nik', $request->hnik)
        ->update([
         'nilai' => $request->nilai,
      ]);
      Alert::success('Tunjangan Masa Kerja Tahunan Berhasil diupdate');
      return redirect()->back();

    }

    public function destroyMasakerjatahunansite(Request $request)
    {
        $tgl_berlaku = $request->htgl_berlaku;
        $kode_lokasi = $request->hkode_lokasi;
        $nik = $request->hnik;
        $tunj = DB::select(DB::raw(" DELETE FROM st_tunj_masa_kerja_thn 
                                      WHERE tgl_berlaku = '$tgl_berlaku'
                                      AND kode_lokasi = '$kode_lokasi'
                                      AND nik = '$nik' "));
        Alert::success('Tunjangan Masa Kerja Tahunan Site Berhasil dihapus');
        return redirect()->back();
    }

    public function getKelompoktanggalpenggajian(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_klp_gaji = DB::table('st_klp_gaji')
      ->select('st_klp_gaji.*')
      ->get();
      return view ('hrd.setup.kelompoktanggalpenggajian.index',compact('st_klp_gaji'));
    }

    public function storeKelompoktanggalpenggajian(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $detek_kode = DB::table('st_klp_gaji')->select('st_klp_gaji.*')->get();
        $data_kode = array();
        $max = 0 ;
        foreach ($detek_kode as $r) {
            $data_kode[] = (array) $r;
        }
        $i=0;
        foreach ($data_kode as $key) {
            if($key['kode'] > $max){
                $max = $key['kode'];
            }
            $i++;
        }
      $tunj = new st_klp_gaji;
      $tunj->kode = $max+1;
      $tunj->deskripsi = $request->deskripsi;
      $tunj->save();

      Alert::success('Kelompok tanggal Penggajian Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateKelompoktanggalpenggajian(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_klp_gaji')
        ->where('kode', $request->hkode)
        ->update([
         'deskripsi' => $request->deskripsi,
      ]);
      Alert::success('Kelompok Tanggal Penggajian Berhasil diupdate');
      return redirect()->back();

    }

    public function destroyKelompoktanggalpenggajian(Request $request)
    {
        $kode = $request->hkode;
        $tunj = DB::select(DB::raw(" DELETE FROM st_klp_gaji 
                                      WHERE kode = '$kode' "));
        Alert::success('Kelompok Tanggal Penggajian Berhasil dihapus');
        return redirect()->back();
    }

    public function getCreatorpaymentrequisition(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $users = DB::select(DB::raw("SELECT roles from users group by roles"));
      $st_payment_req_pengajuan = DB::table('st_payment_req_pengajuan')
      ->select('st_payment_req_pengajuan.*')
      ->get();
      return view ('hrd.setup.creatorpaymentrequisition.index',compact('st_payment_req_pengajuan','users'));
    }

    public function storeCreatorpaymentrequisition(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $tunj = new st_payment_req_pengajuan;
      $tunj->user_login = $request->user_login;
      $tunj->nama = $request->nama;
      $tunj->save();

      Alert::success('creatorpaymentrequisition Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateCreatorpaymentrequisition(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_payment_req_pengajuan')
        ->where('seq', $request->hseq)
        ->where('user_login', $request->huser_login)
        ->update([
         'nama' => $request->nama,
      ]);
      Alert::success('creatorpaymentrequisition Berhasil diupdate');
      return redirect()->back();

    }

    public function destroyCreatorpaymentrequisition(Request $request)
    {
        $seq = $request->hseq;
        $user_login = $request->huser_login;
        $tunj = DB::select(DB::raw(" DELETE FROM st_payment_req_pengajuan 
                                      WHERE seq = '$seq'
                                      AND user_login = '$user_login' "));
        Alert::success('creatorpaymentrequisition Berhasil dihapus');
        return redirect()->back();
    }

    public function getTtpaymentrequisition(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_payment_req_sn_pic = DB::table('st_payment_req_sn_pic')
      ->select('st_payment_req_sn_pic.*')
      ->get();
      return view ('hrd.setup.ttpaymentrequisition.index',compact('st_payment_req_sn_pic'));
    }

    public function getHarilibur(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_Kategoripekerjaan = st_Kategoripekerjaan::all();
      $hari_libur = DB::table('hari_libur')
      ->join('st_kategoripekerjaan','hari_libur.kategori','=','st_kategoripekerjaan.id')
      ->select('hari_libur.*','st_kategoripekerjaan.deskripsi AS deskripsipekerjaan')
      ->get();
      return view ('hrd.setup.harilibur.index',compact('hari_libur','st_Kategoripekerjaan'));
    }

    public function storeHarilibur(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $att = new hari_libur;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->tanggal = $request->tanggal;
      $att->deskripsi = $request->deskripsi;
      $att->kategori = $request->kategori;
      $att->created_at = $date_time;
      $att->updated_at = $date_time;
      $att->deleted_at = $date_time;
      $att->save();

      Alert::success('Hari Libur Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateHarilibur(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      DB::table('hari_libur')
        ->where('id', $request->hid)
        ->update([
         'tanggal' => $request->tanggal,
         'deskripsi' => $request->deskripsi,
         'kategori' => $request->kategori,
         'updated_at' => $date_time,
      ]);
      Alert::success('Hari libur Berhasil diupdate');
      return redirect()->back();

    }

    public function destroyHarilibur(Request $request)
    {
        $id = $request->hid;
        $att= DB::select(DB::raw(" DELETE FROM hari_libur 
                                      WHERE id = '$id' "));
        Alert::success('Hari Libur Berhasil dihapus');
        return redirect()->back();
    }

    public function getKalenderlibur(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $hari_libur = hari_libur::all();
      $md_kalender_libur = DB::table('md_kalender_libur')
      ->join('hari_libur','md_kalender_libur.kode_hari_libur','=','hari_libur.id')
      ->select('md_kalender_libur.*','hari_libur.deskripsi AS deskripsi_hari_libur')
      ->get();
      return view ('hrd.setup.kalenderlibur.index',compact('md_kalender_libur','hari_libur'));
    }

    public function storeKalenderlibur(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $att = new md_kalender_libur;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->tgl_libur = $request->tgl_libur;
      $att->kode_hari_libur = $request->kode_hari_libur;
      $att->keterangan = $request->keterangan;
      $att->entry_user = $user;
      $att->entry_date = $date_time;
      $att->id_lebaran = $request->id_lebaran;
      $att->id_cutibersama = $request->id_cutibersama;
      $att->save();

      Alert::success('Kalender Libur Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateKalenderlibur(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('md_kalender_libur')
        ->where('tgl_libur', $request->htgl_libur)
        ->update([
         'kode_hari_libur' => $request->kode_hari_libur,
         'keterangan' => $request->keterangan,
         'id_lebaran' => $request->id_lebaran,
         'id_cutibersama' => $request->id_cutibersama,
      ]);
      Alert::success('Kalender Libur Berhasil diupdate');
      return redirect()->back();

    }

    public function destroyKalenderlibur(Request $request)
    {
        $tgl_libur = $request->htgl_libur;
        $att= DB::select(DB::raw(" DELETE FROM md_kalender_libur 
                                      WHERE tgl_libur = '$tgl_libur' "));
        Alert::success('Kalender Libur Berhasil dihapus');
        return redirect()->back();
    }

    public function getHarilembur(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_hari_lembur = DB::table('st_hari_lembur')
      ->select('st_hari_lembur.*')
      ->get();
      return view ('hrd.setup.harilembur.index',compact('st_hari_lembur'));
    }

    public function storeHarilembur(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $att = new st_hari_lembur;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->kode = $request->kode;
      $att->deskripsi = $request->deskripsi;
      $att->entry_user = $user;
      $att->entry_date = $date_time;
      $att->save();

      Alert::success('hari Lembur Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateHarilembur(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_hari_lembur')
        ->where('kode', $request->hkode)
        ->update([
         'deskripsi' => $request->deskripsi,
      ]);
      Alert::success('hari Lembur Berhasil diupdate');
      return redirect()->back();

    }

    public function destroyHarilembur(Request $request)
    {
        $kode = $request->hkode;
        $att= DB::select(DB::raw(" DELETE FROM st_hari_lembur 
                                      WHERE kode = '$kode' "));
        Alert::success('Hari Lembur Berhasil dihapus');
        return redirect()->back();
    }

    public function getWaktulembur(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_waktu_lembur = DB::table('st_waktu_lembur')
      ->select('st_waktu_lembur.*')
      ->get();
      return view ('hrd.setup.waktulembur.index',compact('st_waktu_lembur'));
    }

    public function storeWaktulembur(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $att = new st_waktu_lembur;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->kode = $request->kode;
      $att->deskripsi = $request->deskripsi;
      $att->entry_user = $user;
      $att->entry_date = $date_time;
      $att->save();

      Alert::success('Waktu Lembur Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateWaktulembur(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_waktu_lembur')
        ->where('kode', $request->hkode)
        ->update([
         'deskripsi' => $request->deskripsi,
      ]);
      Alert::success('Waktu Lembur Berhasil diupdate');
      return redirect()->back();

    }

    public function destroyWaktulembur(Request $request)
    {
        $kode = $request->hkode;
        $att= DB::select(DB::raw(" DELETE FROM st_waktu_lembur 
                                      WHERE kode = '$kode' "));
        Alert::success('Waktu Lembur Berhasil dihapus');
        return redirect()->back();
    }

    public function getSanksi(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_sanksi = DB::table('st_sanksi')
      ->select('st_sanksi.*')
      ->get();
      return view ('hrd.setup.sanksi.index',compact('st_sanksi'));
    }

    public function storeSanksi(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $att = new st_sanksi;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->kode = $request->kode;
      $att->deskripsi = $request->deskripsi;
      $att->entry_user = $user;
      $att->entry_date = $date_time;
      $att->save();

      Alert::success('Sanksi Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateSanksi(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_sanksi')
        ->where('kode', $request->hkode)
        ->update([
         'deskripsi' => $request->deskripsi,
      ]);
      Alert::success('Sanksi Berhasil diupdate');
      return redirect()->back();

    }

    public function destroySanksi(Request $request)
    {
        $kode = $request->hkode;
        $att= DB::select(DB::raw(" DELETE FROM st_sanksi 
                                      WHERE kode = '$kode' "));
        Alert::success('Waktu Lembur Berhasil dihapus');
        return redirect()->back();
    }

    public function getAlasanabsen(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_alasan_absen = DB::table('st_alasan_absen')
      ->select('st_alasan_absen.*')
      ->get();
      return view ('hrd.setup.alasanabsen.index',compact('st_alasan_absen'));
    }

    public function storeAlasanabsen(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $att = new st_alasan_absen;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->kode = $request->kode;
      $att->deskripsi = $request->deskripsi;
      $att->lama_cuti = $request->lama_cuti;
      $att->pot_absen = $request->pot_absen;
      $att->pot_bonus = $request->pot_bonus;
      $att->prosen_pot = $request->prosen_pot;
      $att->id_cutithn = $request->id_cutithn;
      $att->id_cuti = $request->id_cuti;
      $att->id_sakit = $request->id_sakit;
      $att->id_ijin = $request->id_ijin;
      $att->id_alpha = $request->id_alpha;
      $att->entry_user = $user;
      $att->entry_date = $date_time;
      $att->save();

      Alert::success('Alasan Absen Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateAlasanabsen(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('st_alasan_absen')
        ->where('kode', $request->hkode)
        ->update([
          'deskripsi' => $request->deskripsi,
          'lama_cuti' => $request->lama_cuti,
          'pot_absen' => $request->pot_absen,
          'pot_bonus' => $request->pot_bonus,
          'id_present' => $request->id_present,
          'prosen_pot' => $request->prosen_pot,
          'id_cutithn' => $request->id_cutithn,
          'id_cuti' => $request->id_cuti,
          'id_sakit' => $request->id_sakit,
          'id_ijin' => $request->id_ijin,
          'id_alpha' => $request->id_alpha,
      ]);
      Alert::success('Alasan Absen Berhasil diupdate');
      return redirect()->back();

    }

    public function destroyAlasanabsen(Request $request)
    {
        $kode = $request->hkode;
        $att= DB::select(DB::raw(" DELETE FROM st_alasan_absen 
                                      WHERE kode = '$kode' "));
        Alert::success('Alasan Absen Berhasil dihapus');
        return redirect()->back();
    }

    public function getSchclass(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $schclass = DB::table('schclass')
      ->select('schclass.*')
      ->get();
      return view ('hrd.setup.schclass.index',compact('schclass'));
    }

    public function storeSchclass(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $sjam=$request->starth; $smenit=$request->startm; $sdetik=$request->starts;
      $ejam=$request->endh; $emenit=$request->endm; $edetik=$request->ends;

      $starttime = $sjam.":".$smenit.":".$sdetik;
      $endtime = $ejam.":".$emenit.":".$edetik;
      $att = new schclass;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->kode = $request->kode;
      $att->deskripsi = $request->deskripsi;
      $att->stime = $starttime;
      $att->etime = $endtime;
      $att->mnt_lembur_wajib = $request->mnt_lembur_wajib;
      $att->mnt_lembur_spl = $request->mnt_lembur_spl;
      $att->id_shift_malam = $request->id_shift_malam;
      $att->id_lbr_wajib = $request->id_lbr_wajib;
      $att->tol_jam = $request->tol_jam;
      $att->save();

      Alert::success('Schclass Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateSchclass(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $sjam=$request->starth; $smenit=$request->startm; $sdetik=$request->starts;
      $ejam=$request->endh; $emenit=$request->endm; $edetik=$request->ends;

      $starttime = $sjam.":".$smenit.":".$sdetik;
      $endtime = $ejam.":".$emenit.":".$edetik;
      DB::table('schclass')
        ->where('kode', $request->hkode)
        ->update([
          'deskripsi' => $request->deskripsi,
          'stime' => $starttime,
          'etime' => $endtime,
          'mnt_lembur_wajib' => $request->mnt_lembur_wajib,
          'mnt_lembur_spl' => $request->mnt_lembur_spl,
          'id_shift_malam' => $request->id_shift_malam,
          'id_lbr_wajib' => $request->id_lbr_wajib,
          'tol_jam' => $request->tol_jam,
      ]);
      Alert::success('Schclass Berhasil diupdate');
      return redirect()->back();

    }

    public function destroySchclass(Request $request)
    {
        $kode = $request->hkode;
        $att= DB::select(DB::raw(" DELETE FROM schclass 
                                      WHERE kode = '$kode' "));
        Alert::success('Schclass Berhasil dihapus');
        return redirect()->back();
    }

    public function getSchpola(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $schpola = DB::table('schpola')
      ->select('schpola.*')
      ->get();
      return view ('hrd.setup.schpola.index',compact('schpola'));
    }

    public function storeSchpola(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new schpola;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->polaid = $request->polaid;
      $att->polaname = $request->polaname;
      $att->polapattern = $request->polapattern;
      $att->entry_date = $date_time;
      $att->entry_user = $user;
      $att->save();

      Alert::success('SchPola Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateSchpola(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      DB::table('schpola')
        ->where('polaid', $request->hpolaid)
        ->update([
          'polaname' => $request->polaname,
          'polapattern' => $request->polapattern,
      ]);
      Alert::success('Schpola Berhasil diupdate');
      return redirect()->back();

    }

    public function destroySchpola(Request $request)
    {
        $polaid = $request->hpolaid;
        $att= DB::select(DB::raw(" DELETE FROM schpola 
                                      WHERE polaid = '$polaid' "));
        Alert::success('Schpolaid Berhasil dihapus');
        return redirect()->back();
    }

    public function getJadwalgroup(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $schclass = schclass::all();
      $st_group = st_group::all();
      $st_jadwalgroup = DB::table('st_jadwalgroup')
      ->join('schclass','st_jadwalgroup.schid','=','schclass.kode')
      ->join('st_group','st_jadwalgroup.kode_group','=','st_group.kode')
      ->select('st_jadwalgroup.*','schclass.deskripsi AS des_schclass','st_group.deskripsi AS des_st_group')
      ->get();
      return view ('hrd.setup.jadwalgroup.index',compact('st_jadwalgroup','schclass','st_group'));
    }

    public function storeJadwalgroup(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new st_jadwalgroup;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->kode_group = $request->kode_group;
      $att->schid = $request->schid;
      $att->save();

      Alert::success('Jadwal Group Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateJadwalgroup(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      return redirect()->back();

    }

    public function destroyjadwalgroup(Request $request)
    {
        $kode_group = $request->hkode_group;
        $schid = $request->hschid;
        $att= DB::select(DB::raw(" DELETE FROM st_jadwalgroup 
                                      WHERE kode_group = '$kode_group'
                                      AND schid = '$schid' "));
        Alert::success('Jadwal group Berhasil dihapus');
        return redirect()->back();
    }

    public function getJadwalpersonal(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $md_karyawan = md_karyawan::all();
      $schclass = schclass::all();
      $st_jadwalpersonal = DB::table('st_jadwalpersonal')
      ->join('md_karyawan','st_jadwalpersonal.nik','=','md_karyawan.NIK')
      ->join('schclass','st_jadwalpersonal.schid','=','schclass.kode')
      ->select('st_jadwalpersonal.*','schclass.deskripsi AS des_schclass','md_karyawan.nama_lengkap AS nama_lengkap')
      ->get();
      return view ('hrd.setup.jadwalpersonal.index',compact('st_jadwalpersonal','schclass','md_karyawan'));
    }

    public function storeJadwalpersonal(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new st_jadwalpersonal;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->nik = $request->nik;
      $att->schid = $request->schid;
      $att->save();

      Alert::success('Jadwal personal Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateJadwalpersonal(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      return redirect()->back();

    }

    public function destroyJadwalpersonal(Request $request)
    {
        $nik = $request->hnik;
        $schid = $request->hschid;
        $att= DB::select(DB::raw(" DELETE FROM st_jadwalpersonal 
                                      WHERE nik = '$nik'
                                      AND schid = '$schid' "));
        Alert::success('Jadwal Personal Berhasil dihapus');
        return redirect()->back();
    }

    public function getPeriode(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_periode = DB::table('st_periode')
      ->select('st_periode.*')
      ->get();
      return view ('hrd.setup.periode.index',compact('st_periode'));
    }

    public function storePeriode(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $stahun=$request->stahun; $sbulan=$request->sbulan; $shari=$request->shari;
      $etahun=$request->etahun; $ebulan=$request->ebulan; $ehari=$request->ehari;

      $starttahun = $stahun."-".$sbulan."-".$shari;
      $endtahun = $etahun."-".$ebulan."-".$ehari;
      $att = new st_periode;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->sd_prd = $starttahun;
      $att->ed_prd = $endtahun;
      $att->save();

      Alert::success('Periode Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updatePeriode(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      return redirect()->back();

    }

    public function destroyPeriode(Request $request)
    {
        $sd_prd = $request->hsd_prd;
        $ed_prd = $request->hed_prd;
        $att= DB::select(DB::raw(" DELETE FROM st_periode 
                                      WHERE sd_prd = '$sd_prd'
                                      AND ed_prd = '$ed_prd' "));
        Alert::success('periode Berhasil dihapus');
        return redirect()->back();
    }

    public function getSisacuti(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $md_karyawan = md_karyawan::all();
      $tbl_sisacuti = DB::table('tbl_sisacuti')
      ->join('md_karyawan','tbl_sisacuti.nik', '=','md_karyawan.NIK')
      ->select('tbl_sisacuti.*','md_karyawan.nama_lengkap')
      ->get();
      return view ('hrd.setup.sisacuti.index',compact('tbl_sisacuti','md_karyawan'));
    }

    public function storeSisacuti(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new tbl_sisacuti;
      $att->nik = $request->nik;
      $att->sisa_cuti = $request->sisa_cuti;
      $att->save();

      Alert::success('Sisa Cuti Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateSisacuti(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      DB::table('tbl_sisacuti')
      ->where('seq', $request->hseq)
      ->update([
        'sisa_cuti' => $request->sisa_cuti,
      ]);
      Alert::success('Sisa Cuti Berhasil diupdate');
      return redirect()->back();
    }

    public function destroySisacuti(Request $request)
    {
        $seq = $request->hseq;
        $att= DB::select(DB::raw(" DELETE FROM tbl_sisacuti 
                                      WHERE seq = '$seq'"));
        Alert::success('Sisa Cuti Berhasil dihapus');
        return redirect()->back();
    }

    public function getDepartemen(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $departemen = DB::table('departemen')
      ->select('departemen.*')
      ->get();
      return view ('hrd.setup.departemen.index',compact('departemen'));
    }

    public function storeDepartemen(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new departemen;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->nama = $request->nama;
      $att->created_at = $date_time;
      $att->updated_at = $date_time;
      $att->deleted_at = $date_time;
      $att->save();

      Alert::success('Departemen Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateDepartemen(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      DB::table('departemen')
      ->where('id', $request->hid)
      ->update([
        'nama' => $request->nama,
        'updated_at' => $date_time,
      ]);
      Alert::success('Departemen Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyDepartemen(Request $request)
    {
        $id = $request->hid;
        $att= DB::select(DB::raw(" DELETE FROM departemen 
                                      WHERE id = '$id'"));
        Alert::success('Departemen Berhasil dihapus');
        return redirect()->back();
    }

    public function getGroup(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $groups = DB::table('groups')
      ->select('groups.*')
      ->get();
      return view ('hrd.setup.group.index',compact('groups'));
    }

    public function storeGroup(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new groups;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->nama = $request->nama;
      $att->deskripsi = $request->deskripsi;
      $att->created_at = $date_time;
      $att->updated_at = $date_time;
      $att->deleted_at = $date_time;
      $att->save();

      Alert::success('Group Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateGroup(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      DB::table('groups')
      ->where('id', $request->hid)
      ->update([
        'nama' => $request->nama,
        'deskripsi' => $request->deskripsi,
        'updated_at' => $date_time,
      ]);
      Alert::success('Groups Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyGroup(Request $request)
    {
        $id = $request->hid;
        $att= DB::select(DB::raw(" DELETE FROM groups 
                                      WHERE id = '$id'"));
        Alert::success('group Berhasil dihapus');
        return redirect()->back();
    }


    public function getShift(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_shift = DB::table('st_shift')
      ->select('st_shift.*')
      ->get();
      return view ('hrd.setup.shift.index',compact('st_shift'));
    }

    public function storeShift(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new st_shift;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->kode = $request->kode;
      $att->deskripsi = $request->deskripsi;
      $att->entry_user = $user;
      $att->entry_date = $date_time;
      $att->save();

      Alert::success('Shift Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateShift(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      DB::table('st_shift')
      ->where('kode', $request->hkode)
      ->update([
        'deskripsi' => $request->deskripsi,
      ]);
      Alert::success('Shift Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyShift(Request $request)
    {
        $kode = $request->hkode;
        $att= DB::select(DB::raw(" DELETE FROM st_shift 
                                      WHERE kode = '$kode'"));
        Alert::success('Shift Berhasil dihapus');
        return redirect()->back();
    }

    public function getStaff(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_staff = DB::table('st_staff')
      ->select('st_staff.*')
      ->get();
      return view ('hrd.setup.staff.index',compact('st_staff'));
    }

    public function storeStaff(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new st_staff;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->kode = $request->kode;
      $att->deskripsi = $request->deskripsi;
      $att->entry_user = $user;
      $att->entry_date = $date_time;
      $att->save();

      Alert::success('Staff Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateStaff(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      DB::table('st_staff')
      ->where('kode', $request->hkode)
      ->update([
        'deskripsi' => $request->deskripsi,
      ]);
      Alert::success('Staff Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyStaff(Request $request)
    {
        $kode = $request->hkode;
        $att= DB::select(DB::raw(" DELETE FROM st_staff 
                                      WHERE kode = '$kode'"));
        Alert::success('Staff Berhasil dihapus');
        return redirect()->back();
    }

    public function getGolongan(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_golongan = DB::table('st_golongan')
      ->select('st_golongan.*')
      ->get();
      return view ('hrd.setup.golongan.index',compact('st_golongan'));
    }

    public function storeGolongan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new st_golongan;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->kode = $request->kode;
      $att->deskripsi = $request->deskripsi;
      $att->entry_user = $user;
      $att->entry_date = $date_time;
      $att->save();

      Alert::success('Golongan Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateGolongan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      DB::table('st_golongan')
      ->where('kode', $request->hkode)
      ->update([
        'deskripsi' => $request->deskripsi,
      ]);
      Alert::success('Golongan Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyGolongan(Request $request)
    {
        $kode = $request->hkode;
        $att= DB::select(DB::raw(" DELETE FROM st_golongan 
                                      WHERE kode = '$kode'"));
        Alert::success('Golongan Berhasil dihapus');
        return redirect()->back();
    }

    public function getJabatan(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_jabatan = DB::table('st_jabatan')
      ->select('st_jabatan.*')
      ->get();
      return view ('hrd.setup.jabatan.index',compact('st_jabatan'));
    }

    public function storeJabatan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new st_jabatan;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->kode = $request->kode;
      $att->Deskripsi = $request->deskripsi;
      $att->entry_user = $user;
      $att->entry_date = $date_time;
      $att->save();

      Alert::success('Jabatan Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateJabatan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      DB::table('st_jabatan')
      ->where('kode', $request->hkode)
      ->update([
        'Deskripsi' => $request->deskripsi,
      ]);
      Alert::success('Jabatan Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyJabatan(Request $request)
    {
        $kode = $request->hkode;
        $att= DB::select(DB::raw(" DELETE FROM st_jabatan 
                                      WHERE kode = '$kode'"));
        Alert::success('Jabatan Berhasil dihapus');
        return redirect()->back();
    }

    public function getLeveljabatan(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_level_jabatan = DB::table('st_level_jabatan')
      ->select('st_level_jabatan.*')
      ->get();
      return view ('hrd.setup.leveljabatan.index',compact('st_level_jabatan'));
    }

    public function storeLeveljabatan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new st_level_jabatan;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->kode = $request->kode;
      $att->deskripsi = $request->deskripsi;
      $att->edit_user = $user;
      $att->edit_date = $date_time;
      $att->save();

      Alert::success('Level Jabatan Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateLeveljabatan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      DB::table('st_level_jabatan')
      ->where('kode', $request->hkode)
      ->update([
        'deskripsi' => $request->deskripsi,
      ]);
      Alert::success('Level Jabatan Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyLeveljabatan(Request $request)
    {
        $kode = $request->hkode;
        $att= DB::select(DB::raw(" DELETE FROM st_level_jabatan 
                                      WHERE kode = '$kode'"));
        Alert::success('Level Jabatan Berhasil dihapus');
        return redirect()->back();
    }

    public function getStatuskaryawan(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_status_karyawan = DB::table('st_status_karyawan')
      ->select('st_status_karyawan.*')
      ->get();
      return view ('hrd.setup.statuskaryawan.index',compact('st_status_karyawan'));
    }

    public function storeStatuskaryawan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new st_status_karyawan;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->kode = $request->kode;
      $att->deskripsi = $request->deskripsi;
      $att->entry_user = $user;
      $att->entry_date = $date_time;
      $att->save();

      Alert::success('Status Karyawan Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateStatuskaryawan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      DB::table('st_status_karyawan')
      ->where('kode', $request->hkode)
      ->update([
        'deskripsi' => $request->deskripsi,
      ]);
      Alert::success('Status Karyawan Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyStatuskaryawan(Request $request)
    {
        $kode = $request->hkode;
        $att= DB::select(DB::raw(" DELETE FROM st_status_karyawan 
                                      WHERE kode = '$kode'"));
        Alert::success('Status Karyawan Berhasil dihapus');
        return redirect()->back();
    }

    public function getAlasanresign(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_alasan_resign = DB::table('st_alasan_resign')
      ->select('st_alasan_resign.*')
      ->get();
      return view ('hrd.setup.alasanresign.index',compact('st_alasan_resign'));
    }

    public function storeAlasanresign(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new st_alasan_resign;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->kode = $request->kode;
      $att->deskripsi = $request->deskripsi;
      $att->entry_user = $user;
      $att->entry_date = $date_time;
      $att->save();

      Alert::success('Alasan Resign Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateAlasanresign(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      DB::table('st_alasan_resign')
      ->where('kode', $request->hkode)
      ->update([
        'deskripsi' => $request->deskripsi,
      ]);
      Alert::success('Alasan Resign Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyAlasanresign(Request $request)
    {
        $kode = $request->hkode;
        $att= DB::select(DB::raw(" DELETE FROM st_alasan_resign 
                                      WHERE kode = '$kode'"));
        Alert::success('Alasan resign Berhasil dihapus');
        return redirect()->back();
    }

    public function getSpesialisasipekerjaan(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_spesialisasipekerjaan = DB::table('st_spesialisasipekerjaan')
      ->select('st_spesialisasipekerjaan.*')
      ->get();
      return view ('hrd.setup.spesialisasipekerjaan.index',compact('st_spesialisasipekerjaan'));
    }

    public function storeSpesialisasipekerjaan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new st_Spesialisasipekerjaan;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->spesial = $request->spesial;
      $att->save();

      Alert::success('Spesialisasi Pekerjaan Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateSpesialisasipekerjaan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      DB::table('st_spesialisasipekerjaan')
      ->where('id', $request->hid)
      ->update([
        'spesial' => $request->spesial,
      ]);
      Alert::success('Spesialisasi Pekerjaan Berhasil diupdate');
      return redirect()->back();
    }

    public function destroySpesialisasipekerjaan(Request $request)
    {
        $id = $request->hid;
        $att= DB::select(DB::raw(" DELETE FROM st_spesialisasipekerjaan 
                                      WHERE id = '$id'"));
        Alert::success('Spesialisasi Pekerjaan Berhasil dihapus');
        return redirect()->back();
    }

    public function getLokasipekerjaan(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $md_client = DB::table('md_client')
      ->select('md_client.*')
      ->get();
      return view ('hrd.setup.lokasipekerjaan.index',compact('md_client'));
    }

    public function storeLokasipekerjaan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new md_client;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->nama_client = $request->nama_client;
      $att->alamat = $request->alamat;
      $att->no_hp = $request->no_hp;
      $att->save();

      Alert::success('Lokasi Pekerjaan Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateLokasipekerjaan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      DB::table('md_client')
      ->where('id', $request->hid)
      ->update([
        'nama_client' => $request->nama_client,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp,
      ]);
      Alert::success('Lokasi Pekerjaan Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyLokasipekerjaan(Request $request)
    {
        $id = $request->hid;
        $att= DB::select(DB::raw(" DELETE FROM md_client 
                                      WHERE id = '$id'"));
        Alert::success('Lokasi Pekerjaan Berhasil dihapus');
        return redirect()->back();
    }

    public function getJenispekerjaan(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_pekerjaan = DB::table('st_pekerjaan')
      ->select('st_pekerjaan.*')
      ->get();
      return view ('hrd.setup.jenispekerjaan.index',compact('st_pekerjaan'));
    }

    public function storeJenispekerjaan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new st_pekerjaan;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->kode = $request->kode;
      $att->deskripsi = $request->deskripsi;
      $att->entry_user = $user;
      $att->entry_date = $date_time;
      $att->save();

      Alert::success('Jenis Pekerjaan Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updateJenispekerjaan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      DB::table('st_pekerjaan')
      ->where('kode', $request->hkode)
      ->update([
        'deskripsi' => $request->deskripsi,
      ]);
      Alert::success('Jenis Pekerjaan Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyJenispekerjaan(Request $request)
    {
        $kode = $request->hkode;
        $att= DB::select(DB::raw(" DELETE FROM st_pekerjaan 
                                      WHERE kode = '$kode'"));
        Alert::success('Jenis Pekerjaan Berhasil dihapus');
        return redirect()->back();
    }

    public function getPelatihan(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_pelatihan = DB::table('st_pelatihan')
      ->select('st_pelatihan.*')
      ->get();
      return view ('hrd.setup.pelatihan.index',compact('st_pelatihan'));
    }

    public function storePelatihan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      $att = new st_pelatihan;
      $user = Auth::user()->id;
      $date_time = Carbon::now()->toDateTimeString();
      $date_time = date('Y-m-d H:i:s', strtotime("$date_time"));
      $att->kode = $request->kode;
      $att->deskripsi = $request->deskripsi;
      $att->entry_user = $user;
      $att->entry_date = $date_time;
      $att->save();

      Alert::success('Pelatihan Berhasil ditambahkan');
      return redirect()->back();
    }

    public function updatePelatihan(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }

      DB::table('st_pelatihan')
      ->where('kode', $request->hkode)
      ->update([
        'deskripsi' => $request->deskripsi,
      ]);
      Alert::success('pelatihan Berhasil diupdate');
      return redirect()->back();
    }

    public function destroyPelatihan(Request $request)
    {
        $kode = $request->hkode;
        $att= DB::select(DB::raw(" DELETE FROM st_pelatihan 
                                      WHERE kode = '$kode'"));
        Alert::success('Pelatihan Berhasil dihapus');
        return redirect()->back();
    }

    public function getMutasi(){
        $hist_lokasi=DB::table('tbl_lokasi_kerja_hist')
            ->join('md_jobseeker', 'tbl_lokasi_kerja_hist.md_jobseeker_id', '=', 'md_jobseeker.users_id')
            ->join('md_client', 'tbl_lokasi_kerja_hist.md_client_id', '=', 'md_client.id')
            ->join('st_jabatan', 'tbl_lokasi_kerja_hist.jabatan_baru', '=', 'st_jabatan.kode')
            ->select('tbl_lokasi_kerja_hist.*','md_jobseeker.nik','md_jobseeker.nama_lengkap','md_client.nama_client','st_jabatan.Deskripsi')
            ->get();
        //dd($hist_lokasi);
        return view('hrd.sdm.mutasi.index',compact('hist_lokasi'));
    }
    public function createMutasi(){
        $now = \Carbon\Carbon::now()->format('Y-m-d');
        $md_client=md_client::all();
        $st_kabkota = st_Kabkota::all();
        $md_jobseeker = md_jobseeker::all();
        $st_jabatan = st_jabatan::all();
        return view ('hrd.sdm.mutasi.create',compact('md_client','st_kabkota','md_jobseeker','st_jabatan'));
    }
    public function storeMutasi(Request $request){
        if(!Gate::allows('isHRD')){
            abort(404,"Maaf Anda tidak memiliki akses");
        }
        $tbl_lokasi_kerja_hist= new tbl_lokasi_kerja_hist;
        $tbl_lokasi_kerja_hist->no_spt = $request->no_spt;
        $tbl_lokasi_kerja_hist->md_jobseeker_id = $request->md_jobseeker_id;
        $tbl_lokasi_kerja_hist->md_client_id = $request->md_client_id;
        $tbl_lokasi_kerja_hist->keterangan = $request->keterangan;
        $tbl_lokasi_kerja_hist->jabatan_baru = $request->jabatan_baru;
        $tbl_lokasi_kerja_hist->jenis_kontrak = $request->jenis_kontrak;
        $tbl_lokasi_kerja_hist->tgl_mulai_kontrak = Carbon::parse($request['tgl_mulai_kontrak'])->format('Y-m-d');
        $tbl_lokasi_kerja_hist->tgl_akhir_kontrak =Carbon::parse($request['tgl_akhir_kontrak'])->format('Y-m-d');
        $tbl_lokasi_kerja_hist->save();
        Alert::success('Karyawan berhasil dimutasikan');
        return redirect('hrd/sdm/mutasi')->with('successMsg','Slider Successfully Saved');
    }



}
