<?php

namespace App\Http\Controllers\adm\usuario;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CadUsuarioController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        /**
          $userName = auth()->user()->name;
          echo("<h1>{$userName}</h1>");

          foreach( auth()->user()->roles as $role ){
          echo "$role->name -> ";

          $permissions = $role->permissaos;
          foreach($permissions as $permission){
          echo "$permission->name , ";
          }
          echo '<hr>';

          }
        */
        
        $usuarios = DB::table('users as u')
                    ->join('role_user as ru', 'ru.user_id', '=', 'u.id')
                    ->join('roles as r', 'r.id', '=', 'ru.role_id')
                    ->join('permissao_role as pr', 'pr.role_id', '=', 'r.id')
                    ->join('permissaos as ps', 'ps.id', '=', 'pr.permissao_id')
                    ->paginate(5);
        
        //dd($usuarios);
        /*
        foreach($usuarios as $usuario){
            if(){
                
            }
        }
        */
        
        
        return view('adm.usuario.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
