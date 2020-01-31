<?php

namespace App\Http\Controllers;

use App\Clinic;
use Illuminate\Http\Request;

class ClinicController extends Controller
{

    static public function store(string $name){
        $c = Clinic::where('name', $name)->get();
        if(count($c)==0) {
            $clinic = new Clinic();
            $clinic->name = $name;
            $clinic->save();
            return $clinic->id;
        } else{
            return $c[0]["id"];
        }

    }
}
