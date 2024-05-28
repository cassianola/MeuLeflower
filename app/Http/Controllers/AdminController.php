<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $idFuncionario = session('id');
        $func = Funcionario::find($idFuncionario);

        if (!$func) {
            abort(404, 'Funcionario não encontrado');
        }

        return view('site.dashboard.funcionarios.admin', compact('func'));
    }


    public function indexFunc()
    {
        $idFuncionario = session('id');
        $func = Funcionario::find($idFuncionario);
        $listaFunc = Funcionario::all();

        return view('site.dashboard.admin.func.index', compact('func', 'listaFunc'));
    }


    public function createFunc()
    {
        // Verifica se o usuário está autenticado
        $idFuncionario = session('id');

        // Busca o funcionário no banco de dados
        $func = Funcionario::find($idFuncionario);

        // Se o funcionário não for encontrado, retorna erro 404
        if (!$func) {
            abort(404, 'Funcionario nao encontrado');
        }

        // Retorna a view com os dados do funcionário
        return view('site.dashboard.admin.func.create', compact('func'));
    }

    // CADASTRAR FUNCIONARIO NOVO
    public function cadFunc(Request $request)
    {
        // $request->merge(['dataInscriçãoFuncionario' => now()]);

        $request->validate([
            'nomeFuncionario' => 'required|string|max:100',
            'emailFuncionario' => 'required|string|max:100',
            'senhaFuncionario' => 'required|date',
            'telefoneFuncionario' => 'required|string|max:20',
            'salarioFuncionario' => 'required|string|max:100',
            'enderecoFuncionario' => 'required|string|max:100',
            'nivelFuncionario' => 'required|string|max:100',
            'cargoFuncionario' => 'required|string|max:10',
            'statusFuncionario' => 'required|string|max:20',
            'created_at' => 'required|date',
            'updated_at' => 'required|date',

            // dd($request)
        ]);


        $func = new Funcionario();

        $func->nomeFuncionario = $request->input('nomeFuncionario');
        $func->emailFuncionario = $request->input('emailFuncionario');
        $func->senhaFuncionario = $request->input('senhaFuncionario');
        $func->telefoneFuncionario = $request->input('telefoneFuncionario');
        $func->salarioFuncionario = $request->input('salarioFuncionario');
        $func->enderecoFuncionario = $request->input('enderecoFuncionario');
        $func->nivelFuncionario = $request->input('nivelFuncionario');
        $func->cargoFuncionario = $request->input('cargoFuncionario');
        $func->statusFuncionario = $request->input('statusFuncionario');
        $func->created_at = $request->input('created_at');
        $func->updated_at = $request->input('updated_at');

        $func->save();

        return redirect()->route('dashboard.admin.func.index')->with('sucess', 'Funcionario cadrastado com sucesso');
    }

}

