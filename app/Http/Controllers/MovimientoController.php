<?php

namespace App\Http\Controllers;

use App\Models\Movimiento;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientos = Movimiento::all();
        return view('movimientos.index', compact("movimientos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        return view('movimientos.crear',compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movimiento = new Movimiento();
        $producto = Producto::find($request->producto);
        $movimiento->producto_id = $request->producto;
        $movimiento->tmovimiento = $request->tipodemovimiento;
        $movimiento->cantidad = $request->cantidad;
        if($request->tmovimiento =="salida"){
            $producto->cantidad = $producto->cantidad - $request->cantidad;
        }else{
            $producto->cantidad = $producto->cantidad + $request->cantidad;
        }
        $movimiento->fecha = $request->fecha;
        $producto->save();
        $movimiento->save();
        session()->flash("flash.banner","Movimiiento creado");
        return Redirect::route("movimientos.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Movimiento $movimiento)
    {
        return view('movimientos.ver',compact('movimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Movimiento $movimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movimiento $movimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movimiento $movimiento)
    {
        //
    }
}
