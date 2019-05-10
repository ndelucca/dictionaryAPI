<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\DictionaryWord;
use App\Http\Resources\DictionaryWord as DictionaryWordResource;
class DictionaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get dictionary
        $dictionary = DictionaryWord::paginate(200);

        //Return as resource
        return DictionaryWordResource::collection($dictionary);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $word = $request->isMethod('put') ? DictionaryWord::findOrFail($request->id) : new DictionaryWord;

        $word->word = $request->input('word');
        $word->wordtype = $request->input('wordtype');
        $word->definition = $request->input('definition');

        if($word->save()){
            return new DictionaryWordResource($word);
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
        //Get single article
        $word = DictionaryWord::findOrFail($id);

        return new DictionaryWordResource($word);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Get article
        $word = DictionaryWord::findOrFail($id);

        if($word->delete()){
            return new DictionaryWordResource($word);
        }
    }
}
