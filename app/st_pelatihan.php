<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_pelatihan extends Model
{
  protected $table = 'st_pelatihan';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode','deskripsi','entry_date','entry_user'
    ];

}