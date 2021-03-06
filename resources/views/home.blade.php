@extends('layouts.template')

@section('title')
    Accueil -
@endsection

@section('content')
    <div class="blog-header">
        <h1 class="blog-title">Emploi du temps Paul Sabatier</h1>
        <p class="lead blog-description">Application de gestion d'emploi du temps</p>
    </div>

    <div class="row">
        <div class="col-sm-8 blog-main">

            <div class="blog-post">
                <h2 class="blog-post-title">À venir - Août 2017 !</h2>

                <p>
                    De nouvelles fonctionnalités verront le jour avant la rentrée, découvrez ici les grandes lignes :
                </p>
                <ul>
                    <li>Amélioration de la page "Mes enseignants" &#x2192; Envoi de mail groupé ou personnel.</li>
                    <li>Ajout d'un deuxième parcours (pour les doubles licences par exemple)</li>
                    <li>
                        Possibilité d'ajouter un lien vers un calendrier ICS pour le synchroniser automatiquement (7
                        liens maximum)
                    </li>
                    <li>
                        Permettre la rotation de l'écran pour une vue paysage de l'application avec des affichages
                        adaptés
                    </li>
                    <li>Possibilité d'ajouter des évènement qui dure "Toute la journée"</li>
                </ul>

                <p>
                    Le wiki sera mis à jour dans la foulée pour vous aidez à y voir plus clair.
                </p>
                
                <p class="blog-post-meta">
                    La Team Pluto
                </p>
            </div>

            <div class="blog-post">
                <h2 class="blog-post-title">L'application est disponible !</h2>

                <p>
                    En ce jour du 27 avril 2017, l'application voit enfin le jour sur le Google Play Store, alors
                    qu'attentez-vous pour aller la télécharger ?
                    <br>
                    Merci aux 25 participants du test utilisateurs qui ont pris le temps de tester l'application et de
                    nous faire part de leur avis !
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
                                résultat attendu
                            </li>
                            <li>Ajout d'une boite de dialogue pour la validation des autorisations (Android 6.0 et
                                supérieur)
                            </li>
                            <li>Modification du fond de la page de connexion afin de rendre le texte plus lisible</li>
                            <li>Ajout d'une légende sur la page d'emploi du temps afin d'expliciter la
                                signification des couleurs
                            </li>
                        </ul>
                    </li>
                    <li>
                        Corrections de bugs
                        <ul>
                            <li>Correction d'un problème de notification quand deux cours identiques avaient lieu
                                en même temps
                            </li>
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
