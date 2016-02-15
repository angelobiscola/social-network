<?php

use Illuminate\Database\Seeder;
use App\Domains\Location\Location;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::truncate();
    }
}
