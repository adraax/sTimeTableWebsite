@extends('layouts.template')

@section('title')
    BugTracker -
@endsection

@section('content')
    <div class = "col-m-offset-1 col-m-10">
        <div style = "margin-bottom: 8px;">
            <span class = "glyphicon glyphicon-remove"></span> {{$open}} Ouverts &nbsp; <span
                    class = "glyphicon glyphicon-ok"></span> {{$close}} résolus
            <a href = "{!! route('bug.create') !!}" class = "btn btn-default btn-xs pull-right">Créer un rapport de
                                                                                                bug</a>
        </div>
        <ul class = "list-group">
            @forelse($bugs as $bug)
                <li class = "list-group-item">
                    @if($bug->status == "open")
                        <span class = "label label-danger">Ouvert</span>
                    @elseif($bug->status == "investigation")
                        <span class = "label label-warning">Investigation</span>
                    @elseif($bug->status == "confirmed")
                        <span class = "label label-info">Confirmé</span>
                    @elseif($bug->status == "close")
                        <span class = "label label-success">Résolu</span>
                    @endif
                    <a href = "{!! route('bug.show', $bug->id) !!}"> {{$bug->title}}</a> - par <a
                            href = "{!! route('user.show', $bug->user->id ) !!}">{{$bug->user->name}}</a>
                </li>
            @empty
                <li class = "list-group-item">Pas (encore !) de bugs.</li>
            @endforelse
        </ul>
        {!! $links !!}
    </div>
@endsection