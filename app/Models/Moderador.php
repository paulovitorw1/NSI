<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moderador extends Model
{
    protected $table = 'denuncia';
    protected $primaryKey = 'id_denuncia';
    
    CONST CREATED_AT = 'data_de_criacao';
    CONST UPDATED_AT = 'data_atualizacao';
    
    protected $guarded = [];
}
