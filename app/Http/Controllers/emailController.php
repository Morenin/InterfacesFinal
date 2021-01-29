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
        if(strpos($correos,',') || strpos($correos,':')){
            return back()->with('message',__("El caracter para separar los correos es ';', por favor asegurese de que ha introducido el correcto"));
        }else{
            $pos= strpos($correos,';');
            if ( $pos === false ){
                if(self::check_email_address($correos)){
                    $CFinal=$correos;
                }else{
                    return back()->with('message',__("El correo introducido no es valido"));
                }
                
            }
            else{
                $CFinal=explode(";", $correos);
                if(!self::check_all_address($CFinal)){
                    return back()->with('message',__("Algun correo introducido no es valido"));
                }
                
            }
            $data=[
                'emailto'=>$CFinal,
                'subject'=>request()->asunto,
                'content'=>request()->mensaje
            ];
            
            Mail::send('email.vistaEmail', $data, function ($message) use($data) {
                $message->from('micorreo@gmail.com');
                $message->to($data['emailto'])->subject($data['subject']);
                if(!request()->file==null){
    
                    $message->attach(request()->file('file')->getRealPath(), ['as'=> request()->file('file')->getClientOriginalName(), 'mime'=>request()->file('file')->getMimeType()]);
                }
            });
            return back()->with('success',__("Correo enviado"));
        }

        
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
    public function check_all_address($emails)
    {
        $cont=0;
        foreach($emails as $email){
            if(self::check_email_address($email)){
                $cont+=1;
            }
        }
        if($cont==sizeof($emails)){
            return true;
        }
        else{
            return false;
        }
    }

    function check_email_address($email) 
    {
        return filter_var($email,FILTER_VALIDATE_EMAIL);
    }
}
