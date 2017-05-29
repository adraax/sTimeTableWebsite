@extends('layouts.template')

@section('title')
    Utilisateurs -
@endsection

@section('content')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Création d'un utilisateur</div>
            <div class="panel-body">
                <div class="col-sm-12">
                    <form action="{{ route('user.store') }}" method="post" class="form-horizontal panel">
                        {{ csrf_field() }}
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                            <input id="name" name="name" type="text" class="form-control" placeholder="Nom"/>
                            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
                            <input type="password" name="password" id="password" class="form-control"
                                   placeholder="Mot de passe">
                            {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                   class="form-control" placeholder="Confirmation mot de passe">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="admin" id="admin" value="1"> Administrateur
                                </label>
                            </div>
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
