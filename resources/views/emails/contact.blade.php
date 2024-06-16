@component('mail::message')
<h1>An inquiry from website velocitytech.co.uk</h1>

Name: {{ $details['first_name'] }} {{ $details['last_name'] }}<br>
E-mail Address: {{ $details['email'] }}<br>
Mobile Number: {{ $details['phone'] }}<br>

Message: <br>
{{ $details['comments'] }}
@endcomponent
