@component('mail::message')
{{$message}}
@component('mail::button', ['url' => ('')])
{{$id}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
