@extends('layouts.template')

@section('title')
    Installation
@endsection

@section('content')
    <div class="blog-header">
        <h1 class="blog-title">sTimeTable Wiki</h1>
        <p class="lead blog-description">sTimeTable blablabla bullshit</p>
    </div>

    <div class="row">
        <div class="col-sm-8 blog-main">

            <div class="blog-post">
                <h2 class="blog-post-title">À venir</h2>

                <img id="gif-widget" src="{{URL::asset('images/widget.gif')}}" alt="">
            </div><!-- /.blog-post -->

            <div class="blog-post">
                <h2 class="blog-post-title">Patch notes</h2>
                <h3>v0.3</h3>
                <ul>
                    <li>Correction d'un bug sur de notification</li>
                </ul>

                <h3>v0.1-Amethyst</h3>
                <ul>
                    <li>Déploiement initial</li>
                </ul>
            </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>
                    Gérez votre emploi du temps depuis votre smartphone, ajoutez vos enseignants et notifiez-les d'un
                    retard ou d'une absence.
                    <br>
                    Ajoutez vos événements personnels et modifiez leur couleur à volonté.
                </p>
            </div>
            <div class="sidebar-module">
                <h4>Wiki</h4>
                <ol class="list-unstyled">
                    <li><a href="{!! route('wiki.installation') !!}">Installation</a></li>
                    <li><a href="{!! route('wiki.connection') !!}">Connexion</a></li>
                    <li><a href="{!! route('wiki.timetable') !!}">Emploi du temps</a></li>
                </ol>
            </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->
@endsection