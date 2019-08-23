<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class st_payment_req_sn_pic extends Model
{
  protected $table = 'st_payment_req_sn_pic';
  protected $primaryKey = ['tgl','user_login'];
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'tgl','pengajuan_login','pengajuan_nama','spv_login','spv_nama','divhead_login','divhead_nama','finance_login'
      ,'finance_nama','director_login','director_nama','entry_date','entry_user'
    ];

}