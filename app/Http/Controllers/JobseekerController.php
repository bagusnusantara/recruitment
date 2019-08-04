<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use Alert;
//---=main data
use App\md_lowongan_pekerjaan;
use App\md_jobseeker;
use App\trans_lowongan_pekerjaan;
//---- st
use App\st_Negara;
use App\st_Provinsi;
use App\st_Kabkota;
use App\st_Kecamatan;
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
use App\st_Bahasa;

//--st support md
use App\st_jobseeker_riwayatpenyakit;
use App\st_jobseeker_pengalamanorganisasi;
use App\st_jobseeker_pengalamankerja;
use App\st_jobseeker_pendidikanformal;
use App\st_jobseeker_pendidikaninformal;
use App\st_jobseeker_pendidikanbahasa;
use App\st_jobseeker_minatkerja;

//temporary
use Illuminate\Support\Facades\DB;

class JobseekerController extends Controller
{
    public function getDashboard(){
      if(!Gate::allows('isJobseeker')){
          return redirect()->route("PublicLowongan");
      }
      $statusUser  = DB::table('md_jobseeker')->select('status_identitas','status_pendidikan','status_pengalamankerja','status_aktivitas','status_riwayatpenyakit','status_minatkerja')
                    ->where('users_id',\Auth::user()->id)->first();
      if($statusUser->status_identitas==0 ||  $statusUser->status_pendidikan==0 || $statusUser->status_minatkerja==0)
      return redirect()->route('JobseekerDatadiri')->with('alert','Anda belum dapat melihat lowongan !!');

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

    public function showLowonganpublic($id){
      $lowongan = md_lowongan_pekerjaan::find($id);
      return view ('jobseeker.dashboard.showpublic',compact('lowongan'));
    }
    //insert Data diri
    public function insertDataDiri()
    {
      //st_support data
      $st_data = [];
      $st_data['Idcard'] = st_Idcard::all();
      $st_data['TingkatPendidikan'] = st_Tingkatpendidikan::all();
      $st_data['Bahasa'] = st_Bahasa::all();
      $st_data['Kemampuan'] = st_Kemampuan::all();
      $st_data['BisnisPerusahaan'] = st_Bisnisperusahaan::all();
      $st_data['kategoriPekerjaan'] = st_Kategoripekerjaan::all();
      $st_data['SpesialisasiPekerjaan']=st_Spesialisasipekerjaan::all();
      $st_data['LingkunganKerja']= st_Lingkungankerja::all();
      $st_data['LevelJabatan']= st_Leveljabatan::all();
      $st_data['PosisiKerja']= st_Posisikerja::all();
      $st_data['Negara'] = st_Negara::all();
      $st_data['Provinsi'] = st_Provinsi::all();
      $st_data['Kabkota'] = st_Kabkota::all();
      $st_data['Kecamatan'] = st_Kecamatan::all();
      return view('jobseeker.datadiri.insertdatadiri',compact('st_data'));
    }
    //Lamaran Section
    public function showDataDiri(){
      $user_id = \Auth::user()->id;
      $dataUser = md_jobseeker::where('users_id',$user_id)->first();
      
      //st_jobseeker
      $dataUserSt['PendidikanFormal'] = st_jobseeker_pendidikanformal::where('user_id',$user_id)->get();
      $dataUserSt['PendidikanInformal'] = st_jobseeker_pendidikaninformal::where('user_id',$user_id)->get();
      $dataUserSt['PendidikanBahasa'] = st_jobseeker_pendidikanbahasa::where('user_id',$user_id)->get();
      $dataUserSt['RiwayatPenyakit'] = st_jobseeker_riwayatpenyakit::where('user_id',$user_id)->get();
      $dataUserSt['PengalamanOrganisasi'] = st_jobseeker_pengalamanorganisasi::where('user_id',$user_id)->orderBy('tanggal_akhir','asc')->get();
      $dataUserSt['MinatKerja']   = st_jobseeker_minatkerja::where('user_id',$user_id)->get();
      $dataUserSt['RiwayatKerja'] = st_jobseeker_pengalamankerja::where('user_id',$user_id)->orderBy('tanggal_akhir','asc')->get();
      $dataUserSt['Status'] = 
      [
        "identitas"=>$dataUser->status_identitas,
        "pendidikan"=>$dataUser->status_pendidikan,
        "pengalamankerja"=>$dataUser->status_pengalamankerja,
        "minatkerja"=>$dataUser->status_minatkerja,
        "aktivitas"=>$dataUser->aktivitas,
        "riwayatpenyakit"=>$dataUser->riwayatpenyakit,
      ];

      //st_support data
      $st_data = [];
      $st_data['Idcard'] = st_Idcard::all();
      $st_data['TingkatPendidikan'] = st_Tingkatpendidikan::all();
      $st_data['Bahasa'] = st_Bahasa::all();
      $st_data['Kemampuan'] = st_Kemampuan::all();
      $st_data['BisnisPerusahaan'] = st_Bisnisperusahaan::all();
      $st_data['kategoriPekerjaan'] = st_Kategoripekerjaan::all();
      $st_data['SpesialisasiPekerjaan']=st_Spesialisasipekerjaan::all();
      $st_data['LingkunganKerja']= st_Lingkungankerja::all();
      $st_data['LevelJabatan']= st_Leveljabatan::all();
      $st_data['PosisiKerja']= st_Posisikerja::all();
      $st_data['Negara'] = st_Negara::all();
      $st_data['Provinsi'] = st_Provinsi::where('country_id',$dataUser->negara)->get();
      $st_data['Kabkota'] = st_Kabkota::where('province_id',$dataUser->provinsi)->get();
      $st_data['Kecamatan'] = st_Kecamatan::where('regency_id',$dataUser->kabkota)->get();
      return view('jobseeker.datadiri.index',compact('st_data','dataUser','dataUserSt'));
    }

    public function storeDataDiri(Request $request){
      $dataUser = md_jobseeker::find(\Auth::user())->first();
      try {
        $dataUser->update($request->all());
      } catch (\Throwable $th) {
        return response()->json(["success"=>$th]);
      }
      return response()->json(["success"=>"data retraived"]);
    }

    public function storeDataPendidikanFormal(Request $request){
      $pendidikanFormal = st_jobseeker_pendidikanformal::where('user_id',\Auth::user()->id)
                                                         ->where('id',$request->id)->first();
      if($pendidikanFormal==null)
      {
        $request->request->remove('id');
        $request->request->add(['user_id'=>\Auth::user()->id]);
        $request['tanggal_mulai'] = date('Y-01-01',strtotime($request->tahunmulai));
        $request['tanggal_akhir'] = date('Y-12-t',strtotime($request->tahunakhir));
        
        try {
          st_jobseeker_pendidikanformal::create($request->all());
          dump('success');
          return response()->json(['success'=>true]);
        } catch (\Throwable $th) {
          dump($th);
          return response()->json(['success'=>false]);
        }
      }
    }

    public function storeDataPendidikanInformal(Request $request){
      $pendidikanInformal = st_jobseeker_pendidikaninformal::where('user_id',\Auth::user()->id)
                                                         ->where('id',$request->id)->first();
      if($pendidikanInformal==null)
      {
        $request->request->remove('id');
        $request->request->add(['user_id'=>\Auth::user()->id]);
        $request['tanggal_mulai'] = date('Y-m-01',strtotime($request->tanggal_mulai));
        $request['tahggal_akhir'] = date('Y-m-t',strtotime($request->tanggal_akhir));
        
        try {
          st_jobseeker_pendidikaninformal::create($request->all());
          dump('success');
          return response()->json(['success'=>true]);
        } catch (\Throwable $th) {
          dump($th);
          return response()->json(['success'=>false]);
        }
      }
    }

    public function storeDataPendidikanBahasa(Request $request){
      $pendidikanBahasa = st_jobseeker_pendidikanbahasa::where('user_id',\Auth::user()->id)
                                                          ->where('id',$request->id)->first();
      if($pendidikanBahasa==null)
      {
        $request->request->remove('id');
        $request->request->add(['user_id'=>\Auth::user()->id]);
        try {
          st_jobseeker_pendidikanbahasa::create($request->all());
          dump('success');
          return response()->json(['success'=>true]);
        } catch (\Throwable $th) {
          dump($th);
          return response()->json(['success'=>false]);
        }
      }
    }


    public function storeDataPengalamanKerja(Request $request){
      $riwayatKerja = st_jobseeker_pengalamankerja::where('user_id',\Auth::user()->id)
                                                    ->where('id',$request->id)->first();
      if($riwayatKerja==null)
      {
        try {
          $request->request->remove('id');
          $request->request->add(['user_id'=>\Auth::user()->id]);
          $request['tanggal_mulai'] = date('Y-m-01',strtotime($request->tanggal_mulai));
          $request['tanggal_akhir'] = date('Y-m-t',strtotime($request->tanggal_akhir));
          dump("success");
          st_jobseeker_pengalamankerja::create($request->all());
          return response()->json(["success"=>true]);
        } catch (\Throwable $th) {
          return response()->json(["success"=>false]);
        }

      }
    }

    public function storeDataPengalamanOrganisasi(Request $request){
       $pengalamanOrganisasi = st_jobseeker_pengalamanorganisasi:: where('user_id',\Auth::user()->id)
                                                                  ->where('id',$request->id)->first();
      if($pengalamanOrganisasi==null)
      {
        try {
          
          $request->request->remove('id');
          $request->request->add(['user_id'=>\Auth::user()->id]);
          $request['tanggal_mulai'] = date('Y-m-01',strtotime($request->tanggal_mulai));
          $request['tanggal_akhir'] = date('Y-m-t',strtotime($request->tanggal_akhir));
          st_jobseeker_pengalamanorganisasi::create($request->all()); 
          dump("success");
          return response()->json(['success'=>true]);
        } catch (\Throwable $th) {
          return response()->json(['success'=>false]);
        }

      }

    }

    public function storeDataRiwayatPenyakit(Request $request){

      $riwayatPenyakit = st_jobseeker_riwayatpenyakit:: where('user_id',\Auth::user()->id)
                                                        ->where('id',$request->id)->first();
      if($riwayatPenyakit==null)
      {
        $request->request->remove('id');
        $request->request->add(['user_id'=>\Auth::user()->id]);
        try{
          $request['tanggal_mulai'] = date('Y-m-01',strtotime($request->tanggal_mulai));
          $request['tanggal_akhir'] = date('Y-m-t',strtotime($request->tanggal_akhir));
          st_jobseeker_riwayatpenyakit::create($request->all());
          dump($request->aLL());
          dump('success');
          return response()->json(["success"=>true]);
        }catch(\Throwable $Th){
          dump($Th);
          return response()->json(["success"=>false]);
        }
      }

      return response()->json(["success"=>$request->all()]);
    }

    public function storeDataMinat(Request $request){

      $dataMinat = st_jobseeker_minatkerja::where('user_id',\Auth::user()->id)
                                            ->where('id',$request->id)->first();
      if($dataMinat==null)
      {
        try {
          $request->request->remove('id');
          $request->request->add(['user_id'=>\Auth::user()->id]);
          st_jobseeker_minatkerja::create($request->all());
          return response()->json(["success"=>true]); 
        } catch (\Throwable $th) {
          return response()->json(["success"=>false]); 
        }
       }
    }
    //Pelamaran Lowongan
    public function showLowongan($id){
      if(!Gate::allows('isJobseeker')){
          abort(404,"Maaf Anda tidak memiliki akses");
      }
      $lowongan = md_lowongan_pekerjaan::find($id);
      $transLowongan = trans_lowongan_pekerjaan::where('md_lowongan_pekerjaan_id',$id)
                      ->where('users_id',\Auth::user()->id)
                      ->first();
      $status = ($transLowongan==null)?false:true;
      
      //$trans_lowongan = trans_lowongan_pekerjaan::all()->where('md_lowongan_pekerjaan_id',$lowongan->id);
      return view ('jobseeker.dashboard.show',compact('lowongan','id','status'));
    }

    public function subscribeLamaran(Request $request){
      $userId = \Auth::user()->id;
      $status = false;
      $transLowongan = trans_lowongan_pekerjaan::where('md_lowongan_pekerjaan_id',$request->jobid)
                      ->where('users_id',$userId)
                      ->first();

      if($transLowongan!=null){
        $transLowongan->delete();
        $transLowongan->md_lowongan_pekerjaan = $request->jobid;
        $transLowongan->users_id = $userId;
      }
      else{
        $account = new trans_lowongan_pekerjaan;
        $account->users_id = $userId;
        $account->md_lowongan_pekerjaan_id = $request->jobid;
        $account->save();
        $status = true;
      }

      return redirect()->back()->with(compact('status'));
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
