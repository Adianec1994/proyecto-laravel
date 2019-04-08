<?php

namespace App\Http\Controllers\Reportes;

use App\Cobertura;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;

class ReporteController extends Controller
{
    public function reporteCobertura(){
        $cob = Cobertura::all();
        $date = date('Y-m-d');
        $view =  \View::make('reportes.coberturas-combustible', compact('cob', 'date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('informe.pdf');

        //$pdf = PDF::loadView('reportes.rproductosPorProveedor',compact('categorias'));

    }
}
