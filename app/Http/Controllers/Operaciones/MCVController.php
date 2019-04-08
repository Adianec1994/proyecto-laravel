<?php

namespace App\Http\Controllers\Operaciones;

use App\Grupo;
use App\MCV;
use App\Trabajo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MCVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mcv = MCV::all();
        $grupo = Grupo::all()->where('activo',true);
        return view('operaciones.mcv.index',compact('mcv','grupo'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupo = Grupo::all()->where('activo',true);
        $mcv = MCV::all();
        return view('operaciones.mcv.create')
            ->with('mcv',$mcv)->with('grupos',$grupo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MCV::create($request->all());
        return 'mcv';
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

    public function trabajosPorGrupos($idGrupos)
    {
        $mcv=Grupo::find($idGrupos);
        return view('operaciones.mcv.trabajos',
            compact('mcv'))->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grupo = Grupo::all()->where('activo',true);
        $mcv=Cobertura::find($id);
        $mcv->grupo;
        return view('operaciones.cobertura.edit')->with('mcv',$mcv)
            ->with('grupo',$grupo);
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
        $mcv = MCV::find($id);
        $mcv->update($request->all());
        return 'mcv';
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
