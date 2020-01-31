<?php

use Illuminate\Database\Seeder;

class DentistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Dentist::class, 10)->create();
    }
}
