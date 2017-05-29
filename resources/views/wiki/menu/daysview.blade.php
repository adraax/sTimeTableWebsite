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
                <h2 class="blog-post-title">Menu - Vue 1/3/7 jours</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '13-05-2017')->formatLocalized('%A %d %B %Y')}}</p>
                <p>
                <p>
                    Les boutons "vue jour", "vue 3 jours" et "vue semaine" vous permettent de choisir le nombre de jours
                    affiché sur l'écran principal.
                </p>
                <img src="{{URL::asset('images/1day.png')}}" alt="" class="wiki-image">
                <img src="{{URL::asset('images/3days.png')}}" alt="" class="wiki-image">
                <img src="{{URL::asset('images/7days.png')}}" alt="" class="wiki-image">

            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.menu.today') !!}" class="btn btn-primary pull-left">Précédent : Aujourd'hui</a>
            <a href="{!! route('wiki.menu.exam') !!}" class="btn btn-primary pull-right">Suivant : Vue Examens</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection
