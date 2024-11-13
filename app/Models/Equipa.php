<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipa extends Model
{
    protected $fillable = [
        'name',
        'imagem',
        'slug',
        'descricao'
    ];
}
