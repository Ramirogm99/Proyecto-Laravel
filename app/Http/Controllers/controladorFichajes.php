<?php

namespace App\Http\Controllers;

use App\Models\Fichaje as ModelsFichaje;
use Illuminate\Http\Request;



class controladorFichajes extends Controller
{
    public function __construct(ModelsFichaje $fichaje){
        $this->ModelsFichaje = $fichaje;
        
    }

    public function index($userId){
        $fichajes = $this->controladorFichajes->SacarTodo($userId);
        return view('dashboard', ['Fichajes' => $fichajes]);
    }

    public function edit($id){

        $fichaje = $this->ModelsFichaje->findById($id);
        return view('Fichajes.editar', ['fichaje' => $fichaje], ['id' => $id]);

    }

    public function SacarTodo($userId){
        $fichajes = $this->ModelsFichaje->findAll($userId);
        return $fichajes;
    }

    public function update(Request $request, $id){
        $fichaje = ModelsFichaje::find($id);
        $fichaje->fill($request->all());
        $fichaje->save();
        return redirect()->action([controladorFichajes::class, 'index']);
    }

    public function deleteFichaje($id){
        $fichaje = ModelsFichaje::find($id);
        $fichaje->delete();
    }

    public function crearFichaje(Array $data){
        $fichaje = new ModelsFichaje;
        $fichaje -> user_id = $data['user_id'];
        $fichaje -> workplace_id = $data['workplace_id'];
        $fichaje -> entry_date = date('d-m-y h:i:s');
        
        $fichaje->save();
    }

}
