<?php

use Illuminate\Database\Seeder;

class ClinicDentistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ClinicDentist::class, 10)->create();
    }
}
