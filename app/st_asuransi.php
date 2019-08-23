<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_asuransi extends Model
{
  protected $table = 'st_asuransi';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'id','deskripsi','nilai_premi','entry_date','entry_user'
    ];

}