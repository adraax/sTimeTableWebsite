@extends('layouts.template')

@section('title')
    Utilisateurs -
@endsection

@section('content')

    <br>
    <div class = "col-sm-offset-2 col-sm-8">
        @if(session()->has('ok'))
            <div class = "alert alert-success alert-dismissible" role = "alert">
                <button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close"><span
                            aria-hidden = "true">&times;</span></button>
                {!! session('ok') !!}
            </div>
        @endif
        <div class = "panel panel-primary">
            <div class = "panel-heading">
                <h3 class = "panel-title">Liste des utilisateurs</h3>
            </div>
            <table class = "table">
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
                            <td class = "text-primary"><strong>{!! $user->name !!}</strong></td>
                            <td><a href = "{!! route('user.show', $user->id) !!}"
                                   class = "btn btn-success btn-block btn-xs">Voir</a>
                            </td>

                            @if(Auth::user()->id == $user->id || Auth::user()->admin)
                                <td><a href = "{!! route('user.edit', $user->id) !!}"
                                       class = "btn btn-warning btn-block btn-xs">Modifier</a>
                                </td>
                            @else
                                <td></td>
                            @endif

                            @if(Auth::user()->admin)
                                <td>
                                    <form method = "post" action = "{!! route('user.destroy', $user->id) !!}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class = "btn btn-danger btn-block btn-xs"
                                                onclick = "return confirm('Vraiment supprimer cet utilisateur ?')">
                                            Supprimer
                                        </button>
                                    </form>
                                </td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if(Auth::user()->admin)
            <a href = "{!! route('user.create') !!}" class = "btn btn-info pull-right"> Ajouter un utilisateur</a>
        @endif
        {!! $links !!}
    </div>

@endsection