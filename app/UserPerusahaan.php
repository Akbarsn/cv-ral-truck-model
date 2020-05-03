<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPerusahaan extends Model
{
    protected $table = 'user_perusahaan';
    protected $primaryKey = 'ID_user';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
