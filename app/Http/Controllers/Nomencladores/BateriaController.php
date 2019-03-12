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
        $bateria=Bateria::all();
        return view('nomencladores.bateria.index')
            ->with('baterias',$bateria);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provin = Provincia::all();
        $cent = CentralElectrica::all();
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

        /*if ($request->get('s_metodo') == 'PUT') {
            $bat = Bateria::findOrFail($request->get('s_id'));
            $bat->numero = $request->get('s_numero');
            $bat->cantidad_grupos = $request->get('s_cantidad_grupos');
            $bat->idProvincias = $request->get('s_provincia');
            $bat->idEmpresas = $request->get('s_empresa');
            $bat->idCElectricas = $request->get('s_centrales');
            $bat->update();
            $bateria = Bateria::all();
            return response()->json(view('nomencladores.bateria.index')
                ->with('baterias', $bateria)->render());
        } else {

            $bat = new Bateria();
            $bat->numero = $request->get('s_numero');
            $bat->cantidad_grupos = $request->get('s_cantidad_grupos');
            $bat->idProvincias = $request->get('s_provincia');
            $bat->idEmpresas = $request->get('s_empresa');
            $bat->idCElectricas = $request->get('s_centrales');
            $bat->save();
            $bateria = Bateria::all();
            return response()->json(view('nomencladores.bateria.index')
                ->with('baterias', $bateria)->render());
        }*/
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
        $cent = CentralElectrica::all();
        $bat=Bateria::findOrFail($id);
        return view('nomencladores.bateria.edit')->with('bat',$bat)->with('provin',$provin)
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
        $bat = Bateria::find($id);
        $bat->fill($request->all());
        $bat->save();
        return view('nomencladores.bateria.index')
            ->with('baterias',$bat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
