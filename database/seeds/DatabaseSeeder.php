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
        $this->call(PackageSeeder::class);
        $this->call(RoutineSeeder::class);
        // $this->call(BasicSeeder::class);

    }
}
