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
                <h2 class="blog-post-title">Emploi du temps</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '2-05-2017')->formatLocalized('%A %d %B %Y')}}</p>
                <p>
                <p>
                    Après vous être connecté, vous devriez arriver sur la fenêtre suivante :
                </p>

                <img src="{{URL::asset('images/emploi du temps.png')}}" alt="" class="wiki-image">
                <p>
                    <br>
                    Le menu en haut à droite permet d'afficher une légende vous permettant de savoir à quel type de
                    cours correspond chaque couleur.
                </p>
                <img src="{{URL::asset('images/legende (1).png')}}" alt="" class="wiki-image">
                <img src="{{URL::asset('images/legende (2).png')}}" alt="" class="wiki-image">

                <p>
                    <br>
                    La petite mire en bas à droite de l'écran permet de revenir au jour actuel, si celui ci n'est
                    plus visible à l'écran.
                    <br>
                    Elle disparait dès que le jour actuel réapparait à l'écran.
                </p>

                <img src="{{URL::asset('images/afterMire.png')}}" alt="" class="wiki-image">

            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.connection') !!}" class="btn btn-primary pull-left">Précédent : connexion</a>
            <a href="{!! route('wiki.event') !!}" class="btn btn-primary pull-right">Suivant : évènements</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection
