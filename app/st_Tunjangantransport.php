<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_Tunjangantransport extends Model
{
  protected $table = 'st_tunjtransport';
  protected $primaryKey = 'md_client_id';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'md_client_id','tunj_transport','entry_user','entry_date'
    ];

}