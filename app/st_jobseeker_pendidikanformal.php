<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_jobseeker_pendidikanformal extends Model
{
    protected $table = 'st_jobseeker_pendidikanformal';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
      'user_id','tingkat_pendidikan','tanggal_mulai','tanggal_akhir','institusi','tempat','fakultas','jurusan','IPK','keterangan'
      ];
  
    public function user_id(){
      return $this->hasOne('App\md_jobseeker','id','users_id');
    }
    
}
