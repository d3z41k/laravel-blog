@component('mail::message')
# Introduction

Thank you for registration.

- one
- two
- three

@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Some text in this panel
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
