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
                <h2 class="blog-post-title">Menu - Vue Examens</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '13-05-2017')->formatLocalized('%A %d %B %Y')}}</p>
                <p>
                <p>
                    Cette vue permet de consulter la liste des examens, en affichant leur nom, leur date et leur
                    localisation.
                </p>

                <img src="{{URL::asset('images/exam.png')}}" alt="" class="wiki-image">

            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.menu.daysview') !!}" class="btn btn-primary pull-left">Précédent : Vue 1/3/7
                jours</a>
            <a href="{!! route('wiki.menu.synchro') !!}" class="btn btn-primary pull-right">Suivant : Synchroniser</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection
