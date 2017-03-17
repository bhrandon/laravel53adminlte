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

/* grupo de rotas que não está funcionando */

Route::group(['prefix' => 'adm'], function() {

    //Rota Campanha
    Route::get('campanha', 'adm\campanha\CampanhaController@index');
    Route::get('create', 'adm\campanha\CampanhaController@create');
    
    //Rota Usuário
    Route::get('usuario', 'adm\usuario\CadUsuarioController@index');
    
});





//Rota para debugar os papeis e permissoes do usuário logado.
Route::get('roles', 'HomeController@rolesPermissions');




Route::get('/', function () {
    return Redirect::to('login');
});



Route::group(['middleware' => 'auth'], function () {
    //Route::get('/link1', function ()    {
//        // Uses Auth Middleware
    //});
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


