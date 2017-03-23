@extends('layouts.template')
@section('title')
    BugTracker
@endsection

@section('title')
    Utilisateurs - @parent
@endsection

@section('content')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Rapport de bug</div>
            <div class="panel-body">
                <div class="col-sm-12">
                    <form action="{{ route('bug.store') }}" method="post" class="form-horizontal panel">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
                        <div class="form-group {!! $errors->has('title') ? 'has-error' : '' !!}">
                            <input id="title" name="title" type="text" class="form-control"
                                   placeholder="Titre du bug"/>
                            {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="{!! $errors->has('title') ? 'has-error' : '' !!}">
                            <textarea class="form-group" name="body" id="body" cols="30" rows="10"
                                      placeholder="Descriptif"></textarea>
                            {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
@endsection