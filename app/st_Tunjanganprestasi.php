<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_Tunjanganprestasi extends Model
{
  protected $table = 'st_tunj_prestasi';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode','deskripsi','tunj_prestasi','entry_date','entry_user'
    ];

}