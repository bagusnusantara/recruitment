<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_tt_payroll extends Model
{
  protected $table = 'st_tt_payroll';
  protected $primaryKey = 'seq';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'seq','nama','jabatan'
    ];

}