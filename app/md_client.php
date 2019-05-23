<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class md_client extends Model
{
  protected $table = 'md_client';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'nama_client',
    ];
  public function md_lowongan_pekerjaan()
    {
      return $this->hasMany('App\md_lowongan_pekerjaan');
    }
}
