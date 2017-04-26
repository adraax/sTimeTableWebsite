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
                <h2 class="blog-post-title">Connexion</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '24-04-2017')->formatLocalized('%A %d %B %Y')}}</p>
                <p>
                <p>
                    Pour vous connecter, entrez votre nom, choisissez votre filière, et entrez vos groupes de TD et TP.
                    <br>
                    Lorsque vous appuyez sur le bouton valider, votre emploi du temps sera téléchargé.
                </p>
                <img src="{{URL::asset('images/connect (1).png')}}" alt="" class="wiki-image">
                <img src="{{URL::asset('images/connect (2).png')}}" alt="" class="wiki-image">
                <p><br></p>
                <h3>Autorisation</h3>
                <p>Si votre téléphone dispose de la version d'Android 6.0 ou supérieure, vous devez accepter les
                    autorisations
                    comme sur la fenêtre suivante.
                </p>
                <img src="{{URL::asset('images/permission.png')}}" alt="" class="wiki-image">

            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.installation') !!}" class="btn btn-primary pull-left">Précédent : installation</a>
            <a href="{!! route('wiki.timetable') !!}" class="btn btn-primary pull-right">Suivant : emploi du temps</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection