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
                <h2 class="blog-post-title">Menu - Import/Export ICS</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '15-05-2017')->formatLocalized('%A %d %B %Y')}}</p>
                <p>
                <p>
                    Ce bouton vous permet d'exporter votre emploi du temps au format ICS, ou bien d'importer les
                    évènements d'un fichier .ics.
                    <br>
                    Différentes options sont disponibles, comme le choix des évènements à exporter, la prise en
                    compte des évènements passés et la couleur des évènements à importer.
                </p>

                <img src="{{URL::asset('images/ics.png')}}" alt="" class="wiki-image">

            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.menu.pdf') !!}" class="btn btn-primary pull-left">Précédent : Export PDF</a>
            <a href="{!! route('wiki.menu.ics') !!}" class="btn btn-primary pull-right">Suivant : Import/export ICS</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection
