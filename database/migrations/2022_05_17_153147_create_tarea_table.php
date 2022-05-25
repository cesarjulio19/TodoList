<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarea', function (Blueprint $table) {
            $table->increments("idTar");
            $table->unsignedInteger("idUsu") ;
            $table->string("titulo", 255);
            $table->text("texto") ;
            $table->date("fecha");
            $table->boolean("completa")->default(false) ;


        });

        // Definimos las claves foráneas
        Schema::table('tarea', function (Blueprint $table) 
        {
            $table->foreign('idUsu')
                  ->references('idUsu')
                  ->on('usuario')                  
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
        Schema::dropIfExists('tarea');
    }
}
