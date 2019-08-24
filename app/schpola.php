<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schpola extends Model
{
  protected $table = 'schpola';
  protected $primaryKey = 'polaid';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'polaid','polaname','polapattern','entry_user','entry_date'
    ];

}