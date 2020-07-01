@extends('layouts.dashboard')

@section('content')
    
<div>
    <h2>Edit a member</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="line"></div>
    <div class="">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <form method="POST" action="{{ route('author.update', $author->id) }}" class="col-md-12 col-lg-12"  enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <fieldset disabled>
                        <div class="form-group">
                            <label for="disabledTextInput">Name</label>
                            <input type="text" id="disabledTextInput" name="name" value="{{ Auth::user() -> name }}" class="form-control" placeholder="menber name">
                        </div>
                    </fieldset>
                    
                    <fieldset disabled>
                        <div class="form-group">
                            <label for="Email1">Email address</label>
                            <input type="email" class="form-control" name="email" id="Email1" value="{{ Auth::user() -> email }}" placeholder="menber email">
                          </div>
                    </fieldset>
                    
                    <label for="exampleFormControlTextarea1">Description </label>
                    <textarea class="form-control" name="description" placeholder="menber description" id="exampleFormControlTextarea1" rows="5">{{ $author->description }}</textarea>
                    <div class="form-group">
                        <label for="File"></label>
                        <input type="file"  class="form-control-file" id="File" name="image"/>
                    </div>

                    <button type="submit" class="btn btn-primary mt-5">save</button>
                  </form> 
            </div>
        </div>
    </div>
    
    <div class="line"></div>
</div>

@endsection