<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TesTkpba extends Model
{
    protected $table = 'tes_tkpba';
    protected $primaryKey = 'ID_tes';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
