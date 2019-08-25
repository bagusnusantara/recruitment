<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_pekerjaan extends Model
{
  protected $table = 'st_pekerjaan';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode','deskripsi','entry_date','entry_user'
    ];

}