<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_periode extends Model
{
  protected $table = 'st_periode';
  protected $primaryKey = ['sd_prd','ed_prd'];
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'sd_prd','ed_prd'
    ];

}