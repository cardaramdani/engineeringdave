<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firepump extends Model
{
    protected $table='firepumps';
	protected $fillable =[
 'spv', 'shift', 'teknisi',
 'statusjockey', 'selectorjockey', 'valvejockey', 'onpressurejockey', 'ofpressurejockey', 'bodyjockey',

 'statuselectric', 'selectorelectric', 'valveelectric', 'onpressureelectric', 'ofpressureelectric', 'bodyelectric',

 'statusdiesel', 'selectordiesel', 'valvediesel', 'onpressurediesel', 'ofpressurediesel', 'batterycharger', 'leveloli', 'levelsolar', 'levelradiator', 'aktualpressureheader', 'temuan'
	];
}
