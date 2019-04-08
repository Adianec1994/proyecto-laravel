<?php

namespace App\Http\Controllers\Operaciones;

use App\CentralElectrica;
use App\Cobertura;
use App\Provincia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoberturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $central = CentralElectrica::all()->where('activo',true);
        $cob = Cobertura::all();
        return view('operaciones.cobertura.index')
            ->with('coberturas',$cob)->with('central_electricas',$central);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $central = CentralElectrica::all()->where('activo',true);
        $cob = Cobertura::all();
        return view('operaciones.cobertura.create')
            ->with('coberturas',$cob)->with('central_electricas',$central);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cobertura::create($request->all());
        return 'cobertura';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$cob=Cobertura::find($id);
        return view('operaciones.cobertura.show',
            compact('cob'))->render();*/
    }

    public function coberturasPorCentrales($idCElectricas)
    {

        $cober=Cobertura::all()->where('idCElectricas',$idCElectricas);
        return view('operaciones.cobertura.coberturas',
            compact('cober'))->render();

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
        $cob=Cobertura::find($id);
        $cob->cent;
        return view('operaciones.cobertura.edit')->with('cob',$cob)
            ->with('cent',$cent);
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
        $cob = Cobertura::find($id);
        $cob->update($request->all());
        return 'cobertura';
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
