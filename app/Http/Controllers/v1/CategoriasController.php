<?php
 
namespace App\Http\Controllers\v1;

use App\Models\Categoria;
use App\Http\Controllers\Controller;

 
class CategoriasController extends Controller
{
    
    public function getcategorias()
    {

        $response_local2=new \stdclass();
        $response_local2->suscess=true;
        $response_local2->data=Categoria::all();
        return response()->json($response_local2,200);
    }
}