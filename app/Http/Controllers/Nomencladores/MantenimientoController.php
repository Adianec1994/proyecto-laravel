<?php

namespace App\Http\Controllers\Nomencladores;

use App\Http\Requests\MantenimientoRequest;
use App\Estado;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TipoMantenimiento;
use Illuminate\Http\Response;


class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mantenimiento=TipoMantenimiento::all()->where('activo',true);
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
        TipoMantenimiento::create($request->all());
        return 'mantenimiento';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mtto=TipoMantenimiento::find($id);
        return view('nomencladores.mantenimiento.edit',
            compact('mtto'))->render();
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

        $mtto = TipoMantenimiento::find($id);
        $mtto->update($request->all());
        return 'mantenimiento';

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $mtto=TipoMantenimiento::find($id);
        $mtto->activo=false;
        $mtto->save();
        return 'mantenimiento';
    }
}
