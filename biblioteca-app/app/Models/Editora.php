<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    public $timestamps = false;

    protected $table = 'editora';
/*
    public function rules(){
        return [
            'nome' => 'required'
        ];
    }

    public function feedback(){
        return [
            'required' => 'O campo :attribute é obrigatório'
        ];
    }
*/
    public function livros(){
        return $this->hasMany(Livro::class, 'id_editora', 'id');
    }
}
