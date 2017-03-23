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

                        <form method = "post" action = "{!! route('user.update', $user->id) !!}"
                              class = "form-horizontal panel">
                            {{csrf_field()}}
                            {{ method_field('PUT') }}
                            <div class = "form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                                <input id = "name" name = "name" type = "hidden" class = "form-control"
                                       value = "{{ $bug->title }}" />
                                {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                            </div>
                            <select id = "statu" name = "statu" form = "u">
                                <option value = "open">Ouvert</option>
                                <option value = "investigation">Investigation</option>
                                <option value = "confirmed">Confirmed</option>
                                <option value = "close">Close</option>
                            </select>
                            <button type = "submit" class = "btn btn-primary pull-right">Envoyer</button>
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