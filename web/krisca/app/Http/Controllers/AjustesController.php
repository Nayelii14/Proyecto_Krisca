<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ajuste;
use App\Models\Producto;
use App\Models\Usuario;

class AjustesController extends Controller
{
    public function getAjusteF(Request $request){
        $input=request->all();
        $filtro=$input["filtro"];
        $ajuste = Ajuste::where("id_producto",$filtro)->get();
        return $ajuste;
    }

    public function crearAjuste(Request $request){
        $input = $request->all();
        $ajuste =new Ajuste();
        $producto = Producto::findOrFail($input["id_producto"]);
        $usuario = Usuario::findOrFail($input["id_usuario"]);

        $ajuste->id_producto = $producto["id"];
        $ajuste->fecha_ajuste = $input["fecha_ajuste"];
        $ajuste->cantidad = $input["cantidad"];
        $ajuste->tipo_ajuste = $input["tipo_ajuste"];
        $ajuste->id_usuario = $usuario["id"];

        if($input["tipo_ajuste"]=="aumento"){
            $producto->stock = $producto["stock"]+$input["cantidad"];

        }else if($input["tipo_ajuste"]=="disminucion"){
            $producto->stock = $producto["stock"]-$input["cantidad"];
        }
        
        $producto->save();
        $ajuste->save();
        return $ajuste;
    }

    /*public function disminucionStock(Request $request){
        $input = $request->all();
        $ajuste =new Ajuste();
        $producto = Producto::findOrFail($input["id_producto"]);
        $usuario = Usuario::findOrFail($input["id_usuario"]);

        $ajuste->id_producto = $producto["id"];
        $ajuste->fecha_ajuste = $input["fecha_ajuste"];
        $ajuste->cantidad = $input["cantidad"];
        $ajuste->tipo_ajuste = $input["tipo_ajuste"];
        $ajuste->id_usuario = $usuario["id"];

        $producto->stock = $producto["stock"]-$input["cantidad"];
        $producto->save();
        $ajuste->save();
        return $ajuste;
    }*/
}
