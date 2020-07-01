@extends('layouts.dashboard')

@section('content')
    
<div>
    <h2>the list of all the authors</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="line"></div>

    <div class="">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <table class="table">
                    <thead class="bg-info text-white mb-5">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Auhtor Name</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Create at</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>

                    <tbody class="mt-5">
                      @foreach ($posts as $post)
                        <tr>
                          <th scope="row">{{ $post -> id }} </th>
                          <td>{{ $post -> author -> name}}</td>
                          <td>{{ $post -> title }}</td>
                          <td>{{ $post -> category -> name}}</td>
                          <td>{{ $post -> created_at}}</td>
                          <td><img src="/storage/post_img/{{ $post -> image}}" class="rounded-lg" style="width: 9rem" alt="s"></td>
                          <td><p>{{ $post -> description}}</p></td>
                          <td> <div class="row"> <a href="{{ route('post.overview', $post ->id) }}" class="btn btn-success mr-2 mt-2"> View</a> <a href="{{ route('post.edit', $post -> id) }}" class="btn btn-warning mr-2 mt-2"> Edit</a> <a href="{{ route('post.destroy', $post -> id) }}" class="btn btn-danger mr-2 mt-2"> Delete</a></div></td>
                        </tr>
                      @endforeach
                    </tbody>
                
                  </table>
            </div>
        </div>
    </div>


 <div class="line"></div>

@endsection