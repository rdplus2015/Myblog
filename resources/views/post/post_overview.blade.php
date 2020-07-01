@extends('layouts.app')

@section('content')
<div class="site-wrap">

  <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('/storage/post_img/{{ $post -> image }}');">
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-12 col-lg-10">
          <div class="post-entry text-center">
            <span class="post-category text-white bg-success mb-3">{{ $post -> category -> name }}</span>
            <h1 class="mb-4"><a href="#">{{ $post -> title }}</a></h1>
            <div class="post-meta align-items-center text-center">
              <figure class="author-figure mb-0 mr-3 d-inline-block"><img src="/storage/author_img/{{ $post -> author -> image }}" alt="Image" class="img-fluid"></figure>
              <span class="d-inline-block mt-1">By {{ $post -> author -> name }}</span>
              <span>&nbsp;-&nbsp; {{ $post -> created_at }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <section class="site-section py-lg">
    <div class="container">
      
      <div class="row blog-entries element-animate">

        <div class="col-md-12 col-lg-8 main-content">
          
          <div class="post-content-body">
            <div class="row">
               <div>
                {{ $post -> content }}
               </div>
            </div>
          </div>

          
          <div class="pt-5">
            <p>Categories:  <a href="#">{{ $post -> category -> name }}</a>, <a href="#">Travel</a>  Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
          </div>
        </div>

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">
          <div class="sidebar-box search-form-wrap">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon fa fa-search"></span>
                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
              </div>
            </form>
          </div>
          <!-- END sidebar-box -->
          <div class="sidebar-box">
            <div class="bio text-center">
              <img src="images/person_2.jpg" alt="Image Placeholder" class="img-fluid mb-5">
              <div class="bio-body">
                <h2>Craig David</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                <p><a href="#" class="btn btn-primary btn-sm rounded px-4 py-2">Read my bio</a></p>
                <p class="social">
                  <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                  <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- END sidebar -->
      </div>
    </div>
  </section>
</div>
@endsection