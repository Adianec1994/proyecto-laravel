<?php

namespace App\Http\Controllers\Nomencladores;

use App\Http\Requests\BateriaRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bateria;
use App\Empresa;
use App\CentralElectrica;
use App\Provincia;


class BateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bat=Bateria::all()->where('activo',true);
        return view('nomencladores.bateria.index')
            ->with('baterias',$bat);
    }

    /*public function getDatos(Request $request, $id){
        if ($request->ajax()){
          $provincia = Provincia::find($id);
          $dato = $provincia->centralElectricas;
            return response()->json($dato);
        }
    }*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provin = Provincia::all()->where('activo',true);
        $cent = CentralElectrica::all()->where('activo',true);
        return view('nomencladores.bateria.create')->with('provin',$provin)
            ->with('cent',$cent);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BateriaRequest $request)
    {
        Bateria::create($request->all());
        return 'bateria';

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

        $cent = CentralElectrica::all()->where('activo',true);
        $provin = Provincia::all();
        $bat=Bateria::find($id);
        $bat->cent;
        $bat->provin;

        return view('nomencladores.bateria.edit')->with('cent',$cent)
            ->with('bat',$bat)->with('provin',$provin);
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
        $bat = Bateria::find($id);
        $bat->update($request->all());
        return 'bateria';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bat=Bateria::find($id);
        $bat->activo=false;
        $bat->save();
        return 'bateria';
    }
}
