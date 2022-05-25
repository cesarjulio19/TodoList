<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;

    /**
     * @var
     */
    protected $table = 'etiqueta' ;

    /**
     * @var
     */
    protected $primaryKey = 'idEtq' ;

    /**
     * @var
     */
    public $timestamps = false ;

    protected $fillable = ["etiqueta", "color"] ;

    public function tareas()
    {
        return $this->belongsToMany('App\Models\Tarea',
                                    'tarea_etiqueta',
                                    'idEtq', 'idTar')
                    ->get() ;
    }




}
