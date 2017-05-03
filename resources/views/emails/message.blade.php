{{--this is the email send to admin after a user send a message--}}
@component('mail::message')

#You have received a new message!
<p>user name: {{$publicUser->name}}<br>
    user email: {{$publicUser->email}}<br>
    message: {{$message}}

</p>

@component('mail::button', ['url' => 'www.google.com'])
Go to the site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
