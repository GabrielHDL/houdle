@component('mail::message')
# Introduction

{{$contact['name']}} Gracias por escribirnos!.
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
