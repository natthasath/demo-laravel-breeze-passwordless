<x-mail::message>
# Login Link

Pleas click the button below to login
<x-mail::button :url=$url>
Click here to login
</x-mail::button>
<br>


Thanks,<br>
{{ config('app.name') }}
<hr>

If you're having trouble clicking the "Login" button, copy and paste the URL below into your web browser:
<a href="{{$url}}">{{$url}}</a>
</x-mail::message>
