<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kwhmeterunit extends Model
{
    protected $table ='kwhmeterunits';


 protected $fillable =['Unit', 'teknisi', 'NoSeri','Daya', 'StandAwal', 'GambarAwal', 'StandAkhir', 'GambarAkhir', 'TotalPakai', 'TanggalBAST','created_at'];
}
