<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pedidos; 
use App\Models\User; 
use Illuminate\Support\Facades\Auth;
use App\Models\facturas; 
use App\Models\detallefactura; 
use DB;

class BusquedasController extends Controller
{
    //

    public function searchCli(Request $request)
    {
        $criterio = $request->input('criterio');
        $valor = $request->input('valor');
    
        // Realiza la búsqueda según el criterio seleccionado
        $usuarios = User::where($criterio, $valor)->get();
    
        return view('administrador/listclientes', ['usuarios' => $usuarios]);
    }
    
}
