<?php

namespace App\Http\Controllers\Nomencladores;

use App\Http\Requests\HechoRequest;
use App\TipoHecho;
use App\TiposIndisponibilidad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HechoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hecho=TipoHecho::all();
        return view('nomencladores.hecho.index')->with('tipohechos',$hecho);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nomencladores.hecho.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HechoRequest $request)
    {
        TipoHecho::create($request->all());
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
        $hec=TipoHecho::findOrFail($id);
        return view('nomencladores.hecho.edit')->with('hec',$hec);
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
        $hec = TipoHecho::find($id);
        $hec->fill($request->all());
        $hec->save();
        return view('nomencladores.hecho.index')
            ->with('tipohechos',$hec);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hec=TipoHecho::findOrFail($id);
        $hec->delete();
        $hec=TipoHecho::all();
        return view('nomencladores.hecho.index')
            ->with('tipohechos',$hec);
    }
}
