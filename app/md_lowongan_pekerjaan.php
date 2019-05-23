<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class md_lowongan_pekerjaan extends Model
{
  protected $table = 'md_lowongan_pekerjaan';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [

    ];

  public function md_client()
    {
      return $this->belongsTo('App\md_client', 'id');
    }

}
