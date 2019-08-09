<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\st_jobseeker_riwayatpenyakit;
use App\st_jobseeker_pengalamanorganisasi;
use App\st_jobseeker_pengalamankerja;
use App\st_jobseeker_pendidikanformal;
use App\st_jobseeker_pendidikaninformal;
use App\st_jobseeker_pendidikanbahasa;
use App\st_jobseeker_minatkerja;

class md_jobseeker extends Model
{
  protected $table = 'md_jobseeker';
  protected $primaryKey = 'users_id';
  public $timestamps = false;
  public $incrementing = false;
  protected $guarded = ['users_id'];

  protected $identitas = ["NIK","nama_lengkap","nama_panggilan","tempat_lahir","tanggal_lahir",
                          "jenis_kelamin","agama","alamat_ktp","alamat_domisili","negara_ktp","negara_domisili",
                          "provinsi_ktp","provinsi_domisili","kabkota_ktp","kabkota_domisili","kecamatan_ktp","kecamatan_domisili",
                          "kode_pos_ktp","kode_pos_domisili","email","notelp","nohp","kategori_idcard","nomor_idcard"];

  public function setStatusIdentitas(){
    $data = $this->attributes;
    $count = 0;
    foreach ($this->identitas as $key) {
      $count += is_null($data[$key])?0:1;
    }
    if($count){
      $this->update(["status_data_identitas"=>$count]);
      return true;
    }else{
      $this->update(["status_data_identitas"=>0]);
      return false;
    }
  }

  public function setStatusKeluarga(){
    if($this->attributs["status_keluarga"]){
      $this->update(["status_data_keluarga"=>1]);
      return true;
    }else{
      $this->update(["status_data_keluarga"=>0]);
      return false;
    }
  }

  public function setStatusPendidikan(){
    try {
      $formal   = st_jobseeker_pendidikanformal::where("user_id",$this->attributes['users_id'])->count();
      $informal = st_jobseeker_pendidikaninformal::where("user_id",$this->attributes['users_id'])->count();
      $bahasa   = st_jobseeker_pendidikanbahasa::where("user_id",$this->attributes['users_id'])->count();
      dump('udah');
      if($formal>=1){
        $this->update(["status_data_pendidikan"=>1]);
        return true;
      }else{
        return false;
      }
    } catch (\Throwable $th) {
      dump($th);
    }
    
  }

  public function md_lowongan_pekerjaan(){
      return $this->hasMany('App\md_lowongan_pekerjaan');
  }

  public function st_idcard(){
    return $this->hasOne('App\st_IdCard','id','kategori_idcard');
  }

  public function st_negara(){
    return $this->hasOne('App\st_Negara','id','negara');
  }

  public function st_provinsi(){
    return $this->hasOne('App\st_Provinsi','id','provinsi');
  }

  public function st_kabkota(){
    return $this->hasOne('App\st_Kabkota','id','kabkota');
  }

  public function st_kecamatan(){
    return $this->hasOne('App\st_Kecamatan','id','kecamatan');
  }

}
