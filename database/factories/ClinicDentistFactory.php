<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\ClinicDentist::class, function (Faker $faker) {
    $dentist_ids = \App\Dentist::get(['id']);
    $dentist = $faker->randomElement($dentist_ids);
    $clinic_ids = \App\Clinic::get(["id"]);
    $clinic = $faker->randomElement($clinic_ids);
    $days = $faker->randomElements(["Seg","Ter","Qua","Qui","Sex","Sab"], $faker->randomElement([1,2,3,4,5,6]));
    $start_time = $faker->time('H:i');
    return [
        'dentist_id' => $dentist->id,
        'clinic_id' => $clinic->id,
        'days' => json_encode($days),
        'start_time' => $start_time,
        'end_time' => $faker->time('H:i', $start_time),

    ];
});
