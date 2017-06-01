@extends('layouts.template')
@section('title')
    Wiki -
@endsection
@section('content')
    <div class="blog-header">
        <h1 class="blog-title">Emploi du temps Paul Sabatier</h1>
        <p class="lead blog-description">Application de gestion d'emploi du temps</p>
    </div>

    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title">Menu - Préférences - Général</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '1-06-2017')->formatLocalized('%A %d %B %Y')}}</p>
                <p>
                <p>
                    Cette vue vous permet de modifier votre nom, votre groupe, les couleurs par défaut et d'ajouter
                    un deuxième emploi du temps.
                </p>

                <img src="{{URL::asset('images/general.png')}}" alt="" class="wiki-image">

            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.menu.settings') !!}" class="btn btn-primary pull-left">Précédent : Préférences</a>
            <a href="{!! route('wiki.menu.settings') !!}" class="btn btn-primary pull-right">Suivant : Préférences</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection
