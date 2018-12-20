@component('mail::message')
# Introduction

A new enquiry from user: *{{ $name }}* 
######  _{{ $email }}_ <br>

Enquiry:<br>
__{{ $question }}__



Thanks,<br>
{{ config('app.name') }}
@endcomponent
