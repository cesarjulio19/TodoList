<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    /**     
     */
    protected $table = "tarea" ;

    /**
     */
    protected $primaryKey = "idTar" ;

    /**
     */
    protected $fillable = ["titulo", "texto", "fecha", "completa"] ;


    /**
     * Indica a LARAVEL que el modelo no define los atributos created_at y updated_at.
     * y, por lo tanto, no se van a utilizar.
     */
    public $timestamps = false ;


    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario', 'idUsu', 'idUsu')
                    ->first() ;
    }

    public function etiquetas()
    {
        return $this->belongsToMany('App\Models\Etiqueta',
                                    'tarea_etiqueta', 
                                    'idTar', 'idEtq') 
                                    ->get() ;
    }

    public function etiquetas1()
    {
        return $this->belongsToMany('App\Models\Etiqueta',
                                    'tarea_etiqueta', 
                                    'idTar', 'idEtq') ;
    }




}
