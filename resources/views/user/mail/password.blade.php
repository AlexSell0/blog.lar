@component('mail::message')
Ваш пароль {{ $password }}
<br>
{{ config('app.name') }}
@endcomponent
