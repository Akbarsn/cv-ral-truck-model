<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    protected $table = 'penerimaan';
    protected $primaryKey = 'ID_penerimaan';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
