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
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '1-06-2017')->formatLocalized('%A %d %B %Y')}}</p>
                <p>
                <p>
                    Cette vue vous permet d'exporter votre emploi du temps au format ICS, ou bien d'importer les
                    évènements d'un fichier .ics.
                    <br>
                    Différentes options sont disponibles, comme le choix des évènements à exporter, la prise en
                    compte des évènements passés et la couleur des évènements à importer.
                </p>

                <img src="{{URL::asset('images/ics.png')}}" alt="" class="wiki-image">

                <p>
                    <br>
                    En appuyant sur le bouton importer depuis un lien, vous pouver importer automatiquement les
                    évènements d'un fichier ics, et choisir une fréquence de synchronisation.
                </p>

                <img src="{{URL::asset('images/emptyListIcs.png')}}" alt="" class="wiki-image">
                <img src="{{URL::asset('images/addLinkIcs.png')}}" alt="" class="wiki-image">
                <img src="{{URL::asset('images/listIcs.png')}}" alt="" class="wiki-image">

                <p>
                    <br>
                    Vous pouvez ensuite supprimer ou modifier un des imports automatiques en appuyant dessus.
                </p>
                <img src="{{URL::asset('images/editIcs.png')}}" alt="" class="wiki-image">

            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.menu.pdf') !!}" class="btn btn-primary pull-left">Précédent : Export PDF</a>
            <a href="{!! route('wiki.menu.teachers') !!}" class="btn btn-primary pull-right">Suivant : Mes
                enseignants</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection
