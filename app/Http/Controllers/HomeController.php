<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('adminlte::home');
    }
    
    //metodo para debug
    public function rolesPermissions(){
        
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
         
        //return 'Roles and Permissions to User';
    }
}