@extends('layouts.template')
@section('title')
    Wiki -
@endsection
@section('content')
    <div class="blog-header">
        <h1 class="blog-title">sTimeTable Wiki</h1>
        <p class="lead blog-description">Application de gestion d'emploi du temps</p>
    </div>

    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title">Installation</h2>
                <p>
                    L'application peut-être installée sur tous les téléphones Android disposant d'une version supérieure
                    à Android 4.4 KitKat
                    <br>
                    Lors de l'installation sur une version < 6.0, vous devriez voir apparaitre la fenêtre suivante :
                    <br>
                </p>
                <img src="{{URL::asset('images/autorisation.png')}}" alt="" class="wiki-image">
                <br>
                <p>
                    <br>
                    Sur une version > 6.0 l'affichage sera similaire, les autorisations nécessaires aux fonctionnement
                    de l'application ne seront pas affichées.
                </p>
                <h3>Autorisations</h3>
                <p>
                    Il existe deux types d'autorisation : les autorisations normales, et les autorisations
                    "dangereuses".
                    <br>
                    Depuis Android 6.0, les autorisations dangereuses sont automatiquement refusées, et les
                    autorisations normales acceptées.
                    <br>
                    Nous y reviendrons plus bas.
                </p>
                <ul>
                    <li> Autorisations normales
                        <ul>
                            <li>
                                Internet : l'application a besoin de savoir si votre téléphone est connecté à internet
                                et de pouvoir y accéder pour télécharger l'emploi du temps Celcat
                            </li>
                            <li>
                                Démarrage : cela permet de relancer l'import automatique de votre emploi du temps, si
                                vous avez activé cette fonctionnalité.
                            </li>
                            <li>
                                Vibration : cette autorisation permet à votre téléphone de vibrer lorsque votre emploi
                                du temps est modifié.
                            </li>
                        </ul>
                    </li>
                    <li> Autorisation "dangereuse"
                        <ul>
                            <li>
                                Stockage : pour pouvoir exporter votre emploi du temps au format PDF, l'application a
                                besoin de pouvoir le stocker sur votre téléphone avant de l'envoyer.
                            </li>
                        </ul>
                    </li>
                </ul>

                <p>
                    <br>
                    Si vous disposez d'une version d'android > 6.0, vous devez activer les autorisations manuellement.
                    <br>
                    Pour cela allez dans les paramètres de votre téléphone, menu applications.
                    Cherchez l'application sTimeTable, cliquez dessus, puis cliquez sur Autorisations.
                    <br>
                    Vous n'avez plus qu'a accepter toutes les autorisations.
                </p>
            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.connection') !!}" class="btn btn-primary pull-right">Suivant : connexion</a>
            <div><br><br></div>


        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>

@endsection