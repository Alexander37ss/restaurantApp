<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\platillo_ingredientes;

class PlatilloIngredientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        platillo_ingredientes::create(['platillo_id' => 1, 'ingrediente_id' => 1]);
        platillo_ingredientes::create(['platillo_id' => 7, 'ingrediente_id' => 4]);
        platillo_ingredientes::create(['platillo_id' => 6, 'ingrediente_id' => 2]);
        platillo_ingredientes::create(['platillo_id' => 2, 'ingrediente_id' => 5]);
        platillo_ingredientes::create(['platillo_id' => 3, 'ingrediente_id' => 2]);
        platillo_ingredientes::create(['platillo_id' => 4, 'ingrediente_id' => 5]);
        platillo_ingredientes::create(['platillo_id' => 5, 'ingrediente_id' => 2]);
    }
}
