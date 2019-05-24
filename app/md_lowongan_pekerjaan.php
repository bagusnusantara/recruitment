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
        'id','job_tittle','md_client_id','st_spesialisasi_pekerjaan_id','st_kategori_pekerjaan_id','persyaratan',
        'deskripsi_pekerjaan','st_alamat_provinsi_id','st_alamat_kabkota_id','gaji','start_date','end_date','foto',
    ];

    public function md_client()
      {
        return $this->belongsTo('App\md_client', 'id');
      }
    public function st_alamat_kabkota()
      {
        return $this->belongsTo('App\st_alamat_kabkota', 'id_kabkota');
      }
    public function st_alamat_provinsi()
      {
        return $this->belongsTo('App\st_alamat_provinsi', 'id_provinsi');
      }
      public function st_lowongan_gaji()
        {
          return $this->belongsTo('App\st_lowongan_gaji', 'id');
        }

}
