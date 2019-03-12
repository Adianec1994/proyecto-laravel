<?php

namespace App\Http\Controllers\Nomencladores;

use App\Cobertura;
use App\Http\Requests\CentralRequest;
use App\Provincia;
use App\Tecnologia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CentralElectrica;

class CentralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provin = Provincia::all();
        $tecno = Tecnologia::all();
        $cob = Cobertura::all();
        $central=CentralElectrica::all();
        return view('nomencladores.central.index')
            ->with('central_electricas',$central)->with('provin',$provin)
            ->with('tecno',$tecno)->with('cob',$cob);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provin = Provincia::all();
        $tecno = Tecnologia::all();
        $cob = Cobertura::all();
        return view('nomencladores.central.create')->with('provin',$provin)
            ->with('tecno',$tecno)->with('cob',$cob);
    }

/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CentralRequest $request)
    {

        CentralElectrica::create($request->all());

        /*  dd($request->all());
        if ($request->get('s_metodo') == 'PUT') {
            $cent = CentralElectrica::findOrFail($request->get('s_id'));
            $cent->nombre = $request->get('s_nombre');
            $cent->cantidad_baterias = $request->get('s_cantidad_baterias');
            $cent->potIndispTM = $request->get('s_potIndispTM');
            $cent->idProvincias = $request->get('s_provincia');
            $cent->idEmpresas = $request->get('s_empresa');
            $cent->idDatosGenerales = $request->get('s_datosgen');
            $cent->idTecnologias = $request->get('s_tecnologia');
            $cent->idCoberturas = $request->get('s_cobertura');
            $cent->update();
            $central = CentralElectrica::all();
            return response()->json(view('nomencladores.central.index')
                ->with('central_electricas', $central)->render());
        } else {

            $cent = new CentralElectrica();
            $cent->nombre = $request->get('s_nombre');
            $cent->cantidad_baterias = $request->get('s_cantidad_baterias');
            $cent->potIndispTM = $request->get('s_potIndispTM');
            $cent->idProvincias = $request->get('s_provincia');
            $cent->idEmpresas = $request->get('s_empresa');
            $cent->idDatosGenerales = $request->get('s_datosgen');
            $cent->idTecnologias = $request->get('s_tecnologia');
            $cent->idCoberturas = $request->get('s_cobertura');
            $cent->save();
            $central = CentralElectrica::all();
            return response()->json(view('nomencladores.central.index')
                ->with('central_electricas', $central)->render());
        } */
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
        $tecno = Tecnologia::all();
        $cob = Cobertura::all();
        $cent=CentralElectrica::findOrFail($id);
        $cent->tecnologia;
        $cent->provincia;
        $cent->cobertura;

        return view('nomencladores.central.edit')->with('provin',$provin)
            ->with('tecno',$tecno)->with('cob',$cob)->with('cent',$cent);
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

       $cent = CentralElectrica::find($id);
       $cent->fill($request->all());
       $cent->save();
        return view('nomencladores.central.index')
            ->with('central_electricas',$cent);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cent=CentralElectrica::findOrFail($id);
        $cent->delete();
        $cent=CentralElectrica::all();
        return view('nomencladores.central.index')
            ->with('central_electricas',$cent);
    }
}
