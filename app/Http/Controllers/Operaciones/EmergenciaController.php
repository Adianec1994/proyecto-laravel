<?php

namespace App\Http\Controllers\Operaciones;

use App\Emergencia;
use App\Provincia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmergenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provin = Provincia::all()->where('activo',true);
        $emer = Emergencia::all();
        return view('operaciones.emergencia.index')
            ->with('emergencias',$emer)->with('provincias',$provin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provin = Provincia::all()->where('activo',true);
        $emer = Emergencia::all();
        return view('operaciones.emergencia.create')
            ->with('emergencias',$emer)->with('provincias',$provin);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Emergencia::create($request->all());
        return 'emergencia';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Emergencia  $emergencia
     * @return \Illuminate\Http\Response
     */
    public function show(Emergencia $emergencia)
    {
        //
    }

    public function emergenciaPorProvincias($idProvincias)
    {
        $emer=Emergencia::all()->where('idProvincias',$idProvincias);
        return view('operaciones.emergencia.emergencias',
            compact('emer'))->render();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Emergencia  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provin = Provincia::all()->where('activo',true);
        $emer =Emergencia::find($id);
        $emer->provin;
        return view('operaciones.emergencia.edit')->with('emer',$emer)
            ->with('provin',$provin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Emergencia  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $emer = Emergencia::find($id);
        $emer->update($request->all());
        return 'emergencia';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Emergencia  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
