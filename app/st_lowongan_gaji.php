<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_lowongan_gaji extends Model
{
  protected $table = 'st_lowongan_gaji';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'id','deskripsi',
    ];
    public function md_lowongan_pekerjaan()
      {
        return $this->hasMany('App\md_lowongan_pekerjaan');
      }

}
