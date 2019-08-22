<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_otn_jab extends Model
{
  protected $table = 'st_otn_jab';
  protected $primaryKey = '';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode_jab','kode_lokasi','id_otn_paket'
    ];

}