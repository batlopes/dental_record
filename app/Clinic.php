<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $table = "clinics";

    public function dentist(){
        return $this->belongsToMany('App\Dentist', 'clinic_dentist')->withPivot('days','start_time','end_time');
    }
}
