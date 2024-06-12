<x-mail::message>

    <b>Your form is submitted</b>
    .<br>
    <b>Name</b>: {{ $data->full_name }}<br>
    <strong>Email</strong>: {{ $data->subject }}<br>
    <b>Mobile</b>: {{ $data->message }}<br>
   



    Thanks,
    {{ config('app.name') }}
</x-mail::message>
