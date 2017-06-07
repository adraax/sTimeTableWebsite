<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('/favicons/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('/favicons/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('/favicons/favicon-16x16.png')}}">
        <link rel="manifest" href="{{URL::asset('/favicons/manifest.json')}}">
        <link rel="mask-icon" href="{{URL::asset('/favicons/safari-pinned-tab.svg')}}" color="#5bbad5">
        <link rel="shortcut icon" href="{{URL::asset('/favicons/favicon.ico')}}">
        <meta name="msapplication-config" content="{{URL::asset('/favicons/browserconfig.xml')}}">
        <meta name="theme-color" content="#ffffff">

        <title>@yield('title') Emploi du temps Paul Sabatier</title>

        <!-- Bootstrap core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-HzUaiJdCTIY/RL2vDPRGdEQHHahjzwoJJzGUkYjHVzTwXFQ2QN/nVgX7tzoMW3Ov"
              crossorigin="anonymous">
        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{!! route('home') !!}"><span
                                class="glyphicon glyphicon-calendar"></span> EDT Paul Sabatier</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li><a href="{!! route('home') !!}">Accueil</a></li>
                        <li><a href="{!! route('bug.index') !!}"><span
                                        class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                Bug
                                Tracker</a>
                        </li>
                        @if(Auth::user())
                            <li><a href="{!! route('user.index') !!}"><span class="glyphicon glyphicon-user"
                                                                            aria-hidden="true"> </span> Utilisateurs</a>
                            </li>
                        @endif
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Connexion</a></li>
                            <li><a href="{{ route('register') }}">Inscription</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('user.edit', Auth::user()->id) }}"><span
                                                    class="glyphicon glyphicon-user"></span> Profil</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span class="glyphicon glyphicon-off"> </span> Déconnexion
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
                <!-- Right Side Of Navbar -->

            </div>
        </nav>

        <div class="test">
            <div class="container">
                @yield('content')
            </div>
        </div>


        <footer class="blog-footer">
            <div class="container">
                <p>Site de la TeamPluto pour l'application <a
                            href="https://play.google.com/store/apps/details?id=fr.master_developpement_logiciel.teampluto.stimetable">Emploi
                        du temps Paul Sabatier</a>. Réalisé par <a
                            href="{!! route('user.show', 1) !!}">Olivier Merlin</a></p>
                <img src="https://insight.sensiolabs.com/projects/21a56de3-840a-431a-bfbf-61769672953e/big.png" alt="">
                <p>
                    <br>
                    <a href="#">Retourner en haut</a>
                </p>
            </div>

        </footer>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
    </body>
</html>
