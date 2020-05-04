<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekapitulasiPenilaian extends Model
{
    protected $table = 'rekapitulasi_penilaian';
    protected $primaryKey = 'ID_rekapitulasi';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
