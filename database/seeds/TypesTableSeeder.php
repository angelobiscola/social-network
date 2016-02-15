<?php

use Illuminate\Database\Seeder;
use App\Core\Entities\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names  = ['Professor', 'Empresa'];
        Type::truncate();

        foreach($names as $name)
        {
           Type::create([ 'name' => $name] );
        }
    }
}
