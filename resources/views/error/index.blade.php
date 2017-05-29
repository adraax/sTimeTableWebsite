@extends('layouts.template')

@section('title')
    Erreur -
@endsection

@section('content')
    <div class="jumbotron">
        <blockquote>
            <p>
                {{ $error->quote }}
                <footer>
                    {{ $error->author }}
                </footer>
        </blockquote>
        <div>
            La page que vous avez demandé est introuvable. Elle a peut-être été déplacée ou supprimée.
        </div>
    </div>
@endsection
