<div class="panel panel-default">
    <div class="panel-body">
        {{$comment->body}}
    </div>
    <div class="panel-footer">
        <div class="pull-right">
            {{$comment->getDiffDate()}} par {{$comment->user->name}}
        </div>
        <div class="clearfix"></div>
    </div>
</div>