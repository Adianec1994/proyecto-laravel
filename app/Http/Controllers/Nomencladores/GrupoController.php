<?php

namespace App\Http\Controllers\Nomencladores;

use App\Bateria;
use App\CentralElectrica;
use App\Http\Requests\GrupoRequest;
use App\Potencia;
use App\Provincia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Grupo;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupo=Grupo::all();
        return view('nomencladores.grupo.index')
            ->with('grupos',$grupo);
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
        $bat = Bateria::all();
        $pot = Potencia::all();
        return view('nomencladores.grupo.create')->with('provin',$provin)
            ->with('cent',$cent)->with('bat',$bat)->with('pot',$pot);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrupoRequest $request)
    {
        Grupo::create($request->all());
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
        $bat = Bateria::all();
        $pot = Potencia::all();
        $grup=Grupo::findOrFail($id);
        return view('nomencladores.grupo.edit')->with('grup',$grup)->with('provin',$provin)
            ->with('cent',$cent)->with('bat',$bat)->with('pot',$pot);
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
        $grup = Grupo::find($id);
        $grup->fill($request->all());
        $grup->save();
        return view('nomencladores.grupo.index')
            ->with('grupos',$grup);
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
