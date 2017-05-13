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
                <h2 class="blog-post-title">Évènements celcat</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '12-05-2017')->formatLocalized('%A %d %B %Y')}}
                </p>
                <p>
                    Après avoir appuyé sur un évènement celcat de votre emploi du temps, vous devriez voir apparaitre
                    la fenêtre suivante :
                </p>
                <img src="{{URL::asset('images/event.png')}}" alt="" class="wiki-image">

                <p>
                    <br>
                    Si vous cliquez sur la localisation d'un évènement celcat, google maps s'ouvre et vous donne un
                    itinéraire jusqu'au batiment.
                </p>
                <img src="{{URL::asset('images/itineraire.gif')}}" alt="" class="wiki-image">
                <p>
                    <br>
                    En cliquant sur le bouton notifier absence ou notifier retard, la fenêtre mes profs s'ouvre.
                </p>
                <img src="{{URL::asset('images/profs.png')}}" alt="" class="wiki-image">
                <p>
                    <br>
                    En cliquant sur un des profs, votre application de gestion d'email favorite s'ouvre et un mail
                    préformaté est prêt à l'envoi.
                </p>
                <img src="{{URL::asset('images/email.png')}}" alt="" class="wiki-image">
            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.event.perso') !!}" class="btn btn-primary pull-left">Précédent : évènements
                personnels</a>
            <a href="{!! route('wiki.menu') !!}" class="btn btn-primary pull-right">Suivant : menu</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection