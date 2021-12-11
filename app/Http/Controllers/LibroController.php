<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Libro;
use App\Registro;


class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function listarPorPersona($persona_id)
    {
        $persona = Persona::find($persona_id);
        $libros = $persona->libros;
        return view('libros.index',compact(['persona','libros']));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($persona_id)
    {
        $registros = Registro::all();
        $persona = Persona::find($persona_id);

        return view('libros.create',compact(['registros','persona']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libro = Libro::create($request->all());
        return redirect()->route('libros.index',['persona_id' => $request->get('persona_id')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro = Libro::find($id);
        $persona = Persona::find($libro->persona_id);

        $registros = Registro::all();
        return view('libros.edit', compact(['libro','persona','registros']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $libro = Libro::find($id);
        $libro->fill($request->all());
        $libro->save();

        return redirect()->route('libros.index',['persona_id'=> $libro->persona_id]);
    }

    public function delete($id)
    {
        $libro = Libro::find($id);
        return view('libros.delete', compact(['libro']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro = Libro::find($id);
        $persona = Persona::find($libro->persona_id);

        $libro->delete();


        return redirect()->route('libros.index', ['persona_id' => $persona->id]);
    }
}
