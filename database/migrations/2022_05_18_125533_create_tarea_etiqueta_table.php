<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareaEtiquetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarea_etiqueta', function (Blueprint $table) {
            $table->unsignedInteger('idTar') ;
            $table->unsignedInteger('idEtq') ;

            
            $table->primary(['idTar', 'idEtq']) ;
        });

        Schema::table('tarea_etiqueta', function (Blueprint $table) 
        {
            
            $table->foreign('idTar')
                  ->references('idTar')->on('tarea')
                  ->onDelete('cascade') ;

            
            $table->foreign('idEtq')
                  ->references('idEtq')->on('etiqueta')
                  ->onDelete('cascade') ;

        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarea_etiqueta');
    }
}
