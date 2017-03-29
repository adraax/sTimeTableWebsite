@extends('layouts.template')

@section('title')
    Accueil -
@endsection

@section('content')
    <div class="alert alert-dismissible alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        L'adresse du site a changé, c'est maintenant <em>www.adraax.eu</em>.
        <br>
        Cela n'a aucun impact pour vous, en dehors d'une déconnexion potentielle.
    </div>
    <div class="alert alert-dismissible alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Afin de corriger les bugs le plus efficacement possible, des mails automatiques seront bientôt envoyés par le
        site.
        <br>
        Vous pourrez régler vos paramètres de reception sur votre profil.
    </div>
    <div class="blog-header">
        <h1 class="blog-title">sTimeTable Wiki</h1>
        <p class="lead blog-description">Application de gestion d'emploi du temps</p>
    </div>

    <div class="row">
        <div class="col-sm-8 blog-main">

            <div class="blog-post">
                <h2 class="blog-post-title">À venir</h2>

                <img id="gif-widget" src="{{URL::asset('images/widget.gif')}}" alt="">
            </div><!-- /.blog-post -->

            <div class="blog-post">
                <h2 class="blog-post-title">Patch notes</h2>
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