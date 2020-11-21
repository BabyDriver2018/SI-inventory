<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produc = DB::connection('mysql')->select("SELECT * FROM productos ORDER BY id DESC");
        //dd($produc[0]);
        return view('menu', compact('produc'));
        
    }

    public function reservas(){
        // $rand = range(62,85);
        // shuffle($rand);
        // for($i=0 ; $i<10 ; $i++){
        //     $product[] = DB::connection('mysql')->select("SELECT * FROM productos WHERE id=? and id_categoria!=?",[$rand[$i],11]);
        // }
        // for($i=0 ; $i <count($product); $i++){
        //     if($product[$i]==null){
        //         unset($product[$i]);
        //     }
        //     else{
        //         $produ[] = $product[$i];
        //     }
        // }
        $produ = DB::connection('mysql')->select("SELECT * FROM productos WHERE id_categoria!=? ORDER BY id DESC",[11]);
        //dd($produ[0]['0']->stock);
            $message="";
        return view('reservas',compact('produ','message'));
    }

        
    public function vermas($id){
        $vistas = DB::connection('mysql')->select("SELECT vistas FROM productos WHERE id=? ",[$id]);

        $vistas_actual= $vistas[0]->vistas+1;

            DB::connection('mysql')->update("UPDATE productos SET vistas=$vistas_actual WHERE id=? ",[$id]);

        $prod = DB::connection('mysql')->select("SELECT * FROM productos WHERE id=? ",[$id]) ;
        return view('detail',compact('prod'));
    }

    protected function foodReservar($request){
        for($i=0 ; $i<count($request->reservas);$i++){
            $produ[] = DB::connection('mysql')->select("SELECT * FROM productos WHERE id=? ",[$request->reservas[$i]]);
        }
        return  $produ;
    }

    public function reservar(Request $request){
        //dd($request->reservas);
        
        if($request->reservas != null && $request->cantidad == null ){
            //dd("stop");
            $produ = $this->foodReservar($request);

            $message="";
            
            return view('prod_to_reservar',compact('produ','message'));
        }
        
        elseif($request->cantidad != null){

            //dd("nell");
            //dd($request->nuevoDocumentoId);
            $cliente = DB::connection('mysql')->select("SELECT * FROM clientes WHERE documento=? ",[$request->nuevoDocumentoId]);
            
            $carbon = new \Carbon\Carbon();
            $date = $carbon->now();
            
            if($cliente == null){
                //para sacar el total del pedido
                $proddd=$this->foodReservar($request) ;
                $total=0;
                $cantidadVentas=0;
                for($i=0; $i<count($request->reservas);$i++){
                    $subTotal = $proddd[$i][0]->precio_venta*$request->cantidad[$i];
                    $total=$total+$subTotal;
                    $cantidadVentas=$cantidadVentas+$request->cantidad[$i];
                }
                //dd($request);
                //dd("pp");
                DB::connection('mysql')->insert("INSERT INTO clientes(nombre,documento,email,telefono,direccion,fecha_nacimiento,compras,ultima_compra,fecha) VALUES (?,?,?,?,?,?,?,?,?)",[$request->nuevoCliente,$request->nuevoDocumentoId,$request->nuevoEmail,$request->nuevoTelefono,$request->nuevaDireccion,$request->nuevaFechaNacimiento,$cantidadVentas,$date,$date]);
                $newCantVentas=0;
                $newStock=0;
                for($y=0;$y<count($request->reservas);$y++){
                    
                    $newStock=$proddd[$y][0]->stock - $request->cantidad[$y];
                    
                    $newCantVentas=$proddd[$y][0]->ventas + $request->cantidad[$y];

                    DB::connection('mysql')->update("UPDATE productos SET stock=$newStock,ventas=$newCantVentas WHERE id=?",[$proddd[$y][0]->id]);
                }
                
                $nuevoCliente = DB::connection('mysql')->select("SELECT * FROM clientes WHERE documento=?",[$request->nuevoDocumentoId]);

                $nuevoClienteId=$nuevoCliente[0]->id;


                $ventas = DB::connection('mysql')->select("SELECT * FROM ventas");

                //codigo de ultima venta realizada
                if($ventas!=null){
                    $ultimaVentaCodigo=($ventas[count($ventas)-1]->codigo)+1;
                }
                else{
                    $ultimaVentaCodigo=1001;
                }
                
                $prods=[];
                $aux=true;
                $productoss="";
                for($i=0; $i<count($request->reservas);$i++){
                    
                    $prods=[
                        'id' => (string)$proddd[$i][0]->id,
                        'descripcion' => $proddd[$i][0]->descripcion,
                        'cantidad' => (string)$request->cantidad[$i],
                        'stock' => (string)(($proddd[$i][0]->stock)-($request->cantidad[$i])),
                        'precio' => (string)$proddd[$i][0]->precio_venta,
                        'total' => (string)(($request->cantidad[$i])*($proddd[$i][0]->precio_venta)),
                    ];         
                    $JsonObject = json_encode($prods);
                    
                    if((count($request->reservas)) == 1){
                        $productoss=$productoss.$JsonObject;
                        
                    }
                    elseif((count($request->reservas))>1 && $i<((count($request->reservas))-1)){
                        $productoss=$productoss.$JsonObject.",";
                        $aux=false;
                    }
                    elseif($i<(count($request->reservas)) && $aux==false){
                        $productoss=$productoss.$JsonObject;
                    }
                    
                }
                $productos="[".$productoss."]";

                // $payload = json_encode($productos);
                // // enviar al otro sistema
                // $ch = curl_init('http://localhost/08.Hardware-y-Factura-Electronica/reportes');
                // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                // curl_setopt($ch, CURLINFO_HEADER_OUT, true);
                // curl_setopt($ch, CURLOPT_POST, true);
                // curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
                
                // // Submit the POST request
                // $result = curl_exec($ch);
                // var_dump("data sended: ", $result);exit();
                
                // // Close cURL session handle
                // curl_close($ch);

                //dd($productos);
                //MenuController.phpdd($productos);
                DB::connection('mysql')->insert("INSERT INTO ventas(codigo,id_cliente,id_vendedor,productos,impuesto,neto,total,metodo_pago,fecha) VALUES (?,?,?,?,?,?,?,?,?)",[$ultimaVentaCodigo,$nuevoClienteId,1,$productos,0,$total,$total,"Efectivo",$date]);
                //dd("prueba");
                $productos="";
                $JsonObject="";
                $prods="";
                $allproductos="";
                $ventas="";
                $ultimaVentaCodigo="";
                $nuevoClienteId="";
                $nuevoCliente="";
                $cliente="";
                
                return redirect('/home');
                
            }
            elseif($cliente != null){

                //para sacar el total del pedido
                $proddd=$this->foodReservar($request) ;
                $total=0;
                $cantidadCompras=0;
                for($i=0; $i<count($request->reservas);$i++){
                    $subTotal = $proddd[$i][0]->precio_venta*$request->cantidad[$i];
                    $total=$total+$subTotal;
                    $cantidadCompras=$cantidadCompras+$request->cantidad[$i];
                }
                $existCliente= DB::connection('mysql')->select("SELECT compras FROM clientes WHERE documento=?",[$request->nuevoDocumentoId]);
                $compras= $existCliente[0]->compras;
                //dd($compras);
                DB::connection('mysql')->update("UPDATE clientes SET compras=($cantidadCompras+$compras) WHERE documento=?",[$request->nuevoDocumentoId]);
                $newCantVentas=0;
                $newStock=0;
                for($y=0;$y<count($request->reservas);$y++){
                    
                    $newStock=$proddd[$y][0]->stock - $request->cantidad[$y];
                    
                    $newCantVentas=$proddd[$y][0]->ventas + $request->cantidad[$y];

                    DB::connection('mysql')->update("UPDATE productos SET stock=$newStock,ventas=$newCantVentas WHERE id=?",[$proddd[$y][0]->id]);
                }
                
                $nuevoCliente = DB::connection('mysql')->select("SELECT * FROM clientes WHERE documento=?",[$request->nuevoDocumentoId]);

                $nuevoClienteId=$nuevoCliente[0]->id;


                $ventas = DB::connection('mysql')->select("SELECT * FROM ventas");

                //codigo de ultima venta realizada
                if($ventas!=null){
                    $ultimaVentaCodigo=($ventas[count($ventas)-1]->codigo)+1;
                }
                else{
                    $ultimaVentaCodigo=1001;
                }
                
                
                $prods=[];
                $aux=true;
                $productoss="";
                for($i=0; $i<count($request->reservas);$i++){
                    $prods=[
                        'id' => (string)$proddd[$i][0]->id,
                        'descripcion' => $proddd[$i][0]->descripcion,
                        'cantidad' => (string)($request->cantidad[$i]),
                        'stock' => (string)(($proddd[$i][0]->stock)-($request->cantidad[$i])),
                        'precio' =>(string) $proddd[$i][0]->precio_venta,
                        'total' => (string)(($request->cantidad[$i])*($proddd[$i][0]->precio_venta)),
                    ];         
                    $JsonObject = json_encode($prods);
                    
                    if((count($request->reservas)) == 1){
                        $productoss=$productoss.$JsonObject;
                        
                    }
                    elseif((count($request->reservas))>1 && $i<((count($request->reservas))-1)){
                        $productoss=$productoss.$JsonObject.",";
                        $aux=false;
                    }
                    elseif($i<(count($request->reservas)) && $aux==false){
                        $productoss=$productoss.$JsonObject;
                    }
                    
                }
                $productos="[".$productoss."]";
                //dd($productos);
                DB::connection('mysql')->insert("INSERT INTO ventas(codigo,id_cliente,id_vendedor,productos,impuesto,neto,total,metodo_pago,fecha) VALUES (?,?,?,?,?,?,?,?,?)",[$ultimaVentaCodigo,$nuevoClienteId,1,$productos,0,$total,$total,"Efectivo",$date]);
                $productos="";
                $JsonObject="";
                $prods="";
                $allproductos="";
                $ventas="";
                $ultimaVentaCodigo="";
                $nuevoClienteId="";
                $nuevoCliente="";
                $cliente="";


                return redirect('/home');
            }

        }
        elseif($request->reservas == null  ){

            $produ = DB::connection('mysql')->select("SELECT * FROM productos WHERE id_categoria!=? ORDER BY id DESC",[11]);
            //dd($produ);
            $message = "No se han seleccionado platos!";
            return view('reservas',compact('produ','message'));
        }
        
        


        
        
        
    }
}
