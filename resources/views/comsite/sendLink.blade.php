@component('mail::message')
Hello **{{$name}}**,<br>
Welcome to Localaway!<br>
Your access code is **{{$access_code}}**.

Please click the button below to start survey.
@component('mail::button', ['url' => $link])
Go to Survey
@endcomponent
Sincerely,<br>
Localaway team.


@endcomponent
