<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_kjk_jab extends Model
{
  protected $table = 'st_kjk_jab';
  protected $primaryKey = '';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode_jab','kode_lokasi','id_kjk_paket'
    ];

}