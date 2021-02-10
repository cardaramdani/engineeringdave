<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kwhcomersile extends Model
{
    protected $table ='kwhcomersile';


 protected $fillable =['Unit', 'Nama', 'NoSeri','Daya', 'Faktor_kali', 'StandAwal_lwbp','StandAkhir_lwbp','StandAwal_wbp','StandAkhir_wbp', 'GambarAwal_lwbp' , 'GambarAkhir_lwbp', 'GambarAwal_wbp',  'GambarAkhir_wbp', 'total', 'TanggalBAST','created_at'];

    }
