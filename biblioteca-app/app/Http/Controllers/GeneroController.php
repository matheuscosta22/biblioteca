<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GeneroController extends Controller
{

    public function __construct(Genero $genero){
        $this->genero = $genero;
    }
    
    public function add(Request $request){

        try{
            $genero = new Genero();
            $genero->nome = $request->nome;

            $genero->save();
            return $genero;

        }catch(\Exception $erro){
            return $erro;
        }
    }

    public function list(){

        $genero = Genero::all();

        return $genero;
    }

    public function select($id){
        $genero = Genero::find($id);
        return $genero;
    }

    public function update(Request $request ,$id){
      try{  
        $genero = Genero::find($id);
        $genero->nome = $request->nome;

        $genero->save();
        return $genero;
      }catch(\Exception $erro){
        return $erro;
      } 
    }

    public function delete($id){
    try{  
        $genero = Genero::find($id);
        $genero->delete();
       }catch(\Exception $erro){
           return $erro;
       }
    }
}
