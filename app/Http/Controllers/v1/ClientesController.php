<?php
 
namespace App\Http\Controllers\v1;

use App\Models\Cliente;
use App\Http\Controllers\Controller;

 
class ClientesController extends Controller
{
    
    public function getclientes()
    {

        $response_local3=new \stdclass();
        $response_local3->suscess=true;
        $response_local3->data=Cliente::all();
        return response()->json($response_local3,200);
    }
}