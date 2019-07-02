<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_Agama extends Model
{
  protected $table = 'st_agama';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;

  protected $guarded = ['id','agama'];
  
}
