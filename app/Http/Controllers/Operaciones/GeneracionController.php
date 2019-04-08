<?php

namespace App\Http\Controllers\Operaciones;

use App\Generacione;
use App\Grupo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeneracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grup = Grupo::all()->where('activo',true);
        $gener = Generacione::all();
        return view('operaciones.generacion.index')
            ->with('generaciones',$gener)->with('grupos',$grup);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grup = Grupo::all()->where('activo',true);
        $gener = Generacione::all();
        return view('operaciones.generacion.create')
            ->with('generaciones',$gener)->with('grupos',$grup);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Generacione::create($request->all());
        return 'generacion';
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

    public function generacionPorGrupos($idGrupos)
    {

        $gener=Generacione::all()->where('idGrupos',$idGrupos);
        return view('operaciones.generacion.generaciones',
            compact('gener'))->render();

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grup = Grupo::all()->where('activo',true);
        $gener=Generacione::find($id);
        $gener->grup;
        return view('operaciones.generacion.edit')->with('gener',$gener)
            ->with('grup',$grup);
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
        $gener = Generacione::find($id);
        $gener->update($request->all());
        return 'generacion';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
