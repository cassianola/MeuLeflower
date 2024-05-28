<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Funcionario;

class EsteticaController extends Controller
{
    public function index(){

        $idFuncionario = session('id');
        $func   = Funcionario::find($idFuncionario);

        if(!$func){
            abort(404,'Funcionario não encontrado');
        }else{

        return view('site.dashboard.funcionarios.estetica', compact('func'));
        }

    }
}
