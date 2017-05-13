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
                <h2 class="blog-post-title">Menu - Export PDF</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '13-05-2017')->formatLocalized('%A %d %B %Y')}}</p>
                <p>
                <p>Ce bouton permet de télécharger immédiatement l'emploi du temps, et de vérifier si des cours ont
                    été modifiés.
                    <br>
                    Un message vous indiquant que votre emploi du temps est mis à jour apparait ensuite .
                </p>

                <img src="{{URL::asset('images/export.png')}}" alt="" class="wiki-horizontal">

            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.menu.exam') !!}" class="btn btn-primary pull-left">Précédent : Vue Examens</a>
            <a href="{!! route('wiki.menu.exam') !!}" class="btn btn-primary pull-right">Suivant : Export PDF</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection