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
                <h2 class="blog-post-title">Préférences</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '1-06-2017')->formatLocalized('%A %d %B %Y')}}
                </p>

                <p>
                    Il y a plusieurs menus de préférences :
                </p>
                <ul>
                    <li><a href="{!! route('wiki.menu.settings.general') !!}">Général</a></li>
                    <li><a href="{!! route('wiki.menu.settings.notification') !!}">Notifications</a></li>
                    <li><a href="{!! route('wiki.menu.settings.synchro') !!}">Synchronisation</a></li>
                </ul>

                <img src="{{URL::asset('images/settings.png')}}" alt="" class="wiki-image">

            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.menu.teachers') !!}" class="btn btn-primary pull-left">Précédent : Mes
                enseignants</a>
            <a href="{!! route('wiki.menu.settings.general') !!}" class="btn btn-primary pull-right">Suivant :
                Général</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection
