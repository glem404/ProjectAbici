<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedidos; 
use App\Models\User; 
use Illuminate\Support\Facades\Auth;
use App\Models\facturas; 
use App\Models\detallefactura;
use App\Models\Bicicletas;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexpedidos()
    {
        //
        $pedidos = DB::table('pedidos')
        ->join('Users', 'pedidos.idCliente','=','Users.id')
        ->select( DB::raw("CONCAT(users.name, ' ', users.apellidos) AS nombrecompleto"),'pedidos.idCliente','pedidos.productos as Productos','pedidos.DescripcionProductos as descripedi','pedidos.Direccion','pedidos.estado','pedidos.IdPedido')
        ->orderBy(DB::raw("(CASE WHEN pedidos.estado = 'pendiente' THEN 0 ELSE 1 END)"))
        ->get();

    $todosLosPedidos = Pedidos::all();
    $pedidosPendientes = Pedidos::where('estado', 'pendiente')->get();
    $pedidosEnProceso = Pedidos::where('estado', 'en proceso')->get();
    $pedidosDenegados = Pedidos::where('estado', 'denegado')->get();
    $pedidosFinalizados = Pedidos::where('estado', 'finalizado')->get();

     
    return view('administrador/listpedidos', compact('todosLosPedidos', 'pedidosPendientes', 'pedidosEnProceso', 'pedidosDenegados', 'pedidosFinalizados','pedidos'));
   
        
    }

    public function indexclientes()
    {
        //
        $usuarios = User::orderBy('name', 'asc')->get();

        return view('administrador/listclientes' , ['usuarios' => $usuarios]);
    }

    public function indexbicicletas()
    {
        //  
        $bicicletas = Bicicletas::all();
        return view('administrador/bicicletas', ['bicicletas' => $bicicletas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $pedido = Pedidos::find($id);
    /*     if (!$pedido) {
            return redirect()->route('admin.listpedidos')->with('error', 'El pedido no fue encontrado');
        } */
        $usuarios = User::all();
            return view('administrador/pedido', compact('pedido','usuarios'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {

    
        // Actualiza los datos del pedido
        Pedidos::where('idPedido', $id)->update([
            'idCliente' => $request->input('idCliente'),
            'idDomiciliario' => $request->input('idDomiciliario'),
            'idAdministracion' => $request->input('idAdministracion'),
            'FechaHora' => $request->input('FechaHora'),
            'TiempoEstimadomin' => $request->input('TiempoEstimadomin'),
            'HoraEstimada' => $request->input('HoraEstimada'),
            'DescripcionProductos' => $request->input('DescripcionProductos'),
            'Direccion' => $request->input('Direccion'),
            'estado' => $request->input('estado'),
        ]);
    
 
    
        // Redirecciona a la vista de listado de pedidos con un mensaje
        return redirect()->route('admin.listpedidos')->with('success', 'Pedido actualizado correctamente');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
