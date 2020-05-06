<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilTkpba extends Model
{
    protected $table = 'hasil_tkpba';
    protected $primaryKey = 'ID_hasil';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
