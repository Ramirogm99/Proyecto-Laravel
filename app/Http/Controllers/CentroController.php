<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Centro;

class CentroController extends Controller
{
    public function index()
    {
        $centros = Centro::all();
        return view('registro', ['centros' => $centros]);
    }

    public function show($id)
    {
        $centro = Centro::find($id);
        return view('registro', ['centros' => $centro]);
    }

    public function edit($id)
    {
        $centro = Centro::find($id);
        return view('centro.editar', ['centro' => $centro], ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        $centro = Centro::find($id);
        $centro->fill = $request->all();
        $centro->save();
        return redirect()->action([CentroController::class, 'index']);
    }

    public function create($name)
    {
        $centro = new CentroController;
        $centro->name = $name;
        $centro->save();
    }

    public function delete($id)
    {
        $centro = Centro::find($id);
        $centro->delete();
    }

    public function deleteAll($id)
    {
        $centro = Centro::find($id);
        $centro = Centro::find(['id' => $id]);
        $centro->delete();
    }
}
