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
                <h2 class="blog-post-title">Évènements personnels</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '12-05-2017')->formatLocalized('%A %d %B %Y')}}
                </p>
                <p>
                    En appuyant sur une case vide, vous pouvez créer un évènement personnalisé. Vous pouvez choisir
                    son nom, son heure de début, son heure de fin, sa localisation ainsi que sa couleur.
                </p>
                <img src="{{URL::asset('images/ajout1.png')}}" alt="" class="wiki-image">
                <img src="{{URL::asset('images/ajout2.png')}}" alt="" class="wiki-image">

                <p>
                    <br>
                    En appuyant sur un évènement personalisé, vous avez la possibilité d'afficher ses détails, de le
                    modifier ou de le supprimer.
                </p>
                <img src="{{URL::asset('images/eventPerso.png')}}" alt="" class="wiki-image">
                <br>
                <img src="{{URL::asset('images/affEventPerso.png')}}" alt="" class="wiki-image">
                <img src="{{URL::asset('images/editEventPerso.png')}}" alt="" class="wiki-image">

            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.event') !!}" class="btn btn-primary pull-left">Précédent : évènements</a>
            <a href="{!! route('wiki.event.celcat') !!}" class="btn btn-primary pull-right">Suivant : évènements
                celcat</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection