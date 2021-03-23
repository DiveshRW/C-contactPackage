@component('mail::message')
# Introduction


There is New Query from  {{$name}}
<br>

Message :

{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
