<?php

use Illuminate\Database\Seeder;
use App\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Package::create(['name'=>'Beginner','price'=>999,'days'=>30,'description'=>'This is plan for beginners']);
        Package::create(['name'=>'Intermediate','price'=>1999,'days'=>30,'description'=>'This is plan forIntermediate']);
        Package::create(['name'=>'Advanced','price'=>2999,'days'=>30,'description'=>'This is plan for Advanced']);


    }
}
