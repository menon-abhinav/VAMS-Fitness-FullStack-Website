<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Plan;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create(['first-name'=>'Manish','last-name'=>'Pillai','email'=>'pillaimanish00@gmail.com','mobile'=>'9653493920','password'=>PASSWORD_HASH(12345678,PASSWORD_BCRYPT),'user_type'=>1]);
        Plan::create(['user_id'=>4,'package_id'=>1,'days'=>3]);
    }
}
