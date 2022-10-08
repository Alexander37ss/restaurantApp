<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ingrediente;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingrediente::create(['nombre' => 'Arroz']);
        Ingrediente::create(['nombre' => 'Carne']);
        Ingrediente::create(['nombre' => 'Frijoles']);
        Ingrediente::create(['nombre' => 'Cebolla']);
        Ingrediente::create(['nombre' => 'Chile']);
        Ingrediente::create(['nombre' => 'Sal']);
        Ingrediente::create(['nombre' => 'Limon']);
        Ingrediente::create(['nombre' => 'Pan']);
        Ingrediente::create(['nombre' => 'Jamon']);
        Ingrediente::create(['nombre' => 'Salchicha']);
    }
}
