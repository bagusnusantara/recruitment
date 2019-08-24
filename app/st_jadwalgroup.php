<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_jadwalgroup extends Model
{
  protected $table = 'st_jadwalgroup';
  protected $primaryKey = ['kode_group','schid'];
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode_group','schid'
    ];

}