<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_klp_gaji extends Model
{
  protected $table = 'st_klp_gaji';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode','deskripsi',
    ];

}