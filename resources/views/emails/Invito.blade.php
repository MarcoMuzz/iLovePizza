<x-mail::message>
# Aderisci alla mia associazione!!!

Unisciti alla mia associazione sulla celebre piattaforma IlovePizza!!!

<x-mail::button :url="'http://localhost:8000/register'">
Iscriviti
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
