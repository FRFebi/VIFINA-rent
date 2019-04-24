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
        $this->call(UserTableSeeder::class);
        $this->call(JenisTableSeeder::class);
        $this->call(KendaraanTableSeeder::class);
        $this->call(RentalTableSeeder::class);
        $this->call(KendaraanRentalTableSeeder::class);

    }
}
