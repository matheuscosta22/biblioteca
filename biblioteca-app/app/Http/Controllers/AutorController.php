<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function __construct(Autor $autor){
        $this->autor = $autor;
    }

    public function add(Request $request){

        try{
            $autor = new Autor();
            $autor->nome = $request->nome;
            $autor->anoDeNascimento = $request->anoDeNascimento;
            $autor->sexo = $request->sexo;
            $autor->nacionalidade = $request->nacionalidade;
            $autor->save();
            return $autor;

        }catch(\Exception $erro){
            return $erro;
        }
    }

    public function list(){

        $autor = Autor::all();

        return $autor;
    }

    public function select($id){
        $autor = Autor::find($id);
        return $autor;
    }

    public function update(Request $request ,$id){
      try{  
 
        $autor = Autor::find($id);
        $autor->nome = $request->nome;
        $autor->anoDeNascimento = $request->anoDeNascimento;
        $autor->sexo = $request->sexo;
        $autor->nacionalidade = $request->nacionalidade;

        $autor->save();
        return $autor;
      }catch(\Exception $erro){
        return $erro;
      } 
    }

    public function delete($id){
    try{  
        $autor = Autor::find($id);
        $autor->delete();
       }catch(\Exception $erro){
           return $erro;
       }
    }
}
