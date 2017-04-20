@component('mail::message')
    # Nouveau Bug !

    [{{$bug->user->name}}]({!! route('user.show', $bug->user->id) !!}) a créé un nouveau bug :

    @component('mail::panel')
        ## {{$bug->title}}
        {!! nl2br(e($bug->description)) !!}
    @endcomponent

    <br>

    @component('mail::button', ['url' => route('bug.show', $bug->id)])
        Aller voir le bug.
    @endcomponent


    Team Pluto
    <br>
    <small>Ceci est un mail automatique, merci de ne pas y répondre.</small>
@endcomponent
