<?php

use Illuminate\Database\Seeder;
use App\Core\Entities\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names  = ['Aulas', 'Quadras','Acessorios','Roupas','Equipamentos'];
        Category::truncate();

        foreach($names as $name)
        {
            Category::create([ 'name' => $name] );
        }
    }
}
