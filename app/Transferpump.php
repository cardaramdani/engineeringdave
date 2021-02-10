<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transferpump extends Model
{
    protected $table ='transferpumps';

 protected $fillable =['valve_tfa','status_tfa' ,'valve_tfb','status_tfb', 'valve_tfc','status_tfc', 'valve_tfd','status_tfd' , 'kondisi', 'nama', 'shift', 'namaspv' ];
}
