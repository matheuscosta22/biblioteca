<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    public $timestamps = false;
    
    use HasFactory;
    protected $table = 'autor';

    public function rules(){
        return [
            'nome' => 'required',
            'anoDeNascimento' => 'required',
            'sexo' => 'required',
            'nacionalidade' => 'required'
        ];
    }

    public function feedback(){
        return [
            'required' => 'O campo :attribute é obrigatório'
        ];
    }

    public function livros(){
       return $this->hasMany(Livro::class, 'id_autor', 'id');
    }
}
