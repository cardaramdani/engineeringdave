<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boosterpump extends Model
{
    protected $table='boosterpump';
	protected $fillable =[
				'teknisi', 'shift', 'spv', 'valvehisappompa1','valvehisappompa2','valvesuplypompa1', 'valvesuplypompa2', 'selektorpompa1','selektorpompa2', 'kondisi'

 					];
}
