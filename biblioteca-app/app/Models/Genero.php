<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    public $timestamps = false;
    
    use HasFactory;
    protected $table = 'genero';

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

    public function livros(){
       return $this->hasMany(Livro::class, 'id_genero', 'id');
    }
}
