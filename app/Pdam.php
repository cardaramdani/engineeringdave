<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdam extends Model
{
    protected $table = 'pdams';
    protected $fillable =[ 'nama', 'shift', 'stand' ];
}
