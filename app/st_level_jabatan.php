<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_level_jabatan extends Model
{
  protected $table = 'st_level_jabatan';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode','deskripsi','entry_user','entry_date'
    ];

}