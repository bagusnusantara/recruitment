<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_IdCard extends Model
{
  protected $table = 'st_Idcard';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;

  protected $guarded = ['id','kartu'];  
}