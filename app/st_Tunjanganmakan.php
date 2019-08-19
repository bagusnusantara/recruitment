<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_tunjmakan extends Model
{
  protected $table = 'st_tunjmakan';
  protected $primaryKey = 'md_client_id';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'md_client_id','tunj_makan','entry_date','entry_user'
    ];

}