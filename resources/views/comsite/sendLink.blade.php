@component('mail::message')
Hello **{{$name}}**,<br>
Thank you for !

Please click the button below to start survey.
@component('mail::button', ['url' => $link])
Go to Survey
@endcomponent
Sincerely,<br>
Localaway team.


@endcomponent
