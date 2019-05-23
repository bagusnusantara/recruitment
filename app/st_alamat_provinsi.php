<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_alamat_provinsi extends Model
{
  protected $table = 'st_alamat_provinsi';
  protected $primaryKey = 'id_provinsi';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [

    ];
  public function md_lowongan_pekerjaan()
      {
        return $this->hasMany('App\md_lowongan_pekerjaan');
      }
}
