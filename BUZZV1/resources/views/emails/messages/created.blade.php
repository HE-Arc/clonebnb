@component('mail::message')
# Hi support Buzz!

<strong>Message de : </strong> {{ $name }}<br>
<strong>Adresse email : </strong> {{ $email }}<br>
<strong>Sujet du message : </strong> {{ $subject }} <br><br>
<strong>Contenu du message: </strong> <br>

@component('mail::panel')
{{ $msg }}
@endcomponent

{{ config('app.name') }}
@endcomponent
