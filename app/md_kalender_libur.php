<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class md_kalender_libur extends Model
{
  protected $table = 'md_kalender_libur';
  protected $primaryKey = 'tgl_libur';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'tgl_libur','kode_hari_libur','keterangan','entry_user','entry_date','id_lebaran','id_cutibersama'
    ];

}