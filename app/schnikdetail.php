<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schnikdetail extends Model
{
  protected $table = 'schnikdetail';
  protected $primaryKey = 'seq';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'seq','users_id','nik','nama','sdate','edate','stime','etime','schid','polaid'
    ];

}
