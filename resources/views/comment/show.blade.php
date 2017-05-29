<div class="panel panel-default">
    <div class="panel-body">
        @if($comment->trashed())
            Ce commentaire a été supprimé.
        @else
            {!! nl2br(e($comment->content)) !!}
        @endif
    </div>
    <div class="panel-footer">
        <div class="pull-left margin-5">
            @if(Auth::user() && (Auth::user()->id == $comment->user->id || Auth::user()->admin) && !$comment->trashed())
                <a href="{{route('comment.edit', $comment->id)}}" class="btn btn-xs btn-primary">Éditer</a>
            @endif
        </div>
        <div class="pull-left margin-5">
            @if(Auth::user() && (Auth::user()->id == $comment->user->id || Auth::user()->admin) && !$comment->trashed())
                <form method="post" action="{!! route('comment.destroy', $comment->id) !!}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger btn-block btn-xs">
                        Supprimer
                    </button>
                </form>
            @endif
        </div>
        <div class="pull-left margin-5">
            @if(Auth::user()->admin)
                <form method="post" action="{!! route('comment.hardDelete', $comment->id) !!}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-danger btn-block btn-xs"
                            onclick="return confirm('Vraiment supprimer cet utilisateur ?')">
                        Supprimer Définitivement
                    </button>
                </form>
            @endif
        </div>
        <div class="pull-right">
            {{ucfirst($comment->getDiffDate())}} par <a
                    href="{!! route('user.show', $comment->user->id) !!}">{{$comment->user->name}}</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
