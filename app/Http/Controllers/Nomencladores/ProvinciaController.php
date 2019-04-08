<?php

namespace App\Http\Controllers\Nomencladores;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Provincia;
use App\Http\Requests\ProvinciaRequest;
use Illuminate\Routing\Route;


class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provincia = Provincia::all()->where('activo',true);
        return view('nomencladores.provincia.index')
            ->with('provincias', $provincia);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nomencladores.provincia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProvinciaRequest $request)
    {
        Provincia::create($request->all());
        return 'provincia';
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $provin=Provincia::find($id);
        return view('nomencladores.provincia.edit')->with('prov',$provin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $provin = Provincia::find($id);
        $provin->update($request->all());
        return 'provincia';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prov=Provincia::find($id);
        $prov->activo=false;
        $prov->save();
        return 'provincia';

    }

}
