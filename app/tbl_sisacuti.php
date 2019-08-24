<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_sisacuti extends Model
{
  protected $table = 'tbl_sisacuti';
  protected $primaryKey = 'seq';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'seq','nik','tanggal','sisacuti'
    ];

}