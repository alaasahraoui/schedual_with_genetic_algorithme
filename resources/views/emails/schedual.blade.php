@component('mail::message')
# votre emploi du temps 

The body of your message.

@component('mail::button', ['url' => ''])
VOtre Emploi du Temps ici 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
