<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\article;
use Validator;

class ArticleController extends Controller
{
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=article::all();
        return response()->json(['Articulos'=>$articles->toArray()],$this->successStatus);
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
        $validator=Validator::make($input,[
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'cicle_id'=> 'required',
        ]);
        if($validator->fails()){
            return response()->json(['error' => $validator->errors()],401);
        }
        $articles= article::create($input);
        return response()->jsonn(['Articulo' => $articles->toArray()], $this->successStatus);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articles = article::where('cicle_id',$id)->get();
        if (is_null($articles)) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        return response()->json(['Articulos' => $articles->toArray()], $this->successStatus);
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
    public function update(Request $request, article $articles)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'cicle_id'=> 'required',
        ]);
        if($validator->fails()){
            return response()->json(['error' => $validator->errors()], 401);
        }
        $articles->title = $input['title'];
        $articles->description = $input['description'];
        $articles->image = $input['image'];
        $articles->cicle_id = $input['cicle_id'];
        $articles->save();
        return response()->json(['Articulos' => $articles->toArray()], $this->successStatus);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $articles)
    {
        $articles->delete();
        return response()->json(['Articulo' => $articles->toArray()], $this->successStatus);
    }
}
