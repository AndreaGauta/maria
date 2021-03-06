<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PersonasStoreRequest;
use App\Http\Requests\PersonasUpdateRequest;
use App\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = persona::all();
      
        return view('personas.index',compact(['personas']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonasStoreRequest $request)
    {
        Persona::create($request->all());
       // persona::create([
           //"cedula"=>$request->get('cedula'),
        //"nombre"=>$request->get('nombre'),
        //"apellido"=>$request->get('apellido'),
       // "direccion"=>$request->get('direccion'),
       // "telefono"=>$request->get('telefono'),
    //]);
    return redirect()->route('personas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::find($id);
        return view('personas.show',compact(['persona']));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::find($id);

        return view('personas.edit',compact(['persona']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonasUpdateRequest $request, $id)
    {
        $persona = Persona::find($id);
        // $persona->fill([
        // "cedula" => $request->get('cedula');
        // "nombre2 => $request->get('nombre');
        //]);

        $persona->fill($request->all());
        $persona->save();

        return redirect()->route('personas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->delete();

        return redirect()->route('personas.index');
    }

    public function delete($id)
    {
        $persona = Persona::find($id);
        return view('personas.delete',compact(['persona']));
    }
    public function prueba(){
        return response()->json([ 
            'mensaje'=>'funciona la ruta api'
        ]);
    }
}
