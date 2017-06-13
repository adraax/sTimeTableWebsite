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
                <h2 class="blog-post-title">Menu - Préférences - Synchronisation</h2>
                <p class="blog-post-meta">
                    Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '13-06-2017')->formatLocalized('%A %d %B %Y')}}
                </p>

                <p>
                    Sur cette vue vous pouvez choisir d'activer ou non la synchronisation automatique, c'est-à-dire la mise à jour programmée de votre emploi du temps.
                    <br>
                    Vous pouvez également choisir la fréquence d'actualisation.
                </p>

                <img src="{{URL::asset('images/settingsSynchro.png')}}" alt="" class="wiki-image">
                <img src="{{URL::asset('images/settingsSynchroDelay.png')}}" alt="" class="wiki-image">

            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.menu.settings.notification') !!}" class="btn btn-primary pull-left">Précédent :
                Notifications </a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection
