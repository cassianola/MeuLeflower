<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EsteticaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SobreController;
use App\Models\ServicosModel;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/servico', [ServicoController::class, 'index'])->name('servico');
Route::get('/cadastrar-se', [CadastroController::class, 'index'])->name('cadastroCliente');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard.admin');
route::get('/contato', [ContatoController::class, 'index'])->name('contato');
route::get('/sobre', [SobreController::class, 'index'])->name('sobre');

// AGENDAMENTO
route::get('/agendamento', [AgendamentoController::class, 'index'])->name('agendamento');
// route::get('/agendamento',[AgendamentoController::class, 'ListarCategorias'])->name('agendamento');

// teste do dashboard
route::get('/dash/teste', [HomeController::class, 'dash'])->name('dash.teste');


// Serviços
Route::get('/servico/cabelo', [ServicoController::class, 'servicoCabelo'])->name('servicoCabelo');
Route::get('/servico/maquiagem', [ServicoController::class, 'servicoMaquiagem'])->name('servicoMaquiagem');
Route::get('/servico/barba', [ServicoController::class, 'servicoBarba'])->name('servicoBarba');
Route::get('/servico/cilios', [ServicoController::class, 'servicoCilios'])->name('servicoCilios');
Route::get('/servico/massagem', [ServicoController::class, 'servicoMassagem'])->name('servicoMassagens');
Route::get('/servico/unhas', [ServicoController::class, 'servicoUnha'])->name('servicoUnhas');
Route::get('/servico/rosto', [ServicoController::class, 'servicoRosto'])->name('servicoRosto');
Route::get('/servico/depilacao', [ServicoController::class, 'servicoDepilacao'])->name('servicoDepilacoes');
Route::get('/servico/sobrancelhas', [ServicoController::class, 'servicoSobrancelha'])->name('servicoSobrancelhas');


// Rotas contato enviar/salvar
route::post('/contato/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');
route::post('/contatos/newsLetter', [ContatoController::class, 'salvarNoemail'])->name('newsletter.salvar');






// Rotas com middleware
// Dashboard cliente
Route::middleware(['autenticacao:cliente'])->group(function(){


    Route::get('/cliente',[ClienteController::class,'index'])->name('dashboard.cliente');


    Route::get('/agendar',[ClienteController::class,'agendar'])->name('dashboard.agendar');

    // Rota AJAX
    Route::get('/agendar-cabelo', [ServicoController::class, 'AjaxCabelo'])->name('ajax.cabelo');


    Route::get('/servicos', function () {
        $servicos = ServicosModel::all();
        return response()->json($servicos);
    });

    Route::get('/servicos',[ServicoController::class, 'indexServico']);


});
 
Route::middleware(['autenticacao:Administrador'])->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('dashboard.funcionarios.admin');
    Route::get('dash/admin/func', [AdminController::class, 'indexFunc'])->name('dashboard.admin.func.index');
    Route::get('dash/admin/func/criar', [AdminController::class, 'createFunc'])->name('dashboard.admin.func.create');
    Route::post('dash/admin/func/cadastrar', [AdminController::class, 'cadFunc'])->name('dashboard.admin.func.cad');
});


Route::middleware(['autenticacao:Esteticista'])->group(function(){
    Route::get('/esteticista',[EsteticaController::class,'index'])->name('dashboard.funcionarios.estetica');
});





// Rota de login de usuario
Route::post('/login', [LoginController::class, 'autenticar'])->name('login.autenticar');

// Rota de cadastro de usuário
Route::post('/', [CadastroController::class, 'cadastroCliente'])->name('cadastro.store');

route::get('/sair', function(){
    session()->flush();
    return redirect('/');
})->name('sair');
// rota para limpar a e voltar para a página home
