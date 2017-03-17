<?php

namespace App\Http\Controllers\adm\campanha;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Campanha;
use Gate;

class CampanhaController extends Controller
{
    private $campanha;
    
    public function __construct(Campanha $campanha) {
        $this->campanha = $campanha;
    }
    
    public function index(){
        //retornar todas as campanhas
        //$campanhas = $campanha->all();
        $campanhas = $this->campanha->all();

        //date('d/m/Y', strtotime($data));
        //$campanhas["data_inicio"] = date('d/m/Y', $campanhas["data_inicio"]); 
        //$campanhas['data_fim']    = date('d/m/Y', $campanhas['data_fim']); 
        //$campanhas['ativo'] = ($campanhas['ativo'] == 1) ? 'Ativo' : 'Desativada';        
        
        return view('adm.campanha.campanha', compact('campanhas'));
    }
    
    public function create(){
        
        return view('adm.campanha.createCampanha');
    }
}
