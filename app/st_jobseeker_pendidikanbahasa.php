<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_jobseeker_pendidikanbahasa extends Model
{
    protected $table = 'st_jobseeker_pendidikanbahasa';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'user_id','bahasa','kemampuan_lisan','kemampuan_tertulis'
      ];
  
    public function user_id(){
      return $this->hasOne('App\md_jobseeker','id','users_id');
    }

    public function st_bahasa(){
      return $this->hasOne('App\st_Bahasa','id','bahasa');
    }

    public function st_kemampuanlisan(){
      return $this->hasOne('App\st_Kemampuan','id','kemampuan_lisan');
    }

    public function st_kemampuantertulis(){
      return $this->hasOne('App\st_Kemampuan','id','kemampuan_tertulis');
    }
    
}
