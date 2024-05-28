<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
    return view('site.login');
    }

    public function autenticar(Request $request){

        $regras = [
            'emailUsuario'   => 'required|email',
            'senhaUsuario'   => 'required'
        ];

        $msg = [
            'emailUsuario.required'     =>  'Email obrigatório',
            'emailUsuario.email'        =>  'O e-mail informado deve ser valiido',
            'senhaUsuario.required'     =>  'Senha obrigatória',
        ];

        $request->validate($regras, $msg);

        $emailUsuario = $request->get('emailUsuario');
        $senhaUsuario = $request->get('senhaUsuario');

        $usuario = Usuario::where('emailUsuario', $emailUsuario)->first();
        if(!$usuario){
            // Verificando email
            return back()->withErrors(['emailUsuario' => 'O email informado não existe']);
        }
        if($usuario->senhaUsuario != $senhaUsuario){
            return back()->withErrors(['senhaUsuario' => 'Senha incorreta']);
        }



        $tipoUsuario = $usuario->tipo_usuario;

        // dd($tipoUsuario);

        session([
            'emailUsuario' => $usuario->emailUsuario,
            'tipo_usuario' => 'cliente',
            'idUser' => $usuario->idUsuario,
            'tipo' => $usuario->tipoUsuario_type,
        ]);

            if($tipoUsuario instanceof Cliente){
                session([
                    'id' => $tipoUsuario->idCliente,
                    'nome' => $tipoUsuario->nomeCliente,
                    'tipoUsuario_type' => 'cliente',
                    'nivelFuncionario' => null,
                ]);
                return redirect()->route('dashboard.cliente');

            }


            elseif($tipoUsuario instanceof Funcionario){
                if($tipoUsuario->nivelFuncionario == 'Administrador'){
                session([
                    'id' => $tipoUsuario->idFuncionario,
                    'nome' => $tipoUsuario->nomeFuncionario,
                    'nivelFuncionario' =>  $tipoUsuario->nivelFuncionario,
                    'tipoUsuario_type' => null,
                ]);
                return redirect()->route('dashboard.funcionarios.admin');
            }


            elseif($tipoUsuario->nivelFuncionario == 'Esteticista'){
                session([
                    'id' => $tipoUsuario->idFuncionario,
                    'nome' => $tipoUsuario->nomeFuncionario,
                    'nivelFuncionario' => $tipoUsuario->nivelFuncionario,
                    'tipoUsuario_type' => null,
                ]);
                return redirect()->route('dashboard.funcionarios.estetica');
            }
        }
        return back()->withErrors(['emailUsuario' => 'Erro desconhecido de autenticação']);
    }
}
