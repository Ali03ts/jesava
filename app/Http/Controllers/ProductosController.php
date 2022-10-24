<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Categorias;

use \App\Http\Requests\validar;

class ProductosController extends Controller
{
    //

    public function productos(){ 
        $productos_a = Productos::all();
        $productos_b = \DB::select('SELECT producto.id_producto as id_producto, producto.nombre as nombre, producto.descripcion as descripcion,
        producto.foto as foto, producto.precio_normal as precios_normal, producto.precio_rebajado as precios_rebajado, producto.cantidad as cantidad, producto.id_categoria as categoria
        FROM tb_productos as producto Where producto.id_categoria=id_categoria');
        //tb_tipos as n where usuario.nivel=n.nombre    
       // where usuario.nivel=n.id_tipo
        return view("lista_productos")
        ->with(['productos1' => $productos_a]) 
        ->with(['productos2' => $productos_b]);
        
    }


    /*********************************************** Detalle ********************************************+*/
    public function detalle($id){
        $producto = Productos::find($id);
        return view("detalle")
            ->with(['detalle' => $producto]);
    }


    /********************************************** Alta ***************************************************/
    public function alta(){
        $categorias = Categorias::all();
        return view ("alta")
        ->with(['categorias' => $categorias]);
    }

    public function registrar(validar $request){
        /********************************************** Valida campos *******************************************/
        
        Productos::create(array(
        'nombre' =>$request->input('nombre'),
        'descripcion' =>$request->input('descripcion'),
        'precio_normal' =>$request->input('precio_normal'),
        'precio_rebajado' =>$request->input('precio_rebajado'),
        'cantidad' =>$request->input('cantidad'),
        'id_categoria' =>$request->input('id_categoria'),
        'foto' =>$request->input('foto')
    ));
        return redirect()->route('lista_productos');
    }

    /*********************************************** Editar **********************************************/
    public function editar(Productos $id_categoria){
        $categorias = Categorias::all();
        return view("editar")
        ->with(['producto' => $id_categoria])
        ->with(['categorias' => $categorias]);
    }

    public function salvar(Productos $id_categoria,Request $request){
        //$id->update($request->only('create', 'nombre', 'descripcion', 'precio_normal', 'precio_rebajado', 'cantidad', 'id_categoria', 'foto'));
        //dd($request->all());
        $query = Productos::find($id_categoria->id_categoria);
        $query->nombre = trim($request->nombre);
        $query->descripcion = trim($request->descripcion);
        $query->precio_normal = trim($request->precio_normal);
        $query->precio_rebajado = $request->precio_rebajado;
        $query->cantidad = $request->cantidad;
        $query->id_categoria = trim($request->id_categoria);
        $query->foto = trim($request->foto);
        $query->save();
        return redirect()->route("editar",['id_categoria'=>$id_categoria->id_categoria]);
    }

    /*********************************************** Borrar ****************************************/
   //public function borrar($id){
    public function borrar(Productos $id_categoria){
        \Storage::disk('local')->delete($id_categoria->foto);   //destruye la foto del usuario
        $id_categoria->delete();
        return redirect()->route("lista_productos");
    }
}

