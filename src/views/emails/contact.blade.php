@component('mail::message')
# Hello,

There is new query from {{$name}}
<br>
Message:
{{$message}}

@component('mail::button', ['url' => 'mailto: '.$email])
Replay
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
