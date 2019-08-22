<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_tunj_otn extends Model
{
  protected $table = 'st_tunj_otn';
  protected $primaryKey = '';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'tanggal','kode_lokasi','otn','entry_date','entry_user','otn_paket'
    ];

}