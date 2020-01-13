@component('mail::message')
# New company created.

Hey there, just to let you know that a new company has been created. Here is the detail:

@component('mail::table')
    |  {{ $company->name }}   |         |
    |---------|:------------------------|
    | Name    | {{ $company->name }}    |
    | Email   | {{ $company->email }}   |
    | Website | {{ $company->website }} |
@endcomponent

@component('mail::button', ['url' => "http://mini-crm.local/companies/$company->id"  ])
View Company
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
