<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_jadwalpersonal extends Model
{
  protected $table = 'st_jadwalpersonal';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'nik','schid'
    ];

}