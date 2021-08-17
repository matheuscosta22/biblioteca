<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livro;

class LivroController extends Controller
{

    public function __construct(livro $livro){
        $this->livro = $livro;
    }

    public function add(Request $request){

        try{
            $livro = new livro();
            $livro->titulo = $request->titulo;
            $livro->anoDeLancamento = $request->anoDeLancamento;
            $livro->id_autor = $request->id_autor;
            $livro->id_genero = $request->id_genero;
            $livro->id_editora = $request->id_editora;

            $livro->save();
            return $livro;

        }catch(\Exception $erro){
            return $erro;
        }
    }

    public function list(){

        $livro = livro::all();

        return $livro;
    }

    public function select($id){
        $livro = livro::find($id);
        return $livro;
    }

    public function update(Request $request ,$id){
      try{  
        $livro = livro::find($id);
        $livro->titulo = $request->titulo;
        $livro->anoDeLancamento = $request->anoDeLancamento;
        $livro->id_autor = $request->id_autor;
        $livro->id_genero = $request->id_genero;
        $livro->id_editora = $request->id_editora;

        $livro->save();
        return $livro;
      }catch(\Exception $erro){
        return $erro;
      } 
    }

    public function delete($id){
    try{  
        $livro = livro::find($id);
        $livro->delete();
       }catch(\Exception $erro){
           return $erro;
       }
    }
}
