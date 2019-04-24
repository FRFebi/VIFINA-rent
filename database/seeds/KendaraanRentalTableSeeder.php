<?php

use Illuminate\Database\Seeder;


class KendaraanRentalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supply')->insert([
        	'rental_id'		=> '1',
        	'kendaraan_id'	=> '1'
        ]);

        DB::table('supply')->insert([
        	'rental_id'		=> '1',
        	'kendaraan_id'	=> '2'
        ]);

        DB::table('supply')->insert([
        	'rental_id'		=> '1',
        	'kendaraan_id'	=> '3'
        ]);
    }
}
