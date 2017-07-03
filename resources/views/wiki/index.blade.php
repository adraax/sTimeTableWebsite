@extends('layouts.template')
@section('title')
    Wiki - Sommaire
@endsection
@section('content')
    <div class="blog-header">
        <h1 class="blog-title">Emploi du temps Paul Sabatier</h1>
        <p class="lead blog-description">Application de gestion d'emploi du temps</p>
    </div>

    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <ul>
                    <li><a href="{!! route('wiki.installation') !!}">Installation</a></li>
                    <li><a href="{!! route('wiki.connection') !!}">Connexion</a></li>
                    <li><a href="{!! route('wiki.timetable') !!}">Emploi du temps</a></li>
                    <li>
                        <a href="{!! route('wiki.event') !!}">Évenements</a>
                        <ul>
                            <li><a href="{!! route('wiki.event.perso') !!}">Évènements personnels</a></li>
                            <li><a href="{!! route('wiki.event.celcat') !!}">Évènements celcat</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{!! route('wiki.menu') !!}">Menu</a>
                        <ul>
                            <li><a href="{!! route('wiki.menu.today') !!}">Aujourd'hui</a></li>
                            <li><a href="{!! route('wiki.menu.daysview') !!}">Vue 1/3/7 jours</a></li>
                            <li><a href="{!! route('wiki.menu.exam') !!}">Vue Examens</a></li>
                            <li><a href="{!! route('wiki.menu.synchro') !!}">Synchroniser</a></li>
                            <li><a href="{!! route('wiki.menu.pdf') !!}">Export PDF</a></li>
                            <li><a href="{!! route('wiki.menu.ics') !!}">Import/Export ICS</a></li>
                            <li><a href="{!! route('wiki.menu.teachers') !!}">Mes enseignants</a></li>
                            <li>
                                <a href="{!! route('wiki.menu.settings') !!}">Préférences</a>
                                <ul>
                                    <li><a href="{!! route('wiki.menu.settings.general') !!}">Général</a></li>
                                    <li><a href="{!! route('wiki.menu.settings.notification') !!}">Notifications</a>
                                    </li>
                                    <li><a href="{!! route('wiki.menu.settings.synchro') !!}">Synchronisation</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.blog-post -->

            <a href="{!! route('wiki.timetable') !!}" class="btn btn-primary pull-right">Suivant : emploi du temps</a>
            <div><br><br></div>
        </div><!-- /.blog-main -->
        @include('layouts.nav')
    </div>
@endsection
