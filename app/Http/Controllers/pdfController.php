<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cicle;
use PDF;
use App\offer;

class pdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('PDF.indexOferta');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $ciclos = cicle::all();
        return view('PDF.indexAlumno',compact('ciclos'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $año=request()->año;
        $añoIni=((string)$año."-09-01");
        $añoFin=((string)($año+1)."-08-31");
        $ofertas=offer::whereBetween('created_at',array($añoIni,$añoFin))->get();
        $ciclos = cicle::all();
        $pdf=PDF::loadView('PDF.ofertas',compact('ciclos','ofertas'));
        return $pdf->download('Ofertas.pdf');
        // $snappy->generateFromHtml($html, 'Ofertas.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        $pdf=PDF::loadView('PDF.ofertas');
        return $pdf->download('Ofertas.pdf');
    }

}
