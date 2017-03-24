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

                @if(Auth::user()->admin)
                    <div class = "pull-right">
                        <form action = "{{ route('bug.update', $bug->id) }}" method = "post" id = "updateForm">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <input type = "hidden" name = "user_id" id = "user_id" value = "{{auth()->user()->id}}">

                            <input id = "title" name = "title" type = "hidden" value = "{{$bug->title}}" />
                            <textarea name = "body" id = "body" style = "display:none;"
                                      value = "{{$bug->body}}">{{$bug->body}}</textarea>

                            <select id = "status" name = "status" form = "updateForm">
                                <option value = "open">Ouvert</option>
                                <option value = "investigation">Investigation</option>
                                <option value = "confirmed">Confirmed</option>
                                <option value = "close">Close</option>
                            </select>
                            <input type = "submit" class = "btn btn-primary pull-right"></input>
                        </form>
                    </div>
                    <div class = "clearfix"></div>
                @endif
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