<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_jobseeker_riwayatpenyakit extends Model
{
    protected $table = 'st_jobseeker_riwayatpenyakit';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'user_id','nama_penyakit','tanggal_mulai','tanggal_akhir','pengaruh'
      ];
  
    public function st_idcard(){
      return $this->hasOne('App\st_IdCard','id','kategori_idcard');
    }
    
}
