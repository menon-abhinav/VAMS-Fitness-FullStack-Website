<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Plan;
use App\Shop;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::create(['first-name'=>'VAMS','last-name'=>'Admin','email'=>'teams.vams@gmail.com','mobile'=>'9653493920','password'=>PASSWORD_HASH(12345678,PASSWORD_BCRYPT),'user_type'=>1]);
        // Plan::create(['user_id'=>4,'package_id'=>1,'days'=>3]);

        Shop::create(['name'=>'VAMS Headphone','price'=>'20','image'=>'assests/imgs/feature1.png']);
        Shop::create(['name'=>'VAMS Speaker','price'=>'20','image'=>'assests/imgs/feature2.png']);
        Shop::create(['name'=>'VAMS Airpods','price'=>'20','image'=>'assests/imgs/feature3.png']);
        Shop::create(['name'=>'VAMS Watch','price'=>'20','image'=>'assests/imgs/feature4.png']);

    }
}
