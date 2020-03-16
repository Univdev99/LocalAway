@component('mail::message')
Hello **{{$name}}**,<br>
Welcome to LocalAway!<br>
Your access code is **{{$access_code}}**.

Please click the button below to start survey.
@component('mail::button', ['url' => $link])
Go to Survey
@endcomponent
Sincerely,<br>
LocalAway team.


@endcomponent
