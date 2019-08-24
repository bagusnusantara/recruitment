<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_shift extends Model
{
  protected $table = 'st_shift';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode','deskripsi','entry_user','entry_date'
    ];

}