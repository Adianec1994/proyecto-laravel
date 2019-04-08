<?php

namespace App\Http\Controllers\Nomencladores;

use App\Http\Requests\IndisponibilidadRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TiposIndisponibilidad;

class IndisponiblidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indisponible=TiposIndisponibilidad::all()->where('activo',true);
        return view('nomencladores.indisponible.index')
            ->with('tiposindisponibilidades',$indisponible);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nomencladores.indisponible.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IndisponibilidadRequest $request)
    {
        TiposIndisponibilidad::create($request->all());
        return 'indisponible';
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
        $indisp=TiposIndisponibilidad::find($id);
        return view('nomencladores.indisponible.edit',
            compact('indisp'))->render();
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
        $indisp = TiposIndisponibilidad::find($id);
        $indisp->update($request->all());
        return 'indisponible';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $indisp=TiposIndisponibilidad::find($id);
        $indisp->activo=false;
        $indisp->save();
        return 'indisponible';
    }
}
