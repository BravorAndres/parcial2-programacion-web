<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sale;


class SalesController extends Controller
{
    public function index()
    {
        $sale = Sale::all();
        return $sale;
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $sale = new Sale();
        $sale->nombre_Vendedor = $request->nombre_Vendedor;
        $sale->nombre_cliente = $request->nombre_cliente;
        $sale->nombre_producto = $request->nombre_producto;
        $sale->precio = $request->precio;
        $sale->fecha_compra = $request->fecha_compra;
        $sale->save();
        return $sale;
    }

    public function show(string $id){
        $sale = Sale::find($id);
        return $sale;
    }

    public function edit()
    {
        
    }

    public function update()
    {

    }

    public function destroy($id)
    {
        $sale = Sale::find($id);
        $sale->delete();
        return $sale;
    }
}