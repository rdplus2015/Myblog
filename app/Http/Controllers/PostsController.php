<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Authors;
use App\Categories;

use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();

        return view('post.index', [
            'posts' => $posts
        ]);
    }

    /*
        Display all posts for admin
    */

    public function post_view_all()
    {
        $posts = Posts::all();
        return view('post.post_view_all', [
            'posts' => $posts
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function overview($id)
    {
        $post = Posts::find($id);
        return view('post.post_overview', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function create()
    {

        $authors = Authors::all();
        $categories = Categories::all();
        return view('post.post_create', [
            'authors' => $authors,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Posts();

        $post -> author_id = Auth::user()->id;
        $post -> title = $request -> input('title');
        $post -> category_id = $request -> input('category_id');
        $post -> description = $request -> input('description');
        $post -> content = $request -> input('content');
       
        $image = $request ->file('image');
        $imageFullname = $image -> getClientOriginalName();
        $imageName = pathinfo($imageFullname, PATHINFO_FILENAME );
        $imageExtension = pathinfo($imageFullname, PATHINFO_EXTENSION);

        $file = time().'_'.$imageName.'.'.$imageExtension;
        $image -> storeAs('public/post_img/', $file);

        $post -> image = $file;
        $post -> save();
        return redirect() -> route('index') -> with('success', 'your article has been successfully created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::find($id);
        return view('post.post_view', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categories::all();
        $post = Posts::find($id);
        return view('post.post_edit', [
            'post' => $post,
            'categories' => $categories
        ]);
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
        $post = Posts :: find($id);
        $post -> title = $request -> input('title');
        $post -> category_id = $request -> input('category_id');
        $post -> description = $request -> input('description');
        $post -> content = $request -> input('content');

        if ($request -> file('image')) {
            $image = $request ->file('image');
            $imageFullname = $image -> getClientOriginalName();
            $imageName = pathinfo($imageFullname, PATHINFO_FILENAME );
            $imageExtension = pathinfo($imageFullname, PATHINFO_EXTENSION);

            $file = time().'_'.$imageName.'.'.$imageExtension;
            $image -> storeAs('public/post_img/', $file);

            $post -> image = $file;
        }

        $post -> save();
        return redirect() -> route('index') -> with('success', 'your article has been successfully modified');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::find($id);
        $post ->delete();
        return redirect() ->route('post.view_all') ->with('success', 'your item has been successfully deleted');
    }
}
