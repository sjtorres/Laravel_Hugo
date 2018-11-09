<?php

/*
|--------------------------------------------------------------------------
| Rotas da Web
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar rotas da web para seu aplicativo. Estes
| rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Agora crie algo ótimo!
|
*/

Route::get('/', function () {
    return "Bem Vindos!";
});

Route::get('sandro', function () {
    return view("welcome");
});

Route::get('usuario/{id}', function($id) {
    return 'usuario '.$id;
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
