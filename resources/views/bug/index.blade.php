@extends('layouts.template')

@section('title')
    BugTracker
@endsection

@section('content')
    <div class = "col-m-offset-1 col-m-10">
        <div class = "row">
            <div class = "col-m-8">
                <div class = "pull-left">
                    <span class = "glyphicon glyphicon-remove"></span> {{$open}} Ouverts &nbsp; <span
                            class = "glyphicon glyphicon-ok"></span> {{$close}} résolus
                </div>
                <div class = "pull-right">
                    <button class = "btn btn-default">
                        <a href = "{!! route('bug.create') !!}">Créer un rapport de bug</a>
                    </button>
                </div>
            </div>
        </div>
        <ul class = "list-group">
            @forelse($bugs as $bug)
                @if($bugs->status == "open")
                    <span class = "label label-danger">Ouvert</span>
                @elseif($bugs->status == "investigation")
                    <span class = "label label-warning">Investigation</span>
                @elseif($bugs->status == "confirmed")
                    <span class = "label label-info">Confirmé</span>
                @elseif($bugs->status == "close")
                    <span class = "label label-success">Résolu</span>
                @endif
                <li class = "list-group-item">
                    {{$bug->title}}</a> - par <a
                            href = "{!! route('user.show', $bug->user->id ) !!}">{{$bug->user->name}}</a>
                </li>
            @empty
                <li class = "list-group-item">Pas (encore !) de bugs.</li>
            @endforelse
        </ul>
        {!! $links !!}
    </div>
@endsection