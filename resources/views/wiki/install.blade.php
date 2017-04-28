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
            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.connection') !!}" class="btn btn-primary pull-right">Suivant : connexion</a>
            <div><br><br></div>


        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>

@endsection