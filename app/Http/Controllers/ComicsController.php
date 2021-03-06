<?php

namespace App\Http\Controllers;

use App\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comics::all();

        return view("comics.index", compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate(
            [
                'title' => 'required | max:150',
                'description' => 'required | max: 350',
                'type' => 'required | max: 50',
                'series' => 'required | max:100 ',
                'price' => 'required | numeric',
                'sale_date' => 'required | date',
            ]
        );
        //Validate 
        $new_comic = new Comics();
        // $new_comic->fill($data);
        $new_comic->title = $data['title'];
        $new_comic->description = $data['description'];
        $new_comic->type = $data['type'];
        $new_comic->series = $data['series'];
        $new_comic->price = $data['price'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->save();

        return redirect()->route("comics.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $comic = Comics::find($id);
        return view('comics.show', compact('comic'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function edit(Comics $comics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comics $comics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comics::find($id);
        $comic -> delete();
        return redirect()->route("comics.index");
    }

    
}
