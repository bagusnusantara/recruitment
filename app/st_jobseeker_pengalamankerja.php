<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_jobseeker_pengalamankerja extends Model
{
    protected $table = 'st_jobseeker_pengalamankerja';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
      'user_id','bisnisperusahaan','lokasikerja','tanggal_mulai','tanggal_akhir','posisi','gaji_terakhir','jurusan','alasan_pindah','keterangan'
      ];
  
    public function user_id(){
      return $this->hasOne('App\md_jobseeker','id','users_id');
    }

    public function st_bisnisperusahaan(){
      return $this->hasOne('App\Bisnisperusahaan','id','bisnisperusahaan');
    }
    
}
