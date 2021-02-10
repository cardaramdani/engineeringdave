<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooftank extends Model
{
    protected $table = 'rooftanks';
   protected $fillable =[ 'nama', 'jadwalpm', 'planpm', 
    'l1', 'l2', 'l3', 'l4', 'l5', 'l6', 'l7', 'l8', 'l9', 'l10', 'l11', 'l12',
    	'l1k1','l2k2','l3k3','l4k4','l5k5','l6k6','l7k7','l8k8','l9k9','l10k10','l11k11','l12k12'
];
}
