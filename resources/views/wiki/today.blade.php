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
                <h2 class="blog-post-title">Menu - Aujourd'hui</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '12-05-2017')->formatLocalized('%A %d %B %Y')}}</p>
                <p>
                <p>
                    Cette fenêtre vous permet de voir tous les cours du jour.
                </p>
                <img src="{{URL::asset('images/aujourd\'hui (1).png')}}" alt="" class="wiki-image">
                <img src="{{URL::asset('images/aujourd\'hui (2).png')}}" alt="" class="wiki-image">

            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.event.celcat') !!}" class="btn btn-primary pull-left">Précédent : évènements
                celcat</a>
        <!--<a href="{!! route('wiki.timetable') !!}" class="btn btn-primary pull-right">Suivant : emploi du
                temps</a> -->
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection