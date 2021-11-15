@component('mail::message')
{{$message}}
@component('mail::button', ['url' => (asset('supervisor/job/'.$id))])
Click Here to see it
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
