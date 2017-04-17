<div class="panel panel-default">
    <div class="panel-body">
        {{$comment->content}}
    </div>
    <div class="panel-footer">
        <div class="pull-left">
            @if(Auth::user() && Auth::user()->id == $comment->user->id)
                <a href="{{route('comment.edit', $comment->id)}}" class="btn btn-xs btn-primary">Éditer</a>
            @endif
        </div>
        <div class="pull-right">
            {{ucfirst($comment->getDiffDate())}} par <a
                    href="{!! route('user.show', $comment->user->id) !!}">{{$comment->user->name}}</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>