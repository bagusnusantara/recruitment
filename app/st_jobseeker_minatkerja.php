<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_jobseeker_minatkerja extends Model
{
    protected $table = 'st_jobseeker_minatkerja';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
      'user_id','negara','provinsi','kabkota','gaji_bulanan','bidang_bisnis','lingkungan_kerja','spesialisasi','posisi_kerja','level_jabatan'
      ];
    public function st_negara(){
      return $this->hasOne('App\st_Negara','id','negara');
    }
  
    public function st_provinsi(){
      return $this->hasOne('App\st_Provinsi','id','provinsi');
    }
  
    public function st_kabkota(){
      return $this->hasOne('App\st_Kabkota','id','kabkota');
    }
    
    public function st_bisnisperusahaan(){
      return $this->hasOne('App\st_Bisnisperusahaan','id','bidang_bisnis');
    }
  
    public function st_lingkungankerja(){
      return $this->hasOne('App\st_Lingkungankerja','id','lingkungan_kerja');
    }
  
    public function st_spesialisasipekerjaan(){
      return $this->hasOne('App\st_Spesialisasipekerjaan','id','spesialisasi');
    }
    public function st_posisikerja(){
      return $this->hasOne('App\st_Posisikerja','id','posisi_kerja');
    }
  
    public function st_leveljabatan(){
      return $this->hasOne('App\st_Leveljabatan','id','level_jabatan');
    }
  

}