<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

//Ruta para enviar datos del formulario
    Route::post('/quiz',[
        'uses'  =>'QuizController@postdata',
        'as'    =>'postdata'
    ]);

//Rutas para buscar estudiante por codigo
    Route::get('/estudiante',[
        'uses'  =>'EstudianteController@searchCod'
    ])->name('searchCod');
    Route::post('/estudiante',[
        'uses'  =>'EstudianteController@findCod'
    ])->name('findCod');

//Ruta para exportar a excel
    Route::get('/exportar',[
        'uses'  =>'QuizController@exportExcel',
        'as'    =>'exportExcel'
    ]);