<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_jabatan extends Model
{
  protected $table = 'st_jabatan';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode','deskripsi','entry_date','entry_user'
    ];

}