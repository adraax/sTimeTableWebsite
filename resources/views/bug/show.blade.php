@extends('layouts.template')
@section('title')
    BugTracker
@endsection

@section('content')
    <div class = "col-m-offset-1 col-m-10">
        <br>
        <div class = "panel panel-default">
            <div class = "panel-heading">
                @if($bug->status == "open")
                    <span class = "label label-danger">Ouvert</span>
                @elseif($bug->status == "investigation")
                    <span class = "label label-warning">Investigation</span>
                @elseif($bug->status == "confirmed")
                    <span class = "label label-info">Confirmé</span>
                @elseif($bug->status == "close")
                    <span class = "label label-success">Résolu</span>
                @endif
                {{$bug->title}}
            </div>
            <div class = "panel-body">
                {{$bug->body}}
            </div>
            <div class = "panel-footer">
                <div class = "pull-right">
                    Le {{$bug->getDate()}} par {{$bug->user->name}}
                </div>
                <div class = "clearfix"></div>
            </div>
        </div>

        @foreach($bug->comments as $comment)
            @include('comment.show')
        @endforeach

        @include('comment.create')

    </div>
@endsection