<?php

namespace App\Http\Controllers;

use App\Dentist;
use Illuminate\Http\Request;

class DentistController extends Controller
{
    static public function store(string $name){
        $d = Dentist::where('name', $name)->get();
        if(count($d)==0){
            $dentist = new Dentist();
            $dentist->name = $name;
            $dentist->save();
            return $dentist->id;
        } else{
            return $d[0]["id"];
        }
    }
}
