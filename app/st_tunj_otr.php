<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_tunj_otr extends Model
{
  protected $table = 'st_tunj_otr';
  protected $primaryKey = '';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'tanggal','kode_lokasi','otr','entry_date','entry_user'
    ];

}