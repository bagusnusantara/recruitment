<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schclass extends Model
{
  protected $table = 'schclass';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode','deskripsi','stime','etime','mnt_lembur_wajib','mnt_lembur_spl',
      'id_shift_malam','id_lbr_wajib','warna_panel','id','koef_lbr','entry_user','entry_date','tol_jam'
    ];

}