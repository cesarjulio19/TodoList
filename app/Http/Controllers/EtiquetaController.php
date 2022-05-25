<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea ;
use App\Models\Usuario;
use App\Models\Etiqueta;
use DB;

class EtiquetaController extends Controller
{
    public function index(Request $req){
        $arr=[];
        $arr1=[];
        $tq=DB::table("tarea_etiqueta")->get();
        $etiquetas = Etiqueta::all() ;

        foreach ($etiquetas as $item) {
             
            foreach ($tq as $item1) {
                if(($item->idEtq == $item1->idEtq) && (!in_array($item, $arr))){
                    array_push($arr, $item);
                    
                    
                }
            }
            
        }

        foreach ($etiquetas as $item) {
             
            foreach ($tq as $item1) {
                if((!in_array($item, $arr)) && (!in_array($item, $arr1))){
                    array_push($arr1, $item);
                }
            }
            
        }

        return view('etiqueta.ver', 
                   ['etqr'   => $arr,
                    'etqn' => $arr1]) ;

        

    }


    public function borrar(Request $req, Etiqueta $etiqueta)
    { 
        $etiqueta->delete() ;
        return redirect()->route('etiqueta.gestionar') ;

        
        
    }

    public function veredit(Request $req, Etiqueta $etiqueta)
    { 
        return view('etiqueta.editar', ['etiqueta' => $etiqueta]);
    }

    public function editar(Request $req)
    { 
        $etiqueta = Etiqueta::find($req->idEtq);
        $etiqueta->etiqueta = $req->etiqueta;
        $etiqueta->color = $req->color;
        $etiqueta->save();
        return redirect()->route('etiqueta.gestionar') ;

    }


    public function insertar(Request $req)
    { 
        $etiqueta = new Etiqueta ;
        $etiqueta->etiqueta = $req->etiqueta;
        $etiqueta->color = $req->color;
        $etiqueta->save() ;

        return redirect()->route('etiqueta.gestionar') ;
        

    }

    

    
}
