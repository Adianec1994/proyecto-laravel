<?php

namespace App\Http\Controllers\Nomencladores;

use App\Bateria;
use App\CentralElectrica;
use App\Estado;
use App\Http\Requests\GrupoRequest;
use App\Provincia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Grupo;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provin= Provincia::all()->where('activo',true);
        $cent = CentralElectrica::all()->where('activo',true);
        $bat = Bateria::all()->where('activo',true);
        $est = Estado::all()->where('activo',true);
        $grupo=Grupo::all()->where('activo',true);
        return view('nomencladores.grupo.index')->with('provin',$provin)
            ->with('grupos',$grupo)->with('cent',$cent)->with('bat',$bat)
            ->with('est',$est);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bat = Bateria::all()->where('activo',true);
        $est = Estado::all()->where('activo',true);
        return view('nomencladores.grupo.create')->with('bat',$bat)
            ->with('est',$est);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrupoRequest $request)
    {
        Grupo::create($request->all());
        return 'grupo';
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
        $provin = Provincia::all();
        $cent = CentralElectrica::all();
        $bat = Bateria::all();
        $est = Estado::all();
        $grup =Grupo::find($id);
        $grup->cent;
        $grup->bat;
        $grup->est;
        $grup->provin;
        return view('nomencladores.grupo.edit')->with('grup',$grup)
            ->with('bat',$bat)->with('est',$est)->with('cent',$cent)
            ->with('provin',$provin);
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
        $grup = Grupo::find($id);
        $grup->update($request->all());
        return 'grupo';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grupo=Grupo::find($id);
        $grupo->activo=false;
        $grupo->save();
        return 'grupo';
    }
}
