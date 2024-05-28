<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id('idFuncionario');
            $table->string('nomeFuncionario', 100); // Aumentado o tamanho
            $table->date('dataNascFuncionario'); // Usando date em vez de dateTime
            $table->string('emailFuncionario', 100)->unique(); // Adicionado unique
            $table->string('telefoneFuncionario', 20); // Aumentado o tamanho
            $table->string('senhaFuncionario'); // Removido limite de tamanho
            $table->decimal('salarioFuncionario', 10, 2); // Usando decimal para precisão financeira
            $table->string('enderecoFuncionario', 100); // Aumentado o tamanho
            $table->string('nivelFuncionario', 50); // Aumentado o tamanho
            $table->enum('statusFuncionario', ['ATIVO', 'INATIVO']);
            $table->string('cargoFuncionario', 50); // Aumentado o tamanho
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
