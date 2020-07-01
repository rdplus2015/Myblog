@extends('layouts.app')



@section('content')

<!-- header -->

<div class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Welcome to Myblog</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit illum nostrum, minus, temporibus minima, sit harum voluptatum natus doloribus fugiat dolorem quidem. Aut quisquam aliquam nostrum ipsam magni, incidunt dolorem.</p>
      </div>
    </div>
  </div>
</div>


<div class="site-wrap">
  <div class="site-section bg-white">
    <div class="container">
      <div class="row">
        @foreach ($posts as $post)
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="single.html"><img src="/storage/post_img/{{ $post -> image }}" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-info mb-3">{{ $post -> category -> name}}</span>

              <h2><a href="single.html">{{ $post -> title }}</a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 mr-3 float-left"><img src="storage/author_img/{{$post ->  author-> image }}" alt="Image" class="img-fluid"></figure>
                <span class="d-inline-block mt-1"> By <a href="#" > </a> {{ $post ->  author-> name}} </span>
                <span>&nbsp;-&nbsp; {{ $post -> created_at }}</span>
              </div>
              
                <p class="">{{ $post->description }}</p>
                <p><a href="{{ route('post.view', $post -> id ) }}" class="btn btn-info">Read More</a></p>
              </div>
            </div>
          </div>
        @endforeach
      </div>

   
        <div class="row text-center pt-5 border-top">
          <div class="col-md-12">
            <div class="custom-pagination">
              <span>1</span>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <span>...</span>
              <a href="#">15</a>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection

    
   