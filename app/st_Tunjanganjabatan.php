<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_Tunjanganjabatan extends Model
{
  protected $table = 'st_tunj_jabatan';
  protected $primaryKey = ['kode_jabatan','kode_site'];
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode_jabatan','kode_site','tunj_jabatan','entry_user','entry_date','tgl_berlaku'
    ];

}