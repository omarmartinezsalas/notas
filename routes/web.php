<?php

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
	$arreglo=[
		[
			'nombre'=>'juan',
			'phone'=>'10'
		],
		[
			'nombre'=>'otto',
			'phone'=>'8'
		],
		[
			'nombre'=>'lola',
			'phone'=>'7'
		],
		[
			'nombre'=>'karen',
			'phone'=>'78678678'
		],
		[
			'nombre'=>'lorena',
			'phone'=>0
		],
		[
			'nombre'=>'omar',
			'phone'=>10,
			'g'=>'h'
		]

	];
    return view('welcome', ['nombre' => $arreglo]);
});

Route::post('/notas/nueva', 'ControllerNotas@store');

Route::get('/notas', 'ControllerNotas@index');

Route::get('/notas/nueva', 'ControllerNotas@create');

Route::get('/notas/{nota}', 'ControllerNotas@show');

Route::get('/notas/edit/{nota}', 'ControllerNotas@edit');

Route::patch('/notas/edit/{nota}', 'ControllerNotas@update');

Route::delete('/notas/borrar/{nota}', 'ControllerNotas@destroy');