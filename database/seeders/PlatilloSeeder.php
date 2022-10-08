<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Platillo;

class PlatilloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platillo::create(['nombre' => 'Sushi', 'precio' => 120.20, 'categoria_id' => 1]);
        Platillo::create(['nombre' => 'Pizza', 'precio' => 210.00, 'categoria_id' => 1]);
        Platillo::create(['nombre' => 'Hamburguesa', 'precio' => 180.00, 'categoria_id' => 3]);
        Platillo::create(['nombre' => 'Nugets', 'precio' => 120.20, 'categoria_id' => 3]);
        Platillo::create(['nombre' => 'Tacos de humano', 'precio' => 30.00, 'categoria_id' => 2]);
        Platillo::create(['nombre' => 'Caldo de pollo', 'precio' => 30.00, 'categoria_id' => 3]);
        Platillo::create(['nombre' => 'Ensalada', 'precio' => 50.00, 'categoria_id' => 1]);
    }
}
