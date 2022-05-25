<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Tarea ;
use App\Models\Usuario;
use App\Models\Etiqueta;
use DB;

class TareaController extends Controller
{


    public function index(Request $req){
        $usuario = Usuario::findOrFail(Auth::user()->idUsu);
        
        return view('dashboard', ['tareas' => $usuario->tareas()]);
    }

    public function borrar(Request $req, Tarea $tarea)
    { 
        $tarea->delete() ;
        return redirect()->route('dashboard') ;

        
        
    }

    public function finalizar(Request $req)
    { 
        $tarea = Tarea::find($req->idTar);
        $tarea->completa = true;
        $tarea->save();
        return redirect()->route('dashboard') ;
    }

    public function veredit(Request $req, Tarea $tarea)
    { 
        return view('tarea.editar', ['tarea' => $tarea]);
    }

    public function editar(Request $req)
    { 
        $tarea = Tarea::find($req->idTar);
        $tarea->titulo = $req->titulo;
        $tarea->fecha = $req->fecha;
        $tarea->texto = $req->texto;
        $tarea->save();
        return redirect()->route('dashboard') ;

    }

    public function verinsertar(Request $req)
    { 
        $etiquetas = Etiqueta::all() ;
        return view('tarea.nueva', [ "etq" => $etiquetas ]) ;
    }

    public function insertar(Request $req)
    { 
        $tarea = new Tarea ;
        $tarea->titulo = $req->titulo ;
        $tarea->texto = $req->texto ;
        $tarea->idUsu = Auth::user()->idUsu;
        $tarea->fecha = date('Y-m-d');
        $tarea->save() ;
        $idTar = $tarea->idTar;
        foreach ($req->etiquetas as $item) {
            Tarea::find($idTar)->etiquetas1()
                          ->attach($item) ;
            
        }

        return redirect()->route('dashboard') ;
        

    }

    

    


    
}
