<div class="panel panel-default">
    <div class="panel-body">
        {{$comment->content}}
    </div>
    <div class="panel-footer">
        <div class="pull-right">
            {{ucfirst($comment->getDiffDate())}} par <a
                    href = "{!! route('user.show', $comment->user->id) !!}">{{$comment->user->name}}</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>