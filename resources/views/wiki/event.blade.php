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
                <h2 class="blog-post-title">Évènements</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '2-05-2017')->formatLocalized('%A %d %B %Y')}}</p>
                <p>
                <p>
                    En appuyant sur une case vide, vous pouvez ajouter un évènement personnalisé à votre emploi du
                    temps :
                </p>

                <img src="{{URL::asset('images/ajout1.png')}}" alt="" class="wiki-image">
                <img src="{{URL::asset('images/ajout2.png')}}" alt="" class="wiki-image">

                <p>
                    <br>
                    Vous pouvez choisir son nom, sa localisation, son heure de début et de fin ainsi que sa couleur.
                </p>
                <p>

                </p>
            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.timetable') !!}" class="btn btn-primary pull-left">Précédent : emploi du
                temps</a>
        <!--<a href="{!! route('wiki.timetable') !!}" class="btn btn-primary pull-right">Suivant : emploi du
                temps</a> -->
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection