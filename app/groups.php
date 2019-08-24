<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class groups extends Model
{
  protected $table = 'groups';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'id','nama','is_admin','deskripsi','created_at','updated_at','deleted_at'
    ];

}