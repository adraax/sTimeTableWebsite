@component('mail::message')
# Nouveau commentaire

[{{$comment->user->name}}]({!! route('user.show', $comment->bug->user->id) !!}) a commenté le bug :
_{{$comment->bug->title}}_ auquel vous avez participé.

@component('mail::panel')
{!! nl2br(e($comment->content)) !!}
@endcomponent

@component('mail::button', ['url' => route('bug.show', $comment->bug->id)])
Aller voir le bug.
@endcomponent


Team Pluto
<br>
<small>Ceci est un mail automatique, merci de ne pas y répondre.</small>
@endcomponent
