<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hari_libur extends Model
{
  protected $table = 'hari_libur';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'id','tanggal','deskripsi','kategori','created_at','updated_at'
    ];

}