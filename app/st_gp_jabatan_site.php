<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_gp_jabatan_site extends Model
{
  protected $table = 'st_gp_jabatan_site';
  protected $primaryKey = ['tgl_berlaku','kode_lokasi', 'kode_jabatan'];
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'tgl_berlaku','kode_lokasi','kode_jabatan','nilai','entry_user','entry_date'
    ];

}