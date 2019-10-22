@component('mail::message')

    Name : {{$data['name']}}

    Email : {{$data['email']}}

    Sujet : {{$data['sujet']}}

    Message: {{$data['message']}}

@endcomponent
