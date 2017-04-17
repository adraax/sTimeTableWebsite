@extends('layouts.template')
@section('title')
    Commentaire -
@endsection

@section('content')
    <div class = "col-m-offset-2 col-m-8">
        <br>
        <div class = "panel panel-primary">
            <div class = "panel-heading">Votre commentaire</div>
            <div class = "panel-body">
                <div class = "col-sm-12">
                    <form action = "{{ route('comment.update', $comment->id) }}" method = "post" class = "form-horizontal panel">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type = "hidden" name = "user_id" id = "user_id" value = "{{$comment->user->id}}">
                        <input type = "hidden" name = "bug_id" id = "bug_id" value = "{{$comment->bug->id}}">
                        <div class = "{!! $errors->has('content') ? 'has-error' : '' !!}">
                            <textarea class = "form-group" name = "content" id = "content" style = "width:100%"
                                      rows = "10"
                                      placeholder = "Tapez votre commentaire">{{$comment->content}}</textarea>
                            {!! $errors->first('content', '<small class="help-block">:message</small>') !!}
                        </div>
                        <button type = "submit" class = "btn btn-primary pull-right">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
        <a href = "javascript:history.back()" class = "btn btn-primary">
            <span class = "glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
@endsection