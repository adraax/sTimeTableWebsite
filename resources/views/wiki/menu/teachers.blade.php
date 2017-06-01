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
                <h2 class="blog-post-title">Menu - Mes enseignants</h2>
                <p class="blog-post-meta">Modifié pour la dernière fois
                    le {{\Carbon\Carbon::createFromFormat('d-m-Y', '1-06-2017')->formatLocalized('%A %d %B %Y')}}</p>
                <p>
                <p>
                    Cette vue vous permet d'ajouter vos enseignants et de leur envoyer des mails.
                </p>

                <img src="{{URL::asset('images/teacherListEmpty.png')}}" alt="" class="wiki-image">
                <img src="{{URL::asset('images/teacherListEmptyButton.png')}}" alt="" class="wiki-image">

                <p>
                    <br>
                    Lorsque vous appuyez sur envoyer un mail, vous pouvez choisir les enseignants que vous souhaitez
                    contacter.
                </p>

                <img src="{{URL::asset('images/teacherListChoice.png')}}" alt="" class="wiki-image">
                <img src="{{URL::asset('images/teacherMail.png')}}" alt="" class="wiki-image">

            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.menu.ics') !!}" class="btn btn-primary pull-left">Précédent : Import/export ICS</a>
            <a href="{!! route('wiki.menu.settings') !!}" class="btn btn-primary pull-right">Suivant : Préférences</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection
