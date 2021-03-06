@extends('layouts.dashboard')

@section('content')
<div>
    <h2>Edit the post</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="line"></div>

    <div class="">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <form method="POST" action="{{ route('post.update', $post->id) }}" class="col-md-12 col-lg-12"  enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <fieldset class="mb-5">
                        <h2> Post Header</h2>
                    </fieldset>

                    <fieldset disabled>
                        <div class="form-group">
                            <label for="disabledTextInput">Author Name</label>
                            <input type="text" id="disabledTextInput" name="author_id" value="{{ Auth::user() ->name }}" class="form-control" placeholder="menber name">
                        </div>
                    </fieldset>
                  
                        <div class="form-conntrol">
                            <label for="category"> Select your Post Category</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $post -> category_id == $category -> id ? 'selected' : '' }}> {{ $category -> name }}
                                @endforeach
                              </select>
                        </div>
                
                        <div class="form-group row">
                            <div class="col-md-6 col-lg-6">
                                <label for="File" class="mt-4 mb-2"> Post Image</label>
                                <input type="file"  class="form-control-file" id="File" name="image"/>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <img src="/storage/post_img/{{ $post->image }}" class="rounded-lg mt-5" style="width: 9rem" alt="post_mg">
                            </div>
                        </div>

                        <fieldset class="mt-5">
                            <h2> Post body</h2>
                        </fieldset>

                        <div class="form-group mb-5 mt-5">
                            <label for="title">Post Title</label>
                            <input type="text" id="disabledTextInput" name="title" value="{{ $post -> title }}" class="form-control" placeholder="Post title">
                        </div>

                        <div class="form-group mb-5 mt-5">
                            <label for="description">Post Description</label>
                            <textarea class="form-control"  id="description" name="description" rows="3"> {{ $post -> description }}</textarea>
                        </div>

                        <div class="form-group mb-5 mt-5">
                            <label for="summary-ckeditor3">Post Content</label>
                            <textarea class="form-control"  id="summary-ckeditor3" name="content" rows="3"> {{ $post -> content }}</textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success mt-5">Edit</button>
                            <a type="submit" href="#" class="btn btn-warning mt-5">Save as a draft</a>
                            <a type="submit" href="#" class="btn btn-danger mt-5">Cancel<a>
                        </div>
                  </form> 
            </div>
        </div>
    </div>

 <div class="line"></div>
@endsection