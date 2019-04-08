<?php

namespace App\Http\Controllers\Nomencladores;


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
        $provin = Provincia::all()->where('activo',true);
        $tecno = Tecnologia::all()->where('activo',true);
        $central=CentralElectrica::all()->where('activo',true);

        return view('nomencladores.central.index')
            ->with('central_electricas',$central)->with('provin',$provin)
            ->with('tecno',$tecno);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provin = Provincia::all()->where('activo',true);
        $tecno = Tecnologia::all()->where('activo',true);
        return view('nomencladores.central.create')->with('provin',$provin)
            ->with('tecno',$tecno);
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
        return 'central';

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
        $cent=CentralElectrica::find($id);
        $cent->tecnologia;
        $cent->provincia;

        return view('nomencladores.central.edit')->with('provin',$provin)
            ->with('tecno',$tecno)->with('cent',$cent);
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
        $cent->update($request->all());
        return 'central';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cent=CentralElectrica::find($id);
        $cent->activo=false;
        $cent->save();
        return 'central';
    }
}
