<?php

namespace abraham1\Http\Controllers;

use abraham1\church;
use Illuminate\Http\Request;
use abraham1\Http\Requests\ChurchRequest;
use App\Http\Requests\IglesiaValidacion;



class ChurchController extends Controller
{

     /* Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('church.create');
    }

    public function guardar(ChurchRequest $request)
    {

     $church = new Church;
     $church->nombre = $request->input('nombre');
     $church->nit = $request->input('nit');
     $church->pastor = $request->input('pastor');
     $church->celular = $request->input('celular');
     $church->direccion = $request->input('direccion');
     $church->ciudad = $request->input('ciudad');
     $church->pais = $request->input('pais');
     $church->fecha_inicio = $request->input('fecha_inicio');
     $church->email = $request->input('email');
     $church->save();
      return redirect(route('crear'))->with('successMsg','Iglesia Creada Correctamente');
    }

    public function listar()
    {
        return view('church.lista');
    }



}
