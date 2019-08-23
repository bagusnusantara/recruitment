<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_sanksi extends Model
{
  protected $table = 'st_sanksi';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode','deskripsi','entry_date','entry_user'
    ];

}