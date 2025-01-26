<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Pedidos;

class ConsultaController extends Controller
{


    public function pedidosPorUsuario($id)
{
    $pedidos = DB::table('ordenes')->where('user_id', $id)->get();
    return response()->json($pedidos);
}

public function detallesPedidos()
{
    $pedidos = DB::table('ordenes')
        ->join('usuarios', 'ordenes.user_id', '=', 'usuarios.id')
        ->select('ordenes.*', 'usuarios.nombre', 'usuarios.correo')
        ->get();

    return response()->json($pedidos);
}

public function pedidosEnRango(Request $request)
{
    $pedidos = DB::table('ordenes')
        ->whereBetween('total', [$request->input('min', 100), $request->input('max', 250)])
        ->get();

    return response()->json($pedidos);
}
public function usuariosConR()
{
    $usuarios = DB::table('usuarios')
        ->where('nombre', 'LIKE', 'R%')
        ->get();

    return response()->json($usuarios);
}

public function totalPedidosUsuario($id)
{
    $total = DB::table('ordenes')
        ->where('user_id', $id)
        ->count();

    return response()->json(['total' => $total]);
}

public function pedidosOrdenados()
{
    $pedidos = DB::table('ordenes')
        ->join('usuarios', 'ordenes.user_id', '=', 'usuarios.id')
        ->select('ordenes.*', 'usuarios.nombre', 'usuarios.correo')
        ->orderBy('ordenes.total', 'desc')
        ->get();

    return response()->json($pedidos);
}

public function sumaTotal()
{
    $suma = DB::table('ordenes')->sum('total');
    return response()->json(['suma_total' => $suma]);
}

public function pedidoMasEconomico()
{
    $pedido = DB::table('ordenes')
        ->join('usuarios', 'ordenes.user_id', '=', 'usuarios.id')
        ->select('ordenes.*', 'usuarios.nombre')
        ->orderBy('ordenes.total', 'asc')
        ->first();

    return response()->json($pedido);
}


public function pedidosAgrupados()
{
    $pedidos = DB::table('ordenes')
        ->join('usuarios', 'ordenes.user_id', '=', 'usuarios.id')
        ->select('usuarios.nombre', DB::raw('SUM(ordenes.total) as total_gastado'), DB::raw('COUNT(ordenes.id) as total_pedidos'))
        ->groupBy('usuarios.nombre')
        ->get();

    return response()->json($pedidos);
}
   /*
   Intente de esta forma pero me daba mucho error  (T_T)
   
   
   Public function consultas(){

        //Recuperar el usuario con Id 2
        $pedidosUsuario2=Pedidos::where('id_usuario',2)->get();

        //Informacion detallada de pedidos con usuarios
        $pedidosConUsuarios=Pedidos::with('usuario')->get();//carga la relacion especificada en el modelo Pedidos

        //Usuario cuyos nombres comiensan con R

        $usuariosConR=Usuario::where('nombre','LIKE','R%')->get();

        //Pedidos cuyo total esté entre $100 y $250
        $pedidosEnRango = Pedidos::whereBetween('total', [100, 250])->get();

        //Total de pedidos del usuario con Id 5
        $totalPedidosUsuario5 = Pedidos::where('id_usuario',5)->count();

        //pedidos ordenados por total desdenten 

    $pedidosOrdenados= Pedidos::with('usuario')->orderBy('total','desc')->get();

    //suma total del campo "total"

    $sumaTotal=Pedidos::sum('total');

    //pedido mas economico con usuario asociado 
    $pedidoMasEconomico=Pedidos::with('usuario')->orderBy('total','asc')->first();
  

    //pedidos agrupados por usuario

    $pedidosAgrupados= Pedidos::select('id_usuario','producto','cantidad','total')
    ->with('usuario')
    ->get()
    ->groupBy('id_usuario');

    return response()->json([
        'pedidosUsuario2' => $pedidosUsuario2,
            'pedidosConUsuarios' => $pedidosConUsuarios,
            'pedidosEnRango' => $pedidosEnRango,
            'usuariosConR' => $usuariosConR,
            'totalPedidosUsuario5' => $totalPedidosUsuario5,
            'pedidosOrdenados' => $pedidosOrdenados,
            'sumaTotal' => $sumaTotal,
            'pedidoMasEconomico' => $pedidoMasEconomico,
            'pedidosAgrupados' => $pedidosAgrupados,

    ]);

}*/
}

