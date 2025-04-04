@component('mail::message')
<div style="text-align: center; margin-bottom: 30px;">
    <img src="{{ config('app.url') }}/assets/images/custom/logo/logo_full.png" alt="Manu Potvin" style="max-width: 250px;">
</div>

# Nouveau message de contact

Vous avez reçu un nouveau message via le formulaire de contact du site web.

**Détails du contact :**

**Nom :** {{ $data['name'] }}  
**Téléphone :** {{ $data['phone'] }}  
**Email :** {{ $data['email'] }}

**Message :**  
{{ $data['message'] }}

@component('mail::button', ['url' => config('app.url')])
Visiter le site
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
