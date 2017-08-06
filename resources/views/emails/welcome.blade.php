{{--this is the welcome email send to users after registering--}}
@component('mail::message')
# Hi {{$user->name}},

<p>We are glad to see you registered in our web site. We will assure you a safe tour. Feel free to contact us anytime via our email:
    example@example.com
</p>

@component('mail::button', ['url' => 'www.google.com'])
Go to the site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
