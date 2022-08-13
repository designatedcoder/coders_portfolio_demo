@component('mail::message')

## From: {{ $data['name'] }},
{{ $data['message'] }}

@endcomponent
