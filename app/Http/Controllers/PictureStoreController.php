<?php

namespace App\Http\Controllers;

use App\pictureStore;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFiles;
use Illuminate\Support\Facades\Storage;

class PictureStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = pictureStore::all();
        return view('picturestore.index' ,compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pictureStore.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = $request->image->getClientOriginalName();
        $request->image->storeAs('images',$fileName,'public');
        $picture = new pictureStore();
        $picture->image = $fileName;
        $picture->save();
        return('Done!');
        if($request->hasFile('image')){
            $request->image->store('image');
            dd($request->image);
         }
        // }
        // if($request->hasFile('image')){
        //     dd($request->image->getClientOriginalName());
        // }
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\pictureStore  $pictureStore
     * @return \Illuminate\Http\Response
     */
    public function show(pictureStore $pictureStore)
    {
        // return($request->image);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pictureStore  $pictureStore
     * @return \Illuminate\Http\Response
     */
    public function edit(pictureStore $pictureStore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pictureStore  $pictureStore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pictureStore $pictureStore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pictureStore  $pictureStore
     * @return \Illuminate\Http\Response
     */
    public function destroy(pictureStore $pictureStore)
    {
        //
    }
}
