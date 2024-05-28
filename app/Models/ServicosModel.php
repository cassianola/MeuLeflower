<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicosModel extends Model
{
    protected $table = 'tblservicos';

    protected $primaryKey = 'idServico';

    protected $fillable = [
        'tipoServico',
        'nomeServico',
        'duracaoServico',
        'descricaoServico',
        'valorServico',
    ];

}
