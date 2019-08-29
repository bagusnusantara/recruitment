<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuti extends Model
{
  protected $table = 'cuti';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = true;

  protected $fillable = [
      'id','karyawan_id','tanggal_awal','tanggal_akhir','keterangan','status','notes'
      ,'created_at','created_by','updated_at','updated_by','deleted_at','deleted_by'
    ];

}