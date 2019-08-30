<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
  protected $table = 'absensi';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = true;

  protected $fillable = [
      'id','karyawan_id','periode_awal','periode_akhir','status'
      ,'created_at','created_by','updated_at','updated_by','deleted_at','deleted_by'
    ];

}