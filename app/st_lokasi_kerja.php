<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_lokasi_kerja extends Model
{
  protected $table = 'st_lokasi_kerja';
  protected $primaryKey = 'kode';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode','deskripsi','klp_gaji','sd_int_cutoff','ed_int_cutoff','jeda_bln_gaji',
      'entry_user','entry_date','alamat','kota','area','id_work_pay','tgl_cut_off_mutasi',
      'unit_bisnis','id_aktif'
    ];

}