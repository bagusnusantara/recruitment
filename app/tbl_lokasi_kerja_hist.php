<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_lokasi_kerja_hist extends Model
{
  protected $table = 'tbl_lokasi_kerja_hist';
  protected $primaryKey = 'no_spt';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'no_spt','md_jobseeker_id','tanggal','md_client_id','keterangan','site_lama','jam',
      'entry_user','entry_date','id_approved','approved_date','approved_user','jabatan_lama','jabatan_baru','tgl_mulai_kontrak','tgl_akhir_kontrak',
      'jenis_kontrak'
    ];

}
