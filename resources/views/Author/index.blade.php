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
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Desccription</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Number of associated articles</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                 @foreach ($authors as $author)
                    <tbody class="mt-5">
                      <tr>
                        <th scope="row">{{ $author -> id }} </th>
                        <td>{{ $author -> name }}</td>
                        <td>{{ $author -> email }}</td>
                        <td>{{ $author -> description}}</td>
                        <td> <img src="/storage/author_img/{{ $author -> image}}" class="rounded-lg" style="width: 15rem" alt="s"></td>
                        <td><p>12</p></td>
                        <td><a href="{{ route('author.edit', $author-> id) }}" class="btn btn-warning mr-2"> Edit</a> <a href="{{ route('author.destroy', $author ->id) }}" class="btn btn-danger mr-2"> Delete</a> </td>
                      </tr>
                    </tbody>
                @endforeach
                  </table>
            </div>t
        </div>
    </div>


 <div class="line"></div>
<div class="text-center mt-5 mb-5"><a href="{{ route('author.create') }}" class="btn btn-info"> Create a new one</a></div> 
@endsection










