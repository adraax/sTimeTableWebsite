<div class = "panel panel-primary">
    <div class = "panel-heading">Rapport de bug</div>
    <div class = "panel-body">
        <div class = "col-sm-12">
            <form action = "{{ route('comment.store') }}" method = "post" class = "form-horizontal panel">
                {{ csrf_field() }}
                <input type = "hidden" name = "user_id" id = "user_id" value = "{{auth()->user()->id}}">
                <input type = "hidden" name = "bug_id" id = "bug_id" value = "{{$bug->id}}">
                <div class = "{!! $errors->has('title') ? 'has-error' : '' !!}">
                            <textarea class = "form-group" name = "body" id = "body" rows = "10"
                                      placeholder = "Descriptif"></textarea>
                    {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
                </div>
                <button type = "submit" class = "btn btn-primary pull-right">Envoyer</button>
            </form>
        </div>
    </div>