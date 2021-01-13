<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class emailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('email.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $correos=request()->email;
        $pos= strpos($correos,';');
        if ( $pos === false){
            $CFinal=$correos;
        }
        else{
            $CFinal=explode(";", $correos);
        }
        $data=[
            'emailto'=>$CFinal,
            'subject'=>request()->asunto,
            'content'=>request()->mensaje
        ];
        
        Mail::send('email.vistaEmail', $data, function ($message) use($data) {
            $message->from('micorreo@gmail.com');
            $message->to($data['emailto'])->subject($data['subject']);
            $message->attach(request()->file('file')->getRealPath(), ['as'=> request()->file('file')->getClientOriginalName(), 'mime'=>request()->file('file')->getMimeType()]);
        });
        return back();

        
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
        //
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
        //
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
