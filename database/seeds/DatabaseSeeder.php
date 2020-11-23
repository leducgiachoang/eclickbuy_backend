<?php

use Illuminate\Database\Seeder;
use Danhmucsanphan_seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Danhmucsanphan_seeder::class);
    }
}
