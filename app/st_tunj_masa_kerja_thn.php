<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_tunj_masa_kerja_thn extends Model
{
  protected $table = 'st_tunj_masa_kerja_thn';
  protected $primaryKey = ['tgl_berlaku','kode_lokasi','nik'];
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'tgl_berlaku','kode_lokasi','nik','nilai','entry_date','entry_user'
    ];

}