@component('mail::message')
# Olá

Vocẽ recebeu uma novo comentário.

@component('mail::button', ['url' => ''])
Clique aqui e confira
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
