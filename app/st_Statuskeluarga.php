<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_Statuskeluarga extends Model
{
  protected $table = 'st_statuskeluarga';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;

  protected $guarded = ['id','status'];
  
}
