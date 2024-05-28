<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'tblusuarios';
    protected $primaryKey = 'idUsuario';

    public function tipo_usuario()
    {
        return $this->morphTo('tipo_usuario','tipoUsuario_type','tipoUsuario_id');
    }
}
