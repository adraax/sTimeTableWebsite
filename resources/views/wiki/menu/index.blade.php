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
                <h2 class="blog-post-title">Menu</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '13-05-2017')->formatLocalized('%A %d %B %Y')}}
                </p>

                <p>
                    Il y a plusieurs éléments présents dans le menu :
                </p>
                <ul>
                    <li><a href="{!! route('wiki.menu.today') !!}">Aujourd'hui</a></li>
                    <li><a href="{!! route('wiki.menu.today') !!}">Vue 1/3/7 jours</a></li>
                    <li><a href="{!! route('wiki.menu.today') !!}">Vue Examens</a></li>
                    <li><a href="{!! route('wiki.menu.today') !!}">Synchroniser</a></li>
                    <li><a href="{!! route('wiki.menu.today') !!}">Export PDF</a></li>
                    <li><a href="{!! route('wiki.menu.today') !!}">Import/Export PDF</a></li>
                    <li><a href="{!! route('wiki.menu.today') !!}">Mes enseignants</a></li>
                    <li><a href="{!! route('wiki.menu.today') !!}">Préférences</a></li>
                </ul>

                <img src="{{URL::asset('images/menu.png')}}" alt="" class="wiki-image">

            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.event.celcat') !!}" class="btn btn-primary pull-left">Précédent : évènements
                celcat</a>
            <a href="{!! route('wiki.menu.today') !!}" class="btn btn-primary pull-right">Suivant : aujourd'hui</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection