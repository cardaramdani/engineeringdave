<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genset extends Model
{
    
protected $table ='gensets';
    protected $fillable =[
    						'teknisi', 'shift', 'spv',
                            'leveloli', 'batterymodul', 'modemodulpkg', 'levelradiator', 'odometer', 'airfilter', 'pompasolar', 'valvesolar', 'voltageaccu', 'voltagecharger', 'amf', 'emergencybutton', 'bodygenset', 'catatan'
                        ];
}
