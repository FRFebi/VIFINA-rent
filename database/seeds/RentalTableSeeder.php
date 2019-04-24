<?php

use Illuminate\Database\Seeder;
use App\Rental;

class RentalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Rental::create([
    		"nama"			=> 'Be One Rent',
    		"alamat"		=> 'Sukapura',
    	]);
    }
}
