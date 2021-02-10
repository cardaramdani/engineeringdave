<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Amr extends Model
{
    protected $table = 'amrs';
    //$total = ['wbp'+'lwbp'];
    protected $fillable =['shift', 'namateknisi', 'cosp', 'lwbp', 'total', 'wbp', 'kvarh', 'penalty', 'created_at'];
    
}

