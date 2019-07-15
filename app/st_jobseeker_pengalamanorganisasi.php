<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_jobseeker_pengalamanorganisasi extends Model
{
    protected $table = 'st_jobseeker_pengalamanorganisasi';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
      'user_id','organisasi','tanggal_mulai','tanggal_akhir','tempat','posisi','keterangan'
      ];

}
