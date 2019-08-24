<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_alasan_resign extends Model
{
  protected $table = 'st_alasan_resign';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode','deskripsi','entry_user','entry_date'
    ];

}