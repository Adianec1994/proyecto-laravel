<?php

namespace App\Http\Controllers\Nomencladores;

use App\Tecnologia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TecnologiaRequest;

class TecnologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnologia=Tecnologia::all();
        return view('nomencladores.tecnologia.index')
            ->with('tecnologias',$tecnologia);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nomencladores.tecnologia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TecnologiaRequest $request)
    {
        Tecnologia::create($request->all());
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
        $tecno=Tecnologia::findOrFail($id);
        return view('nomencladores.tecnologia.edit')->with('tecno',$tecno);
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
      /*  $tecno = Tecnologia::find($id);
        $tecno->fill($request->all());
        $tecno->save();
        return view('nomencladores.tecnologia.index')
            ->with('tecnologias',$tecno);  */
        $tecno = Tecnologia::find($id);
        $tecno->update($request->all());
        return view('nomencladores.tecnologia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tecno=Tecnologia::findOrFail($id);
        $tecno->delete();
        $tecno=Tecnologia::all();
        return view('nomencladores.tecnologia.index')
            ->with('tecnologias',$tecno);
    }
}
