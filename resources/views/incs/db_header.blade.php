<div class="wrapper">

    <!-- Sidebar Holder -->

    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Dashboard</h3>
            <strong>DB</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-home"></i>
                    Menu
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="{{ route('index') }}">HOME</a></li>
                    <li><a href="{{ route('about') }}">ABOUT</a></li>
                    <li><a href="{{ route('contact') }}">CONTACT</a></li>
                </ul>
            </li>

            <li class="active">
                <a href="#profile" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-user"></i>
                    My profile
                </a>
                <ul class="collapse list-unstyled" id="profile">
                    <li><a href="{{ route('index') }}">See my profile</a></li>
                    <li><a href="{{ route('about') }}">Edit my profile</a></li>
                </ul>
            </li>

            <li class="active">
                <a href="#post" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-address-card"></i>
                    Post
                </a>
                <ul class="collapse list-unstyled" id="post">
                    <li><a href="{{ route('post.create') }}">Add a new post</a></li>
                    <li><a href="{{ route('post.view_all') }}">See all published articles</a></li>
                    <li><a href="{{ route('post.view_all') }}">See all unpublished articles</a></li>
                </ul>
            </li>

            <li class="active">
                <a href="#category" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-tags"></i>
                    Category
                </a>
                <ul class="collapse list-unstyled" id="category">
                    <li><a href="{{ route('category.create') }}">Add a new category</a></li>
                    <li><a href="{{ route('category.index') }}">See all categories</a></li>
                </ul>
            </li>

            <li class="active">
                <a href="#author" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-chalkboard-teacher"></i>
                    Author
                </a>
                <ul class="collapse list-unstyled" id="author">
                    <li><a href="{{ route('author.create') }}">Add a new author</a></li>
                    <li><a href="{{ route('author.index') }}">See all Authors</a></li>
                </ul>
            </li>

            <!-- 
                <a href="#" class="">
                    <i class="fas fa-chalkboard-teacher"></i>
                   Espace Instructeur
                </a>
            -->

            </li>
        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">

        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header mr-auto">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                        <i class="glyphicon glyphicon-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                </div>

                <div class="ml-auto text-center">
                    <h2> {{ Auth::user() -> name }} <span class="fas fa-circle text-success"></span></h2>
                </div>
            </div>
        </nav>

