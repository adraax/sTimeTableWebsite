@extends('layouts.template')
@section('title')
    Erreur -
@endsection

@section('content')
    <div class="col-sm-8 col-sm-offset-2">
        <form action="{{ route('error.save') }}" method="post" class="form-horizontal panel">
            {{csrf_field()}}
            <div class="form-group">
                <label for="author" class="col-sm-2 control-label">Auteur : </label>
                <div class="col-sm-10">
                    <input id="author" name="author" placeholder="Auteur" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-2 control-label">Citation : </label>
                <div class="col-sm-10">
                    <textarea name="quote" id="quote" class="form-control" placeholder="Citation"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
@endsection