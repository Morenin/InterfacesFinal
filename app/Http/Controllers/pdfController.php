<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cicle;
use PDF;
use App\offer;
use App\applied;

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
        if(sizeof($ofertas)==0){
            return back()->with('message',__("No hay Ofertas en este año"));
        }
        $ciclos = cicle::all();
        $pdf=PDF::loadView('PDF.ofertas',compact('ciclos','ofertas'));
        return $pdf->download('Ofertas.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        if(request()->ciclo==null){
            return back()->with('message', __("No has seleccionado ningun ciclo"));
        }
        elseif(request()->ofertas==null){
            return back()->with('message',__("No has seleccionado niguna oferta"));
        }
        else{

            $offer_id=request()->ofertas;
            $applieds = applied::where('offer_id', $offer_id)->get();
            $pdf=PDF::loadView('PDF.alumnos', compact('applieds'));
            return $pdf->download('Alumnos.pdf');
        }
    }

    public function byCiclo($id){
        $ofertas=offer::where('cicle_id',$id)->get();
        return $ofertas;
    }

}
