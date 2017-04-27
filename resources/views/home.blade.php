@extends('layouts.template')

@section('title')
    Accueil -
@endsection

@section('content')
    <div class="alert alert-dismissible alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Afin de corriger les bugs le plus efficacement possible, des mails automatiques sont maintenant envoyés par le
        site.
        <br>
        Vous pouvez régler vos paramètres de réception sur votre profil.
    </div>
    <div class="blog-header">
        <h1 class="blog-title">Emploi du temps Paul Sabatier</h1>
        <p class="lead blog-description">Application de gestion d'emploi du temps</p>
    </div>

    <div class="row">
        <div class="col-sm-8 blog-main">

            <div class="blog-post">
                <h2 class="blog-post-title">L'application est disponible !</h2>

                <p>
                    En ce jour du 27 avril 2017, l'application voit enfin le jour sur le Google Play Store, alors qu'attentez-vous pour aller la télécharger ?
                    <br>
                    Merci aux 25 participants du test utilisateurs qui ont pris le temps de tester l'application et de nous faire part de leur avis !
                    Nous restons à votre écoute pour des améliorations ou des corrections à apporter.
                </p>
                <p class="blog-post-meta">
                    La Team Pluto
                </p>
            </div><!-- /.blog-post -->

            <div class="blog-post">
                <h2 class="blog-post-title">Patch notes</h2>
                <h3>v1.0</h3>
                <ul>
                    <li>
                        Changements relatifs aux retours utilisateurs
                        <ul>
                            <li>Renommage du bouton importer (menu) en synchroniser afin d'expliciter sa fonction</li>
                            <li>Changement de la fonction du bouton aujourd'hui (menu) afin de correspondre au
                                résultat attendu</li>
                            <li>Ajout d'une boite de dialogue pour la validation des autorisations (Android 6.0 et
                                supérieur)</li>
                            <li>Modification du fond de la page de connexion afin de rendre le texte plus lisible</li>
                            <li>Ajout d'une légende sur la page d'emploi du temps afin d'expliciter la
                                signification des couleurs</li>
                        </ul>
                    </li>
                    <li>
                        Corrections de bugs
                        <ul>
                            <li>Correction d'un problème de notification quand deux cours identiques avaient lieu
                                en même temps</li>
                        </ul>
                    </li>
                </ul>
                <h3>v0.3</h3>
                <ul>
                    <li>Correction d'un bug de notification</li>
                </ul>

                <h3>v0.1-Amethyst</h3>
                <ul>
                    <li>Déploiement initial</li>
                </ul>
            </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->

        @include('layouts.nav')

    </div><!-- /.row -->
@endsection