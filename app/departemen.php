<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departemen extends Model
{
  protected $table = 'departemen';
  protected $primaryKey = 'id';
  public $timestamps = false;
  public $incrementing = false;

  protected $fillable = [
      'id','nama','created_at','updated_at'
    ];

}