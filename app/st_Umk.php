<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_Umk extends Model
{
  protected $table = 'st_umk';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'id','tanggal','md_client_id','umk','umk_bpjs_sehat'
    ];

}