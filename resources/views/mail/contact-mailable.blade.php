@component('mail::message')
# Nuevo contacto desde Houdle&reg;

{{$contact['name']}} ha solicitado contactarse con el equipo houdle para:
<br>
{{$contact['description']}}
<br>
<br>
Dejo sus datos personales:
<br>
Correo: {{$contact['email']}}
<br>
Teléfono: {{$contact['phone']}}

@component('mail::button', ['url' => 'mailto:'.$contact['email']])
Contactar
@endcomponent

Tu bot Houdly! 😎<br>
{{ config('app.name') }}
@endcomponent
