@extends('layouts.dashboard')

@section('content')
<div>
    <h2>Edit a category</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="line"></div>
    <div class="">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <form method="POST" action="{{ route('category.update', $category->id) }}" class="col-md-12 col-lg-12"  enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <fieldset>
                        <div class="form-group">
                            <label for="disabledTextInput">Category Icon </label>
                            <input type="text" id="disabledTextInput" name="icon" value="{{ $category -> icon }}"  class="form-control" placeholder="category icon">
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-group">
                            <label for="disabledTextInput">Category name</label>
                            <input type="text" id="disabledTextInput" name="name" value="{{ $category -> name }}"  class="form-control" placeholder="category name">
                        </div>
                    </fieldset>
                    
                    <button type="submit" class="btn btn-primary mt-5">save</button>
                  </form> 
            </div>
        </div>
    </div>
    
    <div class="line"></div>
</div>

@endsection