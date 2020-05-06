<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoalTKPBA extends Model
{
    protected $table = 'soal_tkpba';
    protected $primaryKey = 'ID_soal';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
