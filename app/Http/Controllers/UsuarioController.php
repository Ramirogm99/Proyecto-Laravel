<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    protected $usuarioModel;

    public function __construct(Usuario $usuario){
        $this->usuarioModel = $usuario;
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuario = $this -> usuario->mostrarTodo();
        return view('dashboard',['usuarios'=>$usuario]);
    }
    /**
     * Saca todos los usuarios
     * 
     */
    public function mostrarTodo()
    {
        $usuario = $this->usuario->findAll();
        return $usuario;
    }
    /**
     * Saca el usuario del id especifico
     *
     * @param [type] $id
     * @return void
     */
    public function mostrarUsuario($id){
        $usuario = $this->usuario->find(['id'=>$id]);
        return $usuario;
    }

    /**
     * te devuevle una vista para poder editar el usuario
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editarUsuario($id)
    {   
        $usuario = $this->usuario->mostrarUsuario($id);
        return view('usuario.editar',['usuario'=>$usuario], ['id' => $id]);
    }

    /**
     * actualiza y te manda a la accion del usuario
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = $this->usuarioModel::mostrarUsuario($id);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect()->action([UsuarioController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = $this->usuarioModel::find($id);
        $usuario = $this->usuario->findBy(['id'=>$id]);
        $usuario->delete();
    }
}
