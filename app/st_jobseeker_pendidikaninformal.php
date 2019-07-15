<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_jobseeker_pendidikaninformal extends Model
{
    protected $table = 'st_jobseeker_pendidikaninformal';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
      'user_id','jenis_pelatihan','tanggal_mulai','tanggal_akhir','tempat','keterangan'
      ];
  
    public function user_id(){
      return $this->hasOne('App\md_jobseeker','id','users_id');
    }
    
}
