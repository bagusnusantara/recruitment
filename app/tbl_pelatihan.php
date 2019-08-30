<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_pelatihan extends Model
{
  protected $table = 'tbl_pelatihan';
  protected $primaryKey = ['nik','sdate','edate','kode_pelatihan'];
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'nik','sdate','edate','kode_pelatihan','target_pelatihan','realisasi_hasil','nilai_pelatihan'
      ,'vendor_pelatihan','biaya_pelatihan','entry_user','entry_date'
    ];

}