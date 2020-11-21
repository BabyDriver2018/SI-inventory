<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function test(){
        $nuevoCliente = DB::connection('mysql')->select("SELECT * FROM clientes WHERE documento=?",[74848585]);
        $nuevoClienteId=$nuevoCliente[0]->id;
        dd($nuevoClienteId);
        $ventas = DB::connection('mysql')->select("SELECT * FROM ventas");
        $ultimaVenta=$ventas[count($ventas)-1]->codigo;
        dd($ultimaVenta);
        for($i=0; $i<10;$i++){
            $y=$i.",";
            $nuevaVenta=[
                "pp"=>$y,
                "ppp"=>"ooo"
    
            ];
            $newVenta[]=$nuevaVenta;
        }
        dd($newVenta);
    }
}
