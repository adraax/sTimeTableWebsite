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
                <h2 class="blog-post-title">Installation</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '28-04-2017')->formatLocalized('%A %d %B %Y')}}</p>
                <p>
                    Pour installer l'application, il suffit de la télécharger sur le Google Play Store.
                </p>

                <h3>Permissions :</h3>
                <ul>
                    <li>INTERNET : L'application a besoin de savoir si votre téléphone est connecté à internet et de
                        pouvoir y accéder pour télécharger l'emploi du temps Celcat
                    </li>
                    <li>DÉMARRAGE : Cela permet de relancer l'import automatique de votre emploi du temps, si vous avez
                        activé cette fonctionnalité.
                    </li>
                    <li>VIBRATION : Cette autorisation permet à votre téléphone de vibrer lorsque votre emploi du temps
                        est modifié.
                    </li>
                    <li>STOCKAGE : Pour pouvoir exporter votre emploi du temps au format PDF ou ICS, l'application a
                        besoin de pouvoir le stocker sur votre téléphone avant de l'envoyer. Aussi, pour pouvoir
                        importer au format ICS, l'application doit pouvoir accéder au fichier présent sur le téléphone.
                    </li>
                </ul>
            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.connection') !!}" class="btn btn-primary pull-right">Suivant : connexion</a>
            <div><br><br></div>


        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>

@endsection
