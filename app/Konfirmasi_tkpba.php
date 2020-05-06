<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konfirmasi_tkpba extends Model
{
    protected $table = 'konfirmasi_tkpba';
    protected $primaryKey = 'ID_konfirmasi';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
