<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_tunj_kjk extends Model
{
  protected $table = 'st_tunj_kjk';
  protected $primaryKey = '';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'tanggal','kode_lokasi','kjk','kjk_paket','entry_user','entry_date'
    ];

}