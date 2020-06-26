<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="#">MY BLOG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('about') }}">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('contact') }}">Contact <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" >
        <a class="nav-link " href="#"><span type="button" class="fas fa-search fa-sm" data-toggle="modal" data-target="#search"></span></a> 
      </li>
    </ul>
  </div>
</nav>

<!-- modal -->

<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recherche</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="recherche" aria-label="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">recherche</button>
        </form>
      </div>
    </div>
  </div>
</div>