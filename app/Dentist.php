<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dentist extends Model
{
    protected $table="dentists";

    public function clinic(){
        return $this->belongsToMany('App\Clinic', 'clinic_dentist')->withPivot('days','start_time','end_time');
    }
}
