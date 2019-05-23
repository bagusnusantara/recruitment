<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_alamat_kabkota extends Model
{
  protected $table = 'st_alamat_kabkota';
  protected $primaryKey = 'id_kabkota';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [

    ];
  public function md_lowongan_pekerjaan1()
      {
        return $this->hasMany('App\md_lowongan_pekerjaan');
      }
}
