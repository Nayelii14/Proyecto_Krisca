<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Usuario;

class ProductosController extends Controller
{
    public function getProductos(){
        $producto=Producto::all();

        return $producto;
    }

    public function getFiltro(Request $request){
        $input=$request->all();
        $filtro=$input["filtro"];
        $producto = Producto::where("cod_categoria",$filtro)->get();
        return $producto;
    }
    public function getId(Request $request){
        $input=$request->all();
        $id=$input["id"];
        $producto = Producto::where("id",$id)->get();
        return $producto;
    }

    public function crearProducto(Request $request){
        $input = $request->all();
        $producto = new Producto();
        $producto->nombre=$input["nombre"];
        $producto->stock=$input["stock"];
        $producto->talla=$input["talla"];
        $producto->precio=$input["precio"];
        $producto->cod_categoria=$input["cod_categoria"];
        
        $producto->save();
        return $producto;

    }

    public function eliminarProducto(Request $request){
        $input = $request->all();
        $id = $input["id"];

        $producto = Producto::findOrFail($id);
        $producto->delete();
        return "ok";

    }

    public function actualizarProducto(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $producto = Producto::findOrFail($id);
        $producto->nombre=$input["nombre"];
        $producto->stock=$input["stock"];
        $producto->talla=$input["talla"];
        $producto->precio=$input["precio"];
        $producto->cod_categoria=$input["cod_categoria"];
        $producto->save();
        return $producto; 
    }
}
