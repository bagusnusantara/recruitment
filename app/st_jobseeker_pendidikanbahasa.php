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
        'user_id','bahasa','kemampuan_lisan','kemampuan_bahasa'
      ];
  
    public function user_id(){
      return $this->hasOne('App\md_jobseeker','id','users_id');
    }

    public function st_bahasa(){
      return $this->hasOne('App\st_bahasa','bahasa','id');
    }

    public function st_kemampuanlisan(){
      return $this->hasOne('App\st_Kemampuan','kemampuan_lisan','id');
    }

    public function st_kemampuantertulis(){
      return $this->hasOne('App\st_Kemampuan','kemampuan_tertulis','id');
    }
    
}
