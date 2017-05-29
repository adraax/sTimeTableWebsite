@extends('layouts.template')

@section('title')
    Utilisateurs -
@endsection

@section('content')
    <div class="col-sm-offset-3 col-sm-6">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Fiche d'utilisateur</div>
            <div class="panel-body">
                <p>Nom : {{ $user->name }}</p>
                @if($user->admin == 1)
                    Administrateur
                @endif

                @if(Auth::user()->admin || Auth::user() == $user)
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" @if($user->notifyBug) checked @endif disabled="disabled"> Recevoir
                            des mails quand quelqu'un commente mes bugs
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" @if($user->notifyComment) checked @endif disabled="disabled">
                            Recevoir des mails quand quelqu'un commente un bug que j'ai commenté
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" @if($user->receiveNews) checked @endif disabled="disabled"> Recevoir
                            des mails pour les news
                        </label>
                    </div>
                @endif
            </div>
            <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
            </a>
        </div>
@endsection
