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
use Alert;
use DB;
use App\User;
use Carbon\Carbon;
use Auth;
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
      return redirect()->back();
    }

    public function getTunjanganjabatan(){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $st_tunj_jabatan=DB::table('st_tunj_jabatan')
      ->select('st_tunj_jabatan.*')
      ->get();
      return view ('hrd.setup.tunjanganjabatan.index',compact('st_tunj_jabatan'));
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
      return redirect()->back();
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
      return redirect()->back();
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
      $st_gp_jabatan_site=DB::table('st_gp_jabatan_site')
      ->select('st_gp_jabatan_site.*')
      ->get();
      return view ('hrd.setup.gpjabatansite.index',compact('st_gp_jabatan_site'));
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
      $st_tt_payroll=DB::table('st_tt_payroll')
      ->select('st_tt_payroll.*')
      ->get();
      return view ('hrd.setup.penandatanganangaji.index',compact('st_tt_payroll'));
    }

    public function storePenandatanganangaji(Request $request){
      if(!Gate::allows('isHRD')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $tunj = new  st_tt_payroll;
      $tunj->seq = $request->seq;
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



}
