<x-mail::message>

    <b>Your form is submitted</b>
    .<br>
    <b>Name</b>: {{ $data->fname }}<br>
    <strong>Email</strong>: {{ $data->email }}<br>
    <b>Mobile</b>: {{ $data->contact }}<br>
    <b>Nationality</b>: {{ $data->nationality }}<br>
    <b>City</b>: {{ $data->city }}<br>
    <b>employment</b>: {{ $data->employment }}<br>
    <b>employer</b>: {{ $data->employer }}<br>
    <b>Salary</b>: {{ $data->salary->minimum_salary .' - '. $data->salary->maximum_salary }}<br>
    <b>LoanM</b>: {{ $data->LoanM }}<br>
    <b>Loan</b>: {{ $data->Loan }}<br>



    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
