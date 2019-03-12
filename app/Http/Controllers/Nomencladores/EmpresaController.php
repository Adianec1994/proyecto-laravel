<?php

namespace App\Http\Controllers\Nomencladores;

use App\Empresa;
use App\Http\Requests\EmpresaRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa=Empresa::all();
        return view('nomencladores.empresa.index')
            ->with('empresas',$empresa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nomencladores.empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaRequest $request)
    {
        Empresa::create($request->all());

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
    public function edit(Request $request, $id)
    {
        $emp=Empresa::findOrFail($id);
        return view('nomencladores.empresa.edit')->with('emp',$emp);
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
       // return response()->json('hola estoy en el update'.$id);
        $emp = Empresa::find($id);
        $emp->fill($request->all());
        $emp->save();

        return response()->json([
            "mensaje" =>"listo"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp=Empresa::findOrFail($id);
            $emp->delete();
            $emp=Empresa::all();
            return view('nomencladores.empresa.index')
                ->with('empresas',$emp);

    }

}
