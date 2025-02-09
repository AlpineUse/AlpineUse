@component('mail::message')

Hi, Welcome to AlpineUse

## Your OTP Code is: **{{ $otp }}**

If you are not prompted for a otp code, please ignore this message.

Thank you,<br>
{{ Env('APP_NAME') }}

@endcomponent
