<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    public $timestamps = false;
    
    use HasFactory;
    protected $table = 'livro';    

    public function rules(){
        return [
            'titulo' => 'required',
            'anoDeLancamento' => 'required',~
            'id_autor' => 'required',
            'id_genero' => 'required',
            'id_editora' => 'required'
        ];
    }

    public function feedback(){
        return [
            'required' => 'O campo :attribute é obrigatório'
        ];
    }
    
}
