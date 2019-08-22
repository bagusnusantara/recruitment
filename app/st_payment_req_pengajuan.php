<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_payment_req_pengajuan extends Model
{
  protected $table = 'st_payment_req_pengajuan';
  protected $primaryKey = 'user_login';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'user_login','nama'
    ];

}