@component('mail::message')
# ¡Hola, {{$contact['name']}}!

Gracias por escribirnos, nos pondremos en contacto contigo lo antes posible.
<br>
<br>
Podrías visitar nuestra página mientras nos ponemos en contacto contigo.
@component('mail::button', ['url' => 'https://houdle.com'])
Ir a Houdle&reg;
@endcomponent

O visitar nuestro blog y ver los ultimos post sobre tecnología, diseño, criptomonedas y más.

@component('mail::button', ['url' => 'https://blog.houdle.com'])
Ir a Houdle Blog&reg;
@endcomponent

Gracias,<br>
Un abrazo de parte de todo el equipo {{ config('app.name') }}
@endcomponent
