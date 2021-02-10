<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class watermeterunit extends Model
{


 protected $table = 'water_meter_units';

 protected $fillable =['Unit', 'teknisi', 'NoSeri', 'StandAwal','GambarAwal', 'StandAkhir','GambarAkhir','TotalPakai', 'TanggalBAST','created_at'];
    }
