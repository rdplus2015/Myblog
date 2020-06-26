<div class="wrapper">

    <!-- Sidebar Holder -->

    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Tableau de bord</h3>
            <strong>TB</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-home"></i>
                    Menu
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="{{ route('index') }}">ACCUEIL</a></li>
                    <li><a href="{{ route('about') }}">A PROPOS</a></li>
                    <li><a href="{{ route('contact') }}">CONTACT</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-user"></i>
                   Ma liste de présence
                </a>

                <a href="#">
                    <i class="fa fa-photo"></i>
                    Photos
                </a>

                <a href="#video" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-video"></i>
                    Vidéos
                </a>
                <ul class="collapse list-unstyled" id="video">
                    <li><a href="#">Cours</a></li>
                    <li><a href="#">Divertissement</a></li>
                </ul>

                <a href="#game" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-gamepad"></i>
                    Jeux
                </a>
                <ul class="collapse list-unstyled" id="game">
                    <li><a href="#">Snake</a></li>
                    <li><a href="#">Puzzle</a></li>
                </ul>

                <a href="#">
                    <i class="fa fa-heart"></i>
                    Mes Favoris
                </a>

                <a href="#" class="">
                    <i class="fas fa-chalkboard-teacher"></i>
                   Espace Instructeur
                </a>

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
                    <h2><span class="fas fa-circle text-success"></span></h2>
                </div>
            </div>
        </nav>

