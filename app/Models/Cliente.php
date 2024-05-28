<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'tblclientes';
    protected $primaryKey = 'idCliente';

    public function usuario(){
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }

}
