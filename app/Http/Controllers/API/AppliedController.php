<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\applied;
use Validator;

class AppliedController extends Controller
{

     public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $input=$request->all();
        $validator = Validator::make($input, [
            'user_id' => 'required',
            'offer_id' => 'required'
        ]);
        if($validator->fails()){
            return response()->json(['error' => $validator->errors()], 400);
        }
        $applied = applied::create($input);
        return response()->json(['Inscrito' => $applied->toArray()], $this->successStatus);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $applieds = applied::where('user_id',$id)->get();
        if (sizeof($applieds) == 0) {
            return response()->json(['error' => 'No hay ofertas con ese usuario'], 404);
        }
        return response()->json(['Ofertas Aplicadas' => $applieds->toArray()], $this->successStatus);
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
        
    }

    public function unapplied(Request $request){

        $input=$request->all();
        $validator = Validator::make($input, [
            'user_id' => 'required',
            'offer_id' => 'required'
        ]);
        if($validator->fails()){
            return response()->json(['error' => $validator->errors()], 400);
        }
        $offer_id = request()->offer_id;
        $user_id = request()->user_id;
        $applied=applied::where('user_id',$user_id)->where( 'offer_id', $offer_id);
        $applieds=applied::where('user_id',$user_id)->where( 'offer_id', $offer_id)->get();
        if(sizeof($applieds)==0){
            return response()->json(['error' => 'Faltan datos'], 404);
        }
        
        $applied->delete();
        return response()->json(['deleted' => $applieds->toArray()], $this->successStatus);
    }
}
