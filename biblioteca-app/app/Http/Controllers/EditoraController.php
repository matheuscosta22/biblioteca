<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editora;

class EditoraController extends Controller
{
    

    public function add(Request $request){

        try{
            $editora = new Editora();
            $editora->nome = $request->nome;

            $editora->save();
            return $editora;

        }catch(\Exception $erro){
            return $erro;
        }

    }

    public function list(){

        $editora = Editora::all();

        return $editora;
    }

    public function select($id){
        $editora = Editora::find($id);
        return $editora;
    }

    public function update(Request $request ,$id){
      try{  
        $editora = Editora::find($id);
        $editora->nome = $request->nome;

        $editora->save();
        return $editora;
      }catch(\Exception $erro){
        return $erro;
      } 
    }

    public function delete($id){
    try{  
        $editora = Editora::find($id);
        $editora->delete();
       }catch(\Exception $erro){
           return $erro;
       }
    }
}
