<?php

use Illuminate\Database\Seeder;
use App\Core\Entities\Advert;

class AdvertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advert::truncate();

        $bussinesses = \App\Core\Entities\Business::all();

        foreach ($bussinesses as $b)
        {
            $b->Adverts()->save(factory(Advert::class)->make());
            $b->Adverts()->save(factory(Advert::class)->make());
        }
    }
}
