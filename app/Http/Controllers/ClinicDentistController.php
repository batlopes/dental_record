<?php

namespace App\Http\Controllers;

use App\ClinicDentist;
use App\Dentist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\DentistController;
use App\Http\Controllers\ClinicController;

class ClinicDentistController extends Controller
{
    public function store(Request $request){
        $dentist = DentistController::store($request->input('dentistName'));
        $clinic = ClinicController::store($request->input('clinicName'));

        $schedule = new ClinicDentist();
        $schedule->dentist_id = $dentist;
        $schedule->clinic_id = $clinic;
        $schedule->start_time = $request->input('start_time');
        $schedule->end_time = $request->input('end_time');
        $schedule->days = json_encode(array("days" => $request->input("days")));
        $schedule->save();
        return(view('dental-register-success'));
    }
}
