@extends('layouts.template')
@section('title')
    BugTracker
@endsection

@section('content')
    <div class="col-m-offset-1 col-m-10">
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">{{$bug->title}}</div>
            <div class="panel-body">
                {{$bug->body}}
            </div>
            <div class="panel-footer">
                <div class="pull-right">
                    Le {{$bug->getDate()}} par {{$bug->user->name}}
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        @foreach($bug->comments as $comment)
            @include('comment.show')
        @endforeach

        @include('comment.create')

    </div>
@endsection