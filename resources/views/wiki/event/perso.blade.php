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
                <h2 class="blog-post-title">Évènements personnels</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '11-05-2017')->formatLocalized('%A %d %B %Y')}}</p>
                <p>
            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.event') !!}" class="btn btn-primary pull-left">Précédent : évènements</a>
            <a href="{!! route('wiki.event.celcat') !!}" class="btn btn-primary pull-right">Suivant : évènements
                celcat</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection