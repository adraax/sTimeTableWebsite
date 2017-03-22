@extends('layouts.template')

@section('content')

    <br>
    <div class="col-sm-offset-2 col-sm-8">
        @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
        @endif
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des utilisateurs</h3>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{!! $user->id !!}</td>
                        <td class="text-primary"><strong>{!! $user->name !!}</strong></td>
                        <td><a href="{!! route('user.show', $user->id) !!}" class="btn btn-success btn-block">Voir</a>
                        </td>
                        <td><a href="{!! route('user.edit', $user->id) !!}"
                               class="btn btn-warning btn-block">Modifier</a></td>
                        <td>
                            <form method="post" action="{!! route('user.destroy', $user->id) !!}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-block"
                                        onclick="return confirm('Vraiment supprimer cet utilisateur ?')">Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <a href="{!! route('user.create') !!}" class="btn btn-info pull-right"> Ajouter un utilisateur</a>
        {!! $links !!}
    </div>

@endsection