<?php

namespace App\Http\Controllers\Operaciones;

use App\CentralElectrica;
use App\Paila;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PailaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cent = CentralElectrica::all()->where('activo',true);
        $pail = Paila::all();
        return view('operaciones.paila.index')
            ->with('pailas',$pail)->with('central_electricas',$cent);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cent = CentralElectrica::all()->where('activo',true);
        $pail = Paila::all();
        return view('operaciones.paila.create')
            ->with('pailas',$pail)->with('central_electricas',$cent);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Paila::create($request->all());
        return 'paila';
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

    public function pailasPorCentrales($idCElectricas)
    {

        $pail=Paila::all()->where('idCElectricas',$idCElectricas);
        return view('operaciones.paila.pailas',
            compact('pail'))->render();

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cent = CentralElectrica::all()->where('activo',true);
        $pail=Paila::find($id);
        $pail->cent;
        return view('operaciones.paila.edit')->with('pailas',$pail)
            ->with('central_electricas',$cent);
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
        $pail = Paila::find($id);
        $pail->update($request->all());
        return 'paila';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
