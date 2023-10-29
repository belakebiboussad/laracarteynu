@component('mail::message')
# Hey Bous


{{--@component('mail::button', ['url' => ''])--}}
{{--Creeer un Conte--}}
{{--@endcomponent--}}
{{ $msg->name }}
{{  $msg->email }}
@component('mail::panel')
  {{ $msg->message }}
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
