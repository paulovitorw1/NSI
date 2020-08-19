<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    
    CONST CREATED_AT = 'data_de_criacao';
    CONST UPDATED_AT = 'data_atualizacao';
    
    protected $guarded = [];
}
