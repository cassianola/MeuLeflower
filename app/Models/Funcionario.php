<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = 'tblfuncionarios';
    protected $primaryKey = 'idFuncionario';

    protected $fillable = [
        'nomeFuncionario', 'emailFuncionario', 'dataNascFuncionario', 'telefoneFuncionario',
        'senhaFuncionario', 'salarioFuncionario', 'enderecoFuncionario', 'nivelFuncionario',
        'statusFuncionario', 'cargoFuncionario', 'idEspecialidade'
    ];

      // Informa ao Eloquent quais são as colunas personalizadas para created_at e updated_at
      const CREATED_AT = 'created_at';
      const UPDATED_AT = 'updated_at';

    public function usuario(){
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }
}

