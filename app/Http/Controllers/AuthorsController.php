<?php

namespace App\Http\Controllers;

use App\Authors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Authors::all();
        return view('Author.index', [
            'authors' => $authors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Author.author_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author = new Authors();
        $author -> name = Auth::user() -> name;
        $author -> email = Auth::user() -> email;
        $author -> description = $request -> input('description');
        
        $image = $request ->file('image');
        $imageFullname = $image -> getClientOriginalName();
        $imageName = pathinfo($imageFullname, PATHINFO_FILENAME );
        $imageExtension = pathinfo($imageFullname, PATHINFO_EXTENSION);

        $file = time().'_'.$imageName.'.'.$imageExtension;
        $image -> storeAs('public/author_img/', $file);

        $author -> image = $file;
    
        $author -> save();
        return redirect() -> route('author.index');
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
        return view('Author.author_edit');
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
