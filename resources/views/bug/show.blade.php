@extends('layouts.template')
@section('title')
    BugTracker -
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
                            <input type="hidden" name="user_id" id="user_id" value="{{$bug->user()->id}}">

                            <input id = "title" name = "title" type = "hidden" value = "{{$bug->title}}" />
                            <textarea name = "description" id = "description" style = "display:none;"
                                      value = "{{$bug->description}}">{{$bug->description}}</textarea>

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
                {{$bug->description}}
            </div>
            <div class = "panel-footer">
                <div class = "pull-right">
                    {{$bug->getDate()}} par <a
                            href = "{!! route('user.show', $bug->user->id) !!}">{{$bug->user->name}}</a>
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