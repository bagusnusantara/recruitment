<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_Kategoripekerjaan extends Model
{
  protected $table = 'st_kategori_pekerjaan';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [

    ];

}
