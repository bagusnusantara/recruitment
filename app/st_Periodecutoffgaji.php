<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_Periodecutoffgaji extends Model
{
  protected $table = 'st_cutoff_gaji';
  protected $primaryKey = ['bln','thn'];
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'bln','thn','sd_prd','ed_prd','entry_date','entry_user'
    ];

}