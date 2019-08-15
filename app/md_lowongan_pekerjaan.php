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
        'status','st_pengalaman_id','st_nilai_administrasi','st_nilai_interview_walk','st_nilai_psikotes',
        'st_nilai_interview_regular','st_nilai_interview_user',
    ];

    public function md_client()
      {
        return $this->belongsTo('App\md_client', 'id');
      }
      
    public function st_kategoripekerjaan()
    {
      return $this->belongsTo('App\st_kategoripekerjaan', 'st_kategori_pekerjaan_id');
    }

    public function st_spesialisasipekerjaan()
    {
      return $this->belongsTo('App\st_spesialisasipekerjaan', 'st_spesialisasi_pekerjaan_id');
    }
    

}
