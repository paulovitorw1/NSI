<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioPermissao extends Model
{
    protected $table = 'usuario_permissao';
    protected $primaryKey = 'idusuario_permissao';
    
    CONST CREATED_AT = 'data_de_criacao';
    CONST UPDATED_AT = 'data_atualizacao';
    
    protected $guarded = [];
}
