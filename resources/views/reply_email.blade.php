@component('mail::message')

# Hi {{ $name }},
{{-- # {{ $senderMessage }} --}}
  
  
Receive  your message. We will reply you soon.
  
@component('mail::button', ['url' => $mailData['url']])
Visit Our Website
@endcomponent
  
Thanks,

{{ config('app.name') }}
@endcomponent
 