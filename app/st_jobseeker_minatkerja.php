<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_jobseeker_minatkerja extends Model
{
    protected $table = 'st_jobseeker_minatkerja';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
      'user_id','organisasi','tanggal_mulai','tanggal_akhir','tempat','posisi','keterangan'
      ];

}
