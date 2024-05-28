<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Usuario;
use App\Models\ServicosModel;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    //
    // public function index()
    // {

    //     return view('site.dashboard.cliente.agendamento');
    // }
    // public function ListarCategorias(){
    //     $categorias = ServicosModel::select('tipoServico')->distinct()->get();

    //     return view('site.agendamento', compact('categorias'));
    // }
    public function index(){

        $idCliente = session('id');
        $cliente = Cliente::find($idCliente);

        return view('site.dashboard.cliente.agendamento', compact('cliente'));
    }
}
