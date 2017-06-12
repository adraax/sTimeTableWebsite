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
                <h2 class="blog-post-title">Menu - Préférences - Notifications</h2>
                <p class="blog-post-meta">
                    Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '12-06-2017')->formatLocalized('%A %d %B %Y')}}
                </p>

                <p>
                    Sur cette vue vous pouvez choisir d'activer ou désactiver les notifications, ainsi que leur vibration.
                    <br>
                    Vous recevez des notifications uniquement lorsque des changements dans votre emploi du temps sont détectés.
                </p>

                <img src="{{URL::asset('images/settingNotification.png')}}" alt="" class="wiki-image">

            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.menu.settings.general') !!}" class="btn btn-primary pull-left">Précédent :
                Général</a>
            <a href="{!! route('wiki.menu.settings.synchro') !!}" class="btn btn-primary pull-right">Suivant :
                Synchronisation</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection
