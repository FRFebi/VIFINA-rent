<?php

use Illuminate\Database\Seeder;
use App\Jenis;
class JenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenis::create([
        "nama"			=> 'Motor'
        ]);

        Jenis::create([
        "nama"			=> 'Mobil'
        ]);
    }
}
