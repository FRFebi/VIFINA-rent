<?php

use Illuminate\Database\Seeder;
use App\Kendaraan;

class KendaraanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kendaraan::create([
            "nama"			=> 'Grand Livina',
            "jenis_id"      => 2,
            "platno"		=> 'D 0 OK',
            "harga"			=> 400,
            "deskripsi"		=> 'Mobil nya Kerens :3',
            "kapasitas"		=> '4',
            "pintu"			=> '2',
            "transmisi"		=> 'otomatis',
            "status"		=> 'ready',
             "img"           => 'img/Grand-Livina.jpg'
        ]);

        Kendaraan::create([
            "nama"			=> 'Honda Beat',
            "jenis_id"      => 1,
            "platno"		=> 'D 1 OK',
            "harga"			=> 30,
            "deskripsi"		=> 'Motor nya udah pake turbo',
            "kapasitas"		=> '2',
            "pintu"			=> '',
            "transmisi"		=> 'otomatis',
            "status"		=> 'ready',
            "img"           => 'img/Honda-Beat.png'
        ]);

        Kendaraan::create([
            "nama"			=> 'Toyota Avanza',
            "jenis_id"      => 2,
            "platno"		=> 'D 2 OK',
            "harga"			=> 250,
            "deskripsi"		=> 'Mobil nya modif sport',
            "kapasitas"		=> '4',
            "pintu"			=> '4',
            "transmisi"		=> 'otomatis',
            "status"		=> 'ready',
            "img"           => 'img/Toyota-Avanza.png'
        ]);
    }
}
