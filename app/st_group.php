<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_group extends Model
{
  protected $table = 'st_group';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode','deskripsi'
    ];

}