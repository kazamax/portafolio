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
    return view('home');
})->name('home');

Route::get('contacto', function () {
    return view('contact');
})->name('contact');

Route::get('nosotros', function () {
    return view('about');
})->name('about');

Route::get('servicios', function () {
    return view('service');
})->name('service');

/*ruta para recibir emails*/
Route::post('messages', function(){
	//Enviar correo
	$data = request()->all();
	Mail::send('emails.message', $data, function($message) use ($data){
		$message->from($data['email'], $data['name'])
		->to('roberto.figuera.web@gmail.com', 'Roberto Figuera')
		->subject($data['subject']);
	});
	//Responder al usuario
	return back()->with('flash', ucfirst($data['name']).', Tu mensaje a sido recibido');
})->name('messages');

