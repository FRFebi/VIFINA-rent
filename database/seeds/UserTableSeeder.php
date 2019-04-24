<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        "name"			=> 'FIKO REDHA FEBIANSYAH',
        "email"			=> 'fiko469@gmail.com',
        "phone_number"	=> '081331822540',
        "nik"			=> '3503060602980003',
        "password"		=> \Hash::make("12345678")
        ]);


    }
}
