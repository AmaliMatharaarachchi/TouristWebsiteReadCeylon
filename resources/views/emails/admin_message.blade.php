{{--this is the email send to all users after a admin send a message--}}
@component('mail::message')

#You have received a new message!
<h1>Hi {{$user->name}}</h1>
<p>
    message: {{$message}}

</p>

@component('mail::button', ['url' => 'www.google.com'])
Go to the site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
