<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Detalle_venta;
use App\Models\Producto;
use App\Models\Cliente;

class VentasController extends Controller
{
    public function getVentas(){
        $ventas= Venta::all();

        return $ventas;
    }

    public function getDetalle(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $detalle_venta = Detalle_venta::where("cod_venta",$id)->get();
        return $detalle_venta;
    }

    public function crearVenta(Request $request){
        $input = $request->all();
        $venta = new Venta();
        $idVenta = $venta["id"];
        $id = $input["id"];
        $producto = Producto::findOrFail($id);
        $detalle_venta = new Detalle_venta();
        $detalle_venta->cod_venta = $idVenta;
        $detalle_venta->id_producto = $producto["id"];
        $detalle_venta->cant_producto = $input["cant_producto"];
        $detalle_venta->precio_venta = $input["precio_venta"];

        $cliente = Cliente::findOrFail($input["num_cliente"]);
        $venta->fecha = $input["fecha"];
        $venta->num_cliente = $cliente["id"];
        $venta->total_venta = $input["total_venta"];

        $venta->save();
        return $venta;
    }


    public function cancelarVenta(Request $request){
        $input = $request->all();
        $id = $input["id"];

        $detalle_venta = Detalle_venta::where("cod_venta",$id)->get();
        $detalle_venta->delete();

        $venta = Venta::findOrFail($id);
        $venta->delete();

        return "ok";
    }
}
