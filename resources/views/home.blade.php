@extends('layouts.template')

@section('title')
    Accueil -
@endsection

@section('content')
    <div class="blog-header">
        <h1 class="blog-title">sTimeTable Wiki</h1>
        <p class="lead blog-description">Application de gestion d'emploi du temps</p>
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
                    <li>Correction d'un bug de notification</li>
                </ul>

                <h3>v0.1-Amethyst</h3>
                <ul>
                    <li>Déploiement initial</li>
                </ul>
            </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        @include('layouts.nav')

    </div><!-- /.row -->
@endsection