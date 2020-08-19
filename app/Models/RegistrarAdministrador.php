<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrarAdministrador extends Model
{
    protected $table = 'usuario';

    CONST CREATED_AT = 'data_de_criacao';
    CONST UPDATED_AT = 'data_atualizacao';

    protected $guarded = [];
}
