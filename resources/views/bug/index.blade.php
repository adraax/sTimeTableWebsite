@extends('layouts.template')

@section('title')
    BugTracker -
@endsection

@section('content')
    @if(!Auth::check())
        <div class="alert alert-dismissible alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Par mesure de sécurité, vous devez vous inscrire et être connecté pour poster un rapport de bug ou un
            commentaire.
        </div>
    @endif
    <span class="glyphicon glyphicon-remove"></span> {{$open}} Ouverts &nbsp; <span
            class="glyphicon glyphicon-ok"></span> {{$close}} résolus
    @if(Auth::user())
        <a href="{!! route('bug.create') !!}" class="btn btn-default btn-xs pull-right">Créer un rapport de bug</a>
    @endif
    <div class="clearfix"></div>
    <div class="panel panel-default">
        <table class="table table-striped">
            @forelse($bugs as $bug)
                <tr>
                    <td>
                        @if($bug->status == "open")
                            <span class="label label-danger">Ouvert</span>
                        @elseif($bug->status == "investigation")
                            <span class="label label-warning">Investigation</span>
                        @elseif($bug->status == "confirmed")
                            <span class="label label-info">Confirmé</span>
                        @elseif($bug->status == "close")
                            <span class="label label-success">Résolu</span>
                        @endif
                    </td>
                    <td style="width: 100%">
                        <a href="{!! route('bug.show', $bug->id) !!}"> {{$bug->title}}</a><br>
                        Ouvert {{$bug->getDiffDate()}} par <a
                                href="{!! route('user.show', $bug->user->id ) !!}">{{$bug->user->name}}</a>
                    </td>
                </tr>
            @empty
                <tr><td>Aucun rapport de bug non résolu !</td></tr>
            @endforelse
        </table>
    </div>
    {!! $bugs->links() !!}
@endsection