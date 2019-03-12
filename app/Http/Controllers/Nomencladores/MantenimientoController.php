<?php

namespace App\Http\Controllers\Nomencladores;

use App\Http\Requests\MantenimientoRequest;
use App\TiposIndisponibilidad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TipoMantenimiento;


class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mantenimiento=TipoMantenimiento::all();
        return view('nomencladores.mantenimiento.index')
            ->with('tipomantenimientos',$mantenimiento);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nomencladores.mantenimiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MantenimientoRequest $request)
    {
        $test=$request->get('_method');
        return response()->json($test);

    /*  $mtto=TipoMantenimiento::all();
        TipoMantenimiento::create($request->all());
        return response()->json(view('nomencladores.mantenimiento.index')
            ->with('tipomantenimientos', $mtto)->render());*/


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mtto=TipoMantenimiento::find($id);
        return view('nomencladores.mantenimiento.edit',
            compact('mtto'))->render();
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

        //prueba
      /* $mtto=TipoMantenimiento::find($id);
       $mtto->tipo=$request->get('tipo');
       $mtto->save();
        return view('nomencladores.mantenimiento.index')
            ->with('tipomantenimientos',$mtto);*/

      /*  $mantenimiento=TipoMantenimiento::all();
        TipoMantenimiento::update($request->all());
        return response()->json(view('nomencladores.mantenimiento.index')
            ->with('tipomantenimientos', $mantenimiento)->render());*/

       /* $mtto = TipoMantenimiento::find($id);
        $mtto->update($request->all());
        return view('nomencladores.mantenimiento.index')
            ->with('tipomantenimientos',$mtto);*/

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $mtto=TipoMantenimiento::findOrFail($id);
        $mtto->delete();
        $mtto=TipoMantenimiento::all();
        return view('nomencladores.mantenimiento.index')
            ->with('tipomantenimientos',$mtto);
    }
}
