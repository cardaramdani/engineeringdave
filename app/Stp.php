<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stp extends Model
{
    protected $table = 'stp';
    protected $fillable =['shift', 'teknisi', 'spv', 'basketscreen','selektorblower', 'statusblower1','pressureblower1','statusblower2', 'pressureblower2','kondisiblower1','kondisiblower2','selektorequalizing','statusequalizing1','statusequalizing2','levelequalizing','kondisiequalizing','selektoreffluent','statuseffluent1','statuseffluent2','leveleffluent','kondisieffluent','selektorfilter','statusfilter1','statusfilter2','intakefan','exhaustfan','standmeter','temuan'];
}
