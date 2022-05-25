<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController ;
use App\Http\Controllers\EtiquetaController ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [TareaController::class,'index'])
 ->middleware(['auth'])->name('dashboard');


// Operaciones con Tarea

Route::group(['prefix' => 'tarea', 
              'as'     => 'tarea.'], function()
{
    Route::post('editar', [TareaController::class,'editar'])
        ->name('editar') ;

    Route::get('borrar/{tarea}', 
               [TareaController::class,'borrar'])
        ->name('borrar') ;

    Route::get('verinsertar', 
               [TareaController::class,'verinsertar'])
        ->name('verinsertar') ;

    Route::post('insertar', 
              [TareaController::class,'insertar'])
        ->name('insertar') ;

    Route::get('finalizar/{idTar}', 
               [TareaController::class,'finalizar'])
        ->name('finalizar') ;

    Route::get('veredit/{tarea}', 
              [TareaController::class,'veredit'])
        ->name('veredit') ;
}) ;


Route::group(['prefix' => 'etiqueta', 
              'as'     => 'etiqueta.'], function()
{

    Route::get('gestionar', 
               [EtiquetaController::class,'index'])
        ->name('gestionar') ;

        Route::get('borrar/{etiqueta}', 
               [EtiquetaController::class,'borrar'])
        ->name('borrar') ;

        Route::get('veredit/{etiqueta}', 
              [EtiquetaController::class,'veredit'])
        ->name('veredit') ;

        Route::post('editar', [EtiquetaController::class,'editar'])
        ->name('editar') ;

        Route::view('nueva','etiqueta.nueva')
        ->name('nueva') ;

        Route::post('insertar', 
              [EtiquetaController::class,'insertar'])
        ->name('insertar') ;

        
    
}) ;


require __DIR__.'/auth.php';
