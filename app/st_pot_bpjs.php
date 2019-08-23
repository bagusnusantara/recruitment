<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_pot_bpjs extends Model
{
  protected $table = 'st_pot_bpjs';
  protected $primaryKey = 'kode_bpjs';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'kode_bpjs','prosen_potongan','prosen_pen_pph','id_jht','id_jkk','id_jkm','id_jp','id_bpjs_kes',
      'id_jht_prshn','id_jkk_prshn','id_jkm_prshn','id_jp_prnhn','id_bpjs_kes_prshn'
  ];

}