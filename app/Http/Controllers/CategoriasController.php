<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    //
    public function categorias(){ 
        $tiendas_a = categorias::all();
        $tiendas_b = \DB::select('SELECT * FROM tb_categorias');
        return view("lista_categorias")
        ->with(['categorias1' => $categorias_a]) 
        ->with(['categorias2' => $categorias_b]);
        
    }
}
