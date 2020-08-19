<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    protected $table = 'resposta_denuncia';
    
    CONST CREATED_AT = 'data_de_criacao';
    CONST UPDATED_AT = 'data_atualizacao';
    
    protected $guarded = [];
}


