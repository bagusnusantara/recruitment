<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class md_jobseeker extends Model
{
  protected $table = 'md_jobseeker';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;
  protected $fillable = [
      'users_id','nama_lengkap','nama_panggilan','tempat_lahir',
    ];

  public function md_lowongan_pekerjaan()
    {
      return $this->hasMany('App\md_lowongan_pekerjaan');
    }

}
