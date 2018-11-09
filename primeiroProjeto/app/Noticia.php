<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    //@var array
    
    protected $fillable = [
        'titulo', 'descricao', 'imagem',
    ];
}
