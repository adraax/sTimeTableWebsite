@extends('layouts.template')

@section('content')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Modification d'un utilisateur</div>
            <div class="panel-body">
                <div class="col-sm-12">
                    <form method="put" action="{!! route('user.update', $user->id) !!}" class="form-horizontal panel">
                        {{csrf_field()}}
                        {{ method_field('PUT') }}
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                            <input id="name" name="name" type="text" class="form-control" value="{{ $user->name }}"/>
                            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                            <input id="email" type="email" name="email" id="" class="form-control"
                                   value="{{ $user->email }}">
                            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="admin" id="admin" value="1"
                                           @if($user->admin) checked @endif> Administrateur
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:history.back()" class="btn btn-primary">
        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
    </a>
    </div>
@endsection