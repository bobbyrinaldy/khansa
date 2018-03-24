<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Gaji extends Model
{
  use SoftDeletes;

  protected $dates = ['deleted_at'];

    public function pegawai()
    {
        return $this->belongsTo('App\Model\Pegawai','pegawai_id');
    }
}
