<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_alasan_absen extends Model
{
  protected $table = 'st_alasan_absen';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode','deskripsi','lama_cuti','pot_absen','pot_bonus','id_present','prosen_pot','entry_user'
      ,'entry_date','id_cutithn','id_cuti','id_sakit','id_ijin','id_alpha'
    ];

}