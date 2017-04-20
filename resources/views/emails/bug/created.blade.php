@component('mail::message')
    # Nouveau Bug !

    Un nouveau rapport de bug a été créé :
    ## {{$bug->title}}
    {{$bug->description}}

    @component('mail::button', ['url' => route('bug.show', $bug->id)])
        Aller voir.
    @endcomponent

    Team Pluto
@endcomponent
