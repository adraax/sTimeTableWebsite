@extends('layouts.template')
@section('title')
    BugTracker -
@endsection

@section('content')
    <div class = "col-m-offset-2 col-m-8">
        <br>
        <div class = "panel panel-primary">
            <div class = "panel-heading">Rapport de bug</div>
            <div class = "panel-body">
                <div class = "col-sm-12">
                    <form action = "{{ route('bug.store') }}" method = "post" class = "form-horizontal panel">
                        {{ csrf_field() }}
                        <input type = "hidden" name = "user_id" id = "user_id" value = "{{auth()->user()->id}}">
                        <div class = "form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                            <input id = "title" name = "title" type = "text" class = "form-control"
                                   placeholder="Titre du bug" value="{{old('title')}}" autofocus/>
                            {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class = "{!! $errors->has('description') ? 'has-error' : '' !!}">
                            <textarea class="form-group" name="description" id="description" style="width: 100%;"
                                      rows="10"
                                      placeholder="Description">{{old('description')}}</textarea>
                            {!! $errors->first('body', '<small class="help-block">:message</small>') !!}
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