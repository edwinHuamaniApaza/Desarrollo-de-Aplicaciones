<?php
 
namespace App\Http\Controllers\v1;

use App\Models\Producto;
use App\Http\Controllers\Controller;

 
class ProductosController extends Controller
{
    
    public function getproductos()
    {

        $response_local=new \stdclass();
        $response_local->suscess=true;
        $response_local->data=Producto::all();
        return response()->json($response_local,200);
    }
}