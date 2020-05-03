<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCalon extends Model
{
    protected $table = 'user_calon';
    protected $primaryKey = 'ID_calon';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
}
