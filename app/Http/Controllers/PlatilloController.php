<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Platillo;
use App\Models\Categoria;

class PlatilloController extends Controller
{
    public function ejemplo() {
        $platillo = Platillo::with('ingredientes')->get();
        dd($platillo);

    }

    public function consultarPlatillos(){
        //consultar los platillos
        $platillos = Platillo::all();

        return view('menu', compact('platillos'));
    }
}
