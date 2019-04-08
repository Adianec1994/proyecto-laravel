<?php

namespace App\Http\Controllers\Nomencladores;

use App\Http\Requests\PotenciaRequest;
use App\Potencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PotenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $potencia=Potencia::all()->where('activo',true);
        return view('nomencladores.potencia.index')
            ->with('potencias',$potencia);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nomencladores.potencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PotenciaRequest $request)
    {

        Potencia::create($request->all());
        return 'potencia';
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
        $pot=Potencia::find($id);
        return view('nomencladores.potencia.edit',
            compact('pot'))->render();
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
        $pot = Potencia::find($id);
        $pot->update($request->all());
        return 'potencia';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pot=Potencia::find($id);
        $pot->activo=false;
        $pot->save();
        return 'potencia';
    }
}
