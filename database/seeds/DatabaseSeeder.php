<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClinicSeeder::class);
        $this->call(DentistSeeder::class);
        $this->call(ClinicDentistSeeder::class);
    }
}
