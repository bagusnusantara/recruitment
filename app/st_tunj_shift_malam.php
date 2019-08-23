<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_tunj_shift_malam extends Model
{
  protected $table = 'st_tunj_shift_malam';
  protected $primaryKey = '';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'tanggal','kode_lokasi','shift_malam','entry_date','entry_user'
    ];

}