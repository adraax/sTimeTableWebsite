@extends('layouts.template')

@section('title')
    Utilisateurs -
@endsection


@section('content')
    <div class="col-sm-offset-3 col-sm-6">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Modification d'un utilisateur</div>
            <div class="panel-body">
                <div class="col-sm-12">
                    <form method="post" action="{!! route('user.update', $user->id) !!}" class="form-horizontal">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                            <input id="name" name="name" type="text" class="form-control" value="{{ $user->name }}"/>
                            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                            <input id="email" type="email" name="email" class="form-control"
                                   value="{{ $user->email }}">
                            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class="form-group">
                            @if(Auth::user()->admin)
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="admin" id="admin" value="1"
                                               @if($user->admin) checked @endif> Administrateur
                                    </label>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <div class="alert alert-warning" role="alert" id="alert" |><strong>Attention !</strong>
                                    Même en décochant cette case, vous recevrez un mail si un administrateur commente
                                    votre rapport de bug.
                                </div>
                                <label>
                                    <input type="checkbox" name="notifyBug" id="notifyBug" value="1"
                                           @if($user->notifyBug) checked @endif>
                                    Recevoir des mails quand quelqu'un commente mes bugs
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="notifyComment" id="notifyComment" value="1"
                                           @if($user->notifyComment) checked @endif>
                                    Recevoir des mails quand quelqu'un commente un bug que j'ai commenté
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="receiveNews" id="receiveNews" value="1"
                                           @if($user->receiveNews) checked @endif>
                                    Recevoir des mails pour les news
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
@endsection

@section('scripts')
    <script src="{{URL::asset('/js/editProfile.js')}}"></script>
@endsection
