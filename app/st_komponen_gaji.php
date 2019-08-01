<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_komponen_gaji extends Model
{
  protected $table = 'st_komponen_gaji';
  protected $primaryKey = 'kode_komponen_gaji';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode_komponen_gaji','desc_komponen_gaji','label_slip_gaji','id_pendapatan'
    ];

}
